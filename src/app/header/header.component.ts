import { Component, OnInit } from '@angular/core';
import { UiService } from '../ui.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  private expanded = false;
  private headerVisibleSubscription: any;

  constructor(private _uiService: UiService) {
    this.expanded = this._uiService.isHeaderExpanded();
    this.headerVisibleSubscription = _uiService.headerToggle().subscribe((value: boolean) => {
      this.expanded = value;
    });
  }

  ngOnInit() {
    this.expanded = this._uiService.isHeaderExpanded();
  }

  toggle($event) {
    if ($event.target.nodeName !== 'A') {
      this._uiService.toggleHeader();
      this.expanded = this._uiService.isHeaderExpanded();
    }
  }
}
