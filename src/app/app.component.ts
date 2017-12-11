import { Component } from '@angular/core';
import { UiService } from './ui.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

constructor(private _uiService: UiService) { }

  globalClick($event) {
    if (this._uiService.isHeaderExpanded()) {
      this._uiService.toggleHeader();
    }
  }
}
