import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable } from 'rxjs';
import { Window } from '../models/Window';

@Injectable({
  providedIn: 'root'
})
export class WindowManagerService {
  private windows = new BehaviorSubject<Window[]>([]);

  getWindows(): Observable<Window[]> {
    return this.windows.asObservable();
  }

  openWindow(window: Window) {
    const currentWindows = this.windows.value;
    if (!currentWindows.find(w => w.id === window.id)) {
      this.windows.next([...currentWindows, window]);
    }
  }

  closeWindow(windowId: string) {
    const currentWindows = this.windows.value;
    this.windows.next(currentWindows.filter(w => w.id !== windowId));
  }

  resizeWindow(windowId: string, event: any) {
    const currentWindows = this.windows.value;
    const window = currentWindows.find(w => w.id === windowId);
    if (window) {
      window.width = event.width;
      window.height = event.height;
      this.windows.next([...currentWindows]);
    }
  }
}
