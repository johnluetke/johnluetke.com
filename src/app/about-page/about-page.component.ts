import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'about-page',
  templateUrl: './about-page.component.html',
  styleUrls: ['./about-page.component.scss']
})
export class AboutPageComponent extends PageComponent implements OnInit {

  constructor(protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
  }

}
