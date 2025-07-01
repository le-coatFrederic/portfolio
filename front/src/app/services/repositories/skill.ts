import {Injectable} from '@angular/core';
import {Observable, of} from 'rxjs';
import {Skill, SkillCategory} from '../../models/skill';

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
        proof: "Méthode agile pour les projets EDI, cascade pour le Portfolio et CRM, SCRUM pour AnSiWeb, Kanban pour le jeu vidéo multijoueur.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 2,
        title: "Utiliser les outils de gestion",
        description: "Comprendre l'intérêt des outils de gestion de projet et les appliquer (PBW/WBS, triangle d'or, matrice de risque / opportunités, ...)",
        mastering: "Acquis",
        proof: "Vous pouvez consulter dans chaque projet tous les outils utilisés et qui démontrent ma maîtrise.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 3,
        title: "Planifier et suivre le projet",
        description: "Décomposer un projet en tâches et les organiser correctement avec des outils comme PBS/WBS, PERT, GANTT. Être capable de suivre un projet pour assurer sa réalisation.",
        mastering: "Acquis",
        proof: "Tous les projets utilisent les outils précédemment cités et ont été planifié. Cette expérience m'a permis d'acquérir cette compétence.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 4,
        title: "Gérer les risques et le budget",
        description: "Comprendre l'environemment et analyser les opportunités et les risques qui peuvent survenir pour le projet (SWOT, EVM, ROI, ...).",
        mastering: "En cours d'acquisition",
        proof: "J'ai utilisé des outils comme SWOT dans des projets EDI et pour le CRM.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 5,
        title: "Analyse de données et définition des KPI",
        description: "Définir les indicateurs clés de chaque projet pour mesurer son évolution.",
        mastering: "Acquis",
        proof: "Les projets EDI nécessitaient tous d'être correctement suivis grâce à des indicateurs clés.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 6,
        title: "Connaître les systèmes d'informations",
        description: "Comprendre l'environnement informatique (télécommunication, réseau, matériel, logiciel, ...) pour accompagner au mieux les équipes de développement.",
        mastering: "Expert",
        proof: "Je suis développeur depuis presque 10 ans. Comme l'illustre les projets Portfolio, CRM, jeu multijoueur 2D, je maîtrise les outils des développeurs et je comprends leur langage.",
        category: SkillCategory.PROGRAMMING,
      },
      {
        id: 7,
        title: "Synthétiser et communiquer efficacement",
        description: "Pouvoir s'exprimer clairement de façon synthétique et simple pour que tout le monde comprenne ce que l'on dit..",
        mastering: "Acquis",
        proof: "Au cours des projets EDI, menés en collaboration avec les équipes comptabilités, juridiques et commerciales, j'ai acquis une expérience dans la communication et la synthèse d'information.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 8,
        title: "S'adapter et être résilient",
        description: "Anticiper d'éventuels problèmes et réagir efficacement s'ils surviennent.",
        mastering: "En cours d'acquisition",
        proof: "Lors de la mise en place du projet RLA, nous avons rencontré d'énormes problèmes liés à des désaccords dans l'équipe commerciale. Nous avons très vite compris que ce problème pouvait survenir quotidiennement. Nous avons anticiper en rendant modulable toutes les valeurs qui composent une RLA pour que l'équipe commerciale puisse elle même définir les données.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 9,
        title: "Résoudre les conflits",
        description: "Comprendre les conflits, aider à leur résolution et prévenir les prochains sujets de discorde.",
        mastering: "En cours d'acquisition",
        proof: "Dans des projets comme AnSiWeb, il était fréquent d'avoir des conflits liés au manque d'implicatioon de certains membres. J'ai essayé avec le reste de l'équipe de comprendre l'origine de ce manquement et de trouver une solution. Ainsi, une des personnes qui était le moins impliqué a vu sa motivation grandir et sa quantité de travail augmenté.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 10,
        title: "Être critique et savoir prendre du recul",
        description: "Il est impossible d'avoir une éxécution parfaite de son travail, même avec une grande expérience. C'est pour cela qu'il est important d'avoir du recul sur son travail, de comprendre ses faiblesses et ses points forts afin de l'améliorer.",
        mastering: "Expert",
        proof: "Sur tous les projets que j'ai réalisé, j'ai constamment remis en question les décisions de mes collaborateur (de façon justifié) pour être sûr qu'ils fournissent le meilleur travail possible. Aussi, quotidiennement je suis mes actions et je les juges et fait juger pour connaître mes axes d'amélioration.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 10,
        title: "S'organiser et gérer son temps",
        description: "Organiser correctement son temps pour assurer la résolution des tâches. Un collaborateur doit avoir une charge de travail équilibrée et adaptée à ses besoins. Aussi, il est important de rendre les livrabres dans les délais.",
        mastering: "Acquis",
        proof: "L'organisation était une compétence qui me faisait défaut avant mon arrivé chez BestDrive. Collaborer avec des équipes pluridisciplinaires et internationale m'a aider à améliorer cette compétence et à assurer que toutes les équipes ont du travail en tout temps.",
        category: SkillCategory.TRANSVERSAL,
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
