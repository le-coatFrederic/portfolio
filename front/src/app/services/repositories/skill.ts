import { Injectable } from '@angular/core';
import {Observable, of} from 'rxjs';
import {Skill} from '../../models/skill';

@Injectable({
  providedIn: 'root'
})
export class SkillRepository {
  protected skills!: Skill[];
  constructor() {
    this.skills = [
      {
        id: 1,
        title: "Définir les besoins",
        description: "Être capable de comprendre les besoins d'un client."
      },
      {
        id: 2,
        title: "Planifier les phases d'un projet",
        description: "Pouvoir comprendre les différentes phases d'un projet."
      },
      {
        id: 3,
        title: "Mesurer la réalisation du projet",
        description: "Monitorer le projet afin de comprendre sa situation."
      },
    ]
  }

  findAll(): Observable<Skill[]> {
    return of(this.skills);
  }

  findById(id: number): Observable<Skill> {
    for (let skill of this.skills) {
      if (skill.id === id) {
        return of(skill);
      }
    }

    throw new Error("Skill not found");
  }
}
