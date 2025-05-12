import { Component, EventEmitter, Input, Output, ViewContainerRef, ComponentRef, OnInit, Type } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Window } from '../../models/Window';

@Component({
  selector: 'app-window',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './window.component.html',
  styleUrl: './window.component.css'
})
export class WindowComponent implements OnInit {
  @Input() window!: Window;
  @Output() onClose = new EventEmitter<void>();

  private isDragging = false;
  private dragOffset = { x:0, y:0 };
  private componentRef?: ComponentRef<any>;
  
  constructor(private viewContainerRef: ViewContainerRef) {}

  ngOnInit() {
    if (this.window.content) {
      this.componentRef = this.viewContainerRef.createComponent(this.window.content);
    }
  }

  ngOnDestroy() {
    if (this.componentRef) {
      this.componentRef.destroy();
    }
  }
  
  startDrag(event: MouseEvent) {
    if (!this.window.isDraggable) return;
    
    this.isDragging = true;
    this.dragOffset = {
      x: event.clientX - this.window.left,
      y: event.clientY - this.window.top
    };
    
    const mouseMoveHandler = (event: MouseEvent) => {
      if (this.isDragging) {
        this.window.left = event.clientX - this.dragOffset.x;
        this.window.top = event.clientY - this.dragOffset.y;
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
