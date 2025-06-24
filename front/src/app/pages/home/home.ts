import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  imports: [],
  templateUrl: './home.html',
  styleUrl: './home.css'
})
export class Home {
  age: number;

  constructor() {
    let ageDiff = Math.abs(Date.now()) - Date.UTC(2000, 8, 1);
    this.age = Math.floor((ageDiff / (1000 * 3600 * 24)) / 365.25);
  }
}
