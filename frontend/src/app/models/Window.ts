import { Type } from '@angular/core';

export interface Window {
    id: string,
    title: string,
    content: Type<any>,
    top: number,
    left: number,
    width: number,
    height: number,
    isResizable: boolean,
    isDraggable: boolean,
    isCloseable: boolean,
}