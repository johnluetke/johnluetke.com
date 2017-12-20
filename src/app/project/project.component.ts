import { Component, OnInit, Input } from '@angular/core';
import { DomSanitizer, SafeStyle } from '@angular/platform-browser';

@Component({
  selector: 'app-project',
  templateUrl: './project.component.html',
  styleUrls: ['./project.component.scss']
})
export class ProjectComponent implements OnInit {

  @Input() project: Project;
  coverImage: SafeStyle;
  urlName: string;

  constructor(private sanitizationService: DomSanitizer) { }

  ngOnInit() {
    this.coverImage = this.sanitizationService.bypassSecurityTrustStyle('url(' + this.project.coverPhotoURL + ')');
    this.urlName = ProjectUtil.getUrlNameFromProject(this.project);
  }

  rgb2rgba(color, opacity) {
    if (color === undefined) {
      return color;
    }

    const rgb = color.match(/^rgb\((\d+),\s+?(\d+),\s+?(\d+)\)$/);

    if (rgb != null) {
      color = 'rgba(' + rgb[1] + ', ' + rgb[2] + ', ' + rgb[3] + ', ' + opacity + ')';
      return color;
    } else {
      console.error('bad rgb value: ' + color);
    }
  }
}

export interface Project {
  awards: string[];
  color: string;
  coverPhotoURL: SafeStyle;
  description: string;
  endDate: Date;
  members: string[];
  name: string;
  responsibilities: string[];
  startDate: Date;
  website: string;
}

export class ProjectUtil {
  static getUrlNameFromProject(project: Project): string {
    return project.name.toLowerCase().replace(/[^a-z0-9\s]/g, '').replace(/[^a-z0-9]/g, '-');
  }
}
