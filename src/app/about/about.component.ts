import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.scss']
})
export class AboutComponent extends PageComponent implements OnInit {

  constructor(protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
  }

}
