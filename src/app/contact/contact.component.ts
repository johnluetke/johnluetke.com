import { Component, OnInit } from '@angular/core';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.scss']
})
export class ContactComponent extends PageComponent implements OnInit {

  constructor(protected _uiService: UiService) {
    super(_uiService);
  }

  ngOnInit() {
  }

}
