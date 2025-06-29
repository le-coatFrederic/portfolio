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
        title: "Définir et appliquer des méthodes de gestion de projet",
        description: "Pouvoir utiliser les différentes méthodes de gestion de projet et comprendre quand les utiliser.",
        mastering: "Acquis",
        proof: "Méthode agile pour les projets EDI, cascade pour le Portfolio et CRM, SCRUM pour AnSiWeb, Kanban pour le jeu vidéo multijoueur."
      },
      {
        id: 2,
        title: "Utiliser les outils de gestion",
        description: "Comprendre l'intérêt des outils de gestion de projet et les appliquer (PBW/WBS, triangle d'or, matrice de risque / opportunités, ...)",
        mastering: "Acquis",
        proof: "Vous pouvez consulter dans chaque projet tous les outils utilisés et qui démontrent ma maîtrise."
      },
      {
        id: 3,
        title: "Planifier et suivre le projet",
        description: "Décomposer un projet en tâches et les organiser correctement avec des outils comme PBS/WBS, PERT, GANTT. Être capable de suivre un projet pour assurer sa réalisation.",
        mastering: "Acquis",
        proof: "Tous les projets utilisent les outils précédemment cités et ont été planifié. Cette expérience m'a permis d'acquérir cette compétence."
      },
      {
        id: 4,
        title: "Gérer les risques et le budget",
        description: "Comprendre l'environemment et analyser les opportunités et les risques qui peuvent survenir pour le projet (SWOT, EVM, ROI, ...).",
        mastering: "Presque acquis",
        proof: "J'ai utilisé des outils comme SWOT dans des projets EDI et pour le CRM."
      },
      {
        id: 5,
        title: "Analyse de données et définition des KPI",
        description: "Définir les indicateurs clés de chaque projet pour mesurer son évolution.",
        mastering: "Acquis",
        proof: "Les projets EDI nécessitaient tous d'être correctement suivis grâce à des indicateurs clés."
      },
      {
        id: 6,
        title: "Connaître les systèmes d'informations",
        description: "Comprendre l'environnement informatique (télécommunication, réseau, matériel, logiciel, ...) pour accompagner au mieux les équipes de développement.",
        mastering: "Expert",
        proof: "Je suis développeur depuis presque 10 ans. Comme l'illustre les projets Portfolio, CRM, jeu multijoueur 2D, je maîtrise les outils des développeurs et je comprends leur langage."
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
