import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  expanded = false;

  constructor() { }

  ngOnInit() {
  }

  toggle($event) {
    if ($event.target.nodeName != "A") {
      this.expanded = !this.expanded;
    }
  }
}
