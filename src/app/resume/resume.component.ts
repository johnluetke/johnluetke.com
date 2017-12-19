import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-resume',
  templateUrl: './resume.component.html',
  styleUrls: ['./resume.component.scss']
})
export class ResumeComponent extends PageComponent implements OnInit {

  constructor(protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
  }

}
