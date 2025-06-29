import { Injectable } from '@angular/core';
import {Observable, of} from 'rxjs';
import {Technology} from '../../models/technology';

@Injectable({
  providedIn: 'root'
})
export class TechnologyRepository {
  protected technologies!: Technology[];
  constructor() {
    this.technologies = [
      {
        id: 1,
        title: "Angular",
        description: "Être capable de comprendre les besoins d'un client."
      },
      {
        id: 2,
        title: "Spring boot",
        description: "Pouvoir comprendre les différentes phases d'un projet."
      },
      {
        id: 3,
        title: "Laravel",
        description: "Monitorer le projet afin de comprendre sa situation."
      },
    ]
  }

  findAll(): Observable<Technology[]> {
    return of(this.technologies);
  }

  findById(id: number): Observable<Technology> {
    for (let technology of this.technologies) {
      if (technology.id === id) {
        return of(technology);
      }
    }

    throw new Error("Skill not found");
  }
}
