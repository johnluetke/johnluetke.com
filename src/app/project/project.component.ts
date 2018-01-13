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
    return ProjectUtil.rgb2rgba(color, opacity);
  }
}

export interface Project {
  awards: Award[];
  color: string;
  coverPhotoURL: string;
  description: string;
  endDate: Date;
  gallery: GalleryItem[];
  members: Person[];
  name: string;
  responsibilities: string[];
  startDate: Date;
  summary: string;
  tagline: string;
  website: string;
}

export interface Award {
  event: string;
  name: string;
  link: string;
}

export interface GalleryItem {
  thumbnailUrl: string;
  url: string;
  originalUrl: string;
  title: string;
}

export interface Person {
  name: string;
}

export class ProjectUtil {
  static getUrlNameFromProject(project: Project): string {
    let name = project.name.replace(".com", "");
    return name.toLowerCase().replace(/[^a-z0-9\s-]/g, '').replace(/[^a-z0-9]/g, '-');
  }

  static rgb2rgba(color, opacity) {
    if (color === undefined || color === null) {
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
