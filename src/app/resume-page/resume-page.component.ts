import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-resume',
  templateUrl: './resume-page.component.html',
  styleUrls: ['./resume-page.component.scss']
})
export class ResumePageComponent extends PageComponent implements OnInit {

  constructor(protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
  }

}
