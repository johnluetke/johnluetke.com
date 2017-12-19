import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { DomSanitizer } from '@angular/platform-browser';
import { Project } from './project';

@Injectable()
export class PortfolioService {

  constructor(private http: HttpClient) {
  }

  fetch(callback: Function): void {
    this.http
      .get<Project[]>('/data/portfolio.json')
      .subscribe(data => {
        callback(data);
      });
  }
}
