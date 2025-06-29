import { Component } from '@angular/core';
import {RouterLink} from '@angular/router';

@Component({
  selector: 'app-identity',
  imports: [
    RouterLink
  ],
  templateUrl: './identity.html',
  styleUrl: './identity.css'
})
export class Identity {
    public age : number = Math.floor((Date.now() - Date.UTC(2000,8,1)) / (1000 * 60 * 60 * 24 * 365));
    protected readonly Date = Date;
}
