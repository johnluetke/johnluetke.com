import { OnInit, HostListener } from '@angular/core';
import { UiService } from '../ui.service';

export abstract class PageComponent implements OnInit {

  constructor(protected _uiService: UiService) { }

  ngOnInit() {
  }

  @HostListener('window:scroll', ['$event'])
  checkScroll($event) {
    if (window.scrollY > 50 && this._uiService.isHeaderExpanded()) {
      this._uiService.toggleHeader();
    }
  }
}
