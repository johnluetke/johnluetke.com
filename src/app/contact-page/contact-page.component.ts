import { Component, OnInit, Inject } from '@angular/core';
import {DOCUMENT} from '@angular/platform-browser';
import { PageComponent } from '../page/page.component';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-contact',
  templateUrl: './contact-page.component.html',
  styleUrls: ['./contact-page.component.scss']
})
export class ContactPageComponent extends PageComponent implements OnInit {

  email_host: string;

  constructor(protected _uiService: UiService, @Inject(DOCUMENT) private document) {
    super(_uiService);
    this.email_host = document.location.hostname;
  }

  ngOnInit() {
    super.ngOnInit();
  }
}
