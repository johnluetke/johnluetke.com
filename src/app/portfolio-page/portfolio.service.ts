import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Project, ProjectUtil } from '../project/project.component';

@Injectable()
export class PortfolioService {

  constructor(private http: HttpClient) {
  }

  fetch(callback: Function): void {
    this.http
      .get<Project[]>('/assets/projects.json')
      .subscribe(data => {
        callback(data);
      });
  }

  fetchProject(url: String, callback: Function): void {
    this.fetch(function(projects: Project[]) {
      for (let project of projects) {
        if (url === ProjectUtil.getUrlNameFromProject(project)) {
          callback(project);
        }
      }
    });
  }
}
