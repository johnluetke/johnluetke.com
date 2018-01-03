import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { DomSanitizer, SafeUrl } from '@angular/platform-browser';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-resume',
  templateUrl: './resume-page.component.html',
  styleUrls: ['./resume-page.component.scss']
})
export class ResumePageComponent extends PageComponent implements OnInit {

  public resumeUrl: string;
  public safeResumeUrl: SafeUrl;

  constructor(protected _uiService: UiService, private _sanitizer: DomSanitizer) {
    super(_uiService);
    this.resumeUrl = "/assets/resume.pdf";
  }

  ngOnInit() {
    super.ngOnInit();
    this.safeResumeUrl = this._sanitizer.bypassSecurityTrustResourceUrl(this.resumeUrl);
    console.log(this.safeResumeUrl)
  }

}
