import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { NavBarComponent } from './components/nav-bar/nav-bar.component';
import { WindowManagerComponent } from './components/window-manager/window-manager.component';
@Component({
  selector: 'app-root',
  imports: [RouterOutlet, NavBarComponent, WindowManagerComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css',
})
export class AppComponent {
  title = 'portfolio';
}
