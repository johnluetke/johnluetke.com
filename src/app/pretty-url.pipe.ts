import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'prettyUrl'
})
export class PrettyUrlPipe implements PipeTransform {

  transform(url: string, args?: any): any {
    if (url === null) {
      return "";
    }

    let hostname = "";
    //find & remove protocol (http, ftp, etc.) and get hostname
    if (url.indexOf("://") > -1) {
      hostname = url.split('/')[2];
    }
    else {
      hostname = url.split('/')[0];
    }

    if (hostname == "") {
      return url;
    }

    //find & remove port number
    hostname = hostname.split(':')[0];
    //find & remove "?"
    hostname = hostname.split('?')[0];

    return hostname;
  }
}
