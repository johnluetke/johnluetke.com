import { Component, OnInit } from '@angular/core';
import { PortfolioService } from './portfolio.service';
import { Project } from '../project/project.component';

@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.component.html',
  styleUrls: ['./portfolio.component.scss']
})
export class PortfolioComponent implements OnInit {

  private portfolio: Project[];

  constructor(private portfolioService: PortfolioService) {
  }

  ngOnInit() {
    const self = this;
    self.portfolio = [];
    this.portfolioService.fetch(function(projects: Project[]) {
      self.portfolio = projects;
    });
  }
}
