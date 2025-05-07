import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { WindowComponent } from '../window/window.component';
import { WindowManagerService } from '../../services/window-manager.service';
import { Window } from '../../models/Window';

@Component({
  selector: 'app-window-manager',
  standalone: true,
  imports: [CommonModule, WindowComponent],
  templateUrl: './window-manager.component.html',
  styleUrl: './window-manager.component.css'
})
export class WindowManagerComponent implements OnInit {
  windows: Window[] = [];

  constructor(private windowManagerService: WindowManagerService) {}

  ngOnInit() {
    this.windowManagerService.getWindows().subscribe(windows => {
      this.windows = windows;
    });
  }

  closeWindow(windowId: string) {
    this.windowManagerService.closeWindow(windowId);
  }

  resizeWindow(windowId: string, event: any) {
    this.windowManagerService.resizeWindow(windowId, event);
  }
}
