import { Component, EventEmitter, Input, Output } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-window',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './window.component.html',
  styleUrl: './window.component.css'
})
export class WindowComponent {
  @Input() title: string = 'Window';
  @Input() top: number = 0;
  @Input() left: number = 0;
  @Input() width: number = 300;
  @Input() height: number = 200;
  @Input() isResizable: boolean = true;
  @Input() isDraggable: boolean = true;
  @Input() isCloseable: boolean = true;
  @Input() content: string = '';
  @Output() onClose = new EventEmitter<void>();

  private isDragging = false;
  private dragOffset = { x:0, y:0 };
  
  startDrag(event: MouseEvent) {
    if (!this.isDraggable) return;
    
    this.isDragging = true;
    this.dragOffset = {
      x: event.clientX - this.left,
      y: event.clientY - this.top
    };
    
    const mouseMoveHandler = (event: MouseEvent) => {
      if (this.isDragging) {
        this.left = event.clientX - this.dragOffset.x;
        this.top = event.clientY - this.dragOffset.y;
      }
    };

    const mouseUpHandler = () => {
      this.isDragging = false;
      document.removeEventListener('mousemove', mouseMoveHandler);
      document.removeEventListener('mouseup', mouseUpHandler);
    };

    document.addEventListener('mousemove', mouseMoveHandler);
    document.addEventListener('mouseup', mouseUpHandler);
  }

  close() {
    this.onClose.emit();
  }  
}
