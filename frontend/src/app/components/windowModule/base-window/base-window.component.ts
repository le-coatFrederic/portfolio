import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-base-window',
  standalone: true,
  imports: [CommonModule],
  template: `
    <div class="window-content">
      <ng-content></ng-content>
    </div>
  `,
  styles: [`
    :host {
      display: block;
      height: 100%;
    }
    .window-content {
      padding: 20px;
      height: 100%;
      overflow: auto;
      box-sizing: border-box;
    }
  `]
})
export class BaseWindowComponent {
  @Input() title: string = '';
  @Input() isResizable: boolean = true;
  @Input() isDraggable: boolean = true;
  @Input() isCloseable: boolean = true;
} 