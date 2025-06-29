import { Injectable } from '@angular/core';
import {Observable, of} from 'rxjs';
import {Tool} from '../../models/tool';

@Injectable({
  providedIn: 'root'
})
export class ToolRepository {
  protected tools!: Tool[];
  constructor() {
    this.tools = [
      {
        id: 1,
        title: "WPS",
        description: "Être capable de comprendre les besoins d'un client."
      },
      {
        id: 2,
        title: "GANTT",
        description: "Pouvoir comprendre les différentes phases d'un projet."
      },
      {
        id: 3,
        title: "PERT",
        description: "Monitorer le projet afin de comprendre sa situation."
      },
    ]
  }

  findAll(): Observable<Tool[]> {
    return of(this.tools);
  }

  findById(id: number): Observable<Tool> {
    for (let tool of this.tools) {
      if (tool.id === id) {
        return of(tool);
      }
    }

    throw new Error("Skill not found");
  }
}
