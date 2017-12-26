import { Component, OnInit, Input, Inject, ViewChild } from '@angular/core';
import { DOCUMENT } from '@angular/platform-browser';
import { NgxImageGalleryComponent, GALLERY_IMAGE, GALLERY_CONF } from "ngx-image-gallery";
import { GalleryItem } from '../project/project.component'

@Component({
  selector: 'gallery',
  templateUrl: './gallery.component.html',
  styleUrls: ['./gallery.component.scss']
})
export class GalleryComponent implements OnInit {

  @Input() items: GalleryItem[];
  @ViewChild(NgxImageGalleryComponent) ngxImageGallery: NgxImageGalleryComponent;
  location: Location;

  constructor(@Inject(DOCUMENT) private document: any) { }

  ngOnInit() {
    for (let item of this.items) {
      if (item.url.split('.')[1] == 'pdf') {
        item.originalUrl = item.url;
        item.title += " (click image to download pdf)";
        item.url = item.url.split('.')[0] + ".png";

        if (!item.thumbnailUrl) {
          item.thumbnailUrl = item.url.split('.')[0] + ".png";
        }
      }
      else if (item.thumbnailUrl == null) {
        item.thumbnailUrl = item.url;
      }
    }
  }

  openGallery(index: number = 0) {
    this.ngxImageGallery.open(index);
  }

  galleryImageClicked(index: number) {
    let item = this.items[index];
    if (item.originalUrl && item.originalUrl.split('.')[1] === "pdf") {
      this.document.location.href = item.originalUrl;
    }
  }
}
