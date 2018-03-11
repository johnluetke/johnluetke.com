import { Component, OnInit, OnDestroy, ViewEncapsulation } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { ActivatedRoute } from '@angular/router';
import { Project, ProjectUtil } from '../project/project.component'
import { PortfolioService } from '../portfolio-page/portfolio.service';
import { DomSanitizer, SafeStyle, SafeHtml } from '@angular/platform-browser';
import { UiService } from '../ui.service';

@Component({
  selector: 'project-page',
  templateUrl: './project-page.component.html',
  styleUrls: ['./project-page.component.scss'],
  encapsulation: ViewEncapsulation.None,
})
export class ProjectPageComponent extends PageComponent implements OnInit {

  Arr = Array;
  MAX_GLANCE_COUNT = 4;

  url: string;
  project: Project;
  summary: SafeHtml;
  description: SafeHtml;
  coverImage: SafeStyle;
  ongoing: boolean;
  status: string;
  statusHTML: string;
  glanceCount: number;

  private sub: any;

  constructor(protected _uiService: UiService,
              private _portfolioService: PortfolioService,
              private _sanitizationService: DomSanitizer,
              private _route: ActivatedRoute) {
    super(_uiService);
    this.project = { awards: [], color: null, coverPhotoURL: null, description: null, endDate: null, gallery: [], members: [], name: "Loading...", responsibilities: [], startDate: null, summary: null, tagline: null, website: null };
    this.glanceCount = 0;
  }

  ngOnInit() {
    const self = this;
    super.ngOnInit();

    this.sub = this._route.params.subscribe(params => {
       this.url = params['name'];
       this._portfolioService.fetchProject(this.url, function(project: Project) {
         self.project = project;
         self.summary = self._sanitizationService.bypassSecurityTrustHtml(project.summary);
         self.description = self._sanitizationService.bypassSecurityTrustHtml(project.description);
         self.ongoing = project.endDate == null;
         self.coverImage = "url(/assets/projects/" + params['name'] + "/cover.png)";
       });
    });
  }

  getIconName(responsibility: string) {
    switch (responsibility.toLowerCase()) {
      case "physical prototyping":
        return "wrench";
      case "software engineering":
      case "web design":
        return "code";
      case "user test moderation":
        return "clipboard";
      case "visual design":
        return "eyedropper";
      default:
        return "person";
    }
  }

  rgb2rgba(color, opacity) {
    return ProjectUtil.rgb2rgba(color, opacity);
  }

  showGlance(glance: string): boolean {
    let visible = true;
    switch (glance) {
      case 'awards':
        visible = this.project.awards != null && this.project.awards.length > 0; break;
      case 'responsibilities':
        visible = this.project.responsibilities !== null; break;
      case 'website':
        visible = this.project.website !== null; break;
      default:
        visible = true;
    }

    return visible;
  }

  ngOnDestroy() {
    this.sub.unsubscribe();
  }
}
