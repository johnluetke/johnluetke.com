import { Injectable } from '@angular/core';
import { Subject } from 'rxjs/Subject';

@Injectable()
export class UiService {

  private headerExpandedChange: Subject<boolean>;
  private headerExpanded: boolean;

  constructor() {
    this.headerExpandedChange = new Subject<boolean>();
    this.headerExpanded = false;
  }

  headerToggle() {
    return this.headerExpandedChange;
  }

  toggleHeader() {
    this.headerExpanded = !this.headerExpanded;
    this.headerExpandedChange.next(this.headerExpanded);
  }

  isHeaderExpanded() {
    return this.headerExpanded;
  }
}
