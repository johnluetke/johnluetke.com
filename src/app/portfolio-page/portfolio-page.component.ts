import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { PortfolioService } from './portfolio.service';
import { UiService } from '../ui.service';
import { Project } from '../project/project.component';

@Component({
  selector: 'portfolio-page',
  templateUrl: './portfolio-page.component.html',
  styleUrls: ['./portfolio-page.component.scss']
})
export class PortfolioPageComponent extends PageComponent implements OnInit {

  private portfolio: Project[];

  constructor(private portfolioService: PortfolioService, protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
    const self = this;
    self.portfolio = [];
    this.portfolioService.fetch(function(projects: Project[]) {
      self.portfolio = projects;
    });
  }
}
