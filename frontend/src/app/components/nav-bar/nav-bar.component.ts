import { Component } from '@angular/core';
import { HomeMenuComponent } from '../home-menu/home-menu.component';
import { CommonModule } from '@angular/common';
import { WindowManagerService } from '../../services/window-manager.service';
import { Window } from '../../models/Window';

@Component({
  selector: 'app-nav-bar',
  imports: [HomeMenuComponent, CommonModule],
  templateUrl: './nav-bar.component.html',
  styleUrl: './nav-bar.component.css'
})
export class NavBarComponent {
  isHomeMenuVisible = false;

  constructor(private windowManagerService: WindowManagerService) {}

  toggleHomeMenu() {
    this.isHomeMenuVisible = !this.isHomeMenuVisible;
  }

  openWindow(windowConfig: Window) {
    this.windowManagerService.openWindow(windowConfig);
  }
}
