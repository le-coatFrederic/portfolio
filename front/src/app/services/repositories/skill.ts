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
        description: "Maîtriser les différentes approches de gestion et les adapter au contexte du projet.",
        mastering: "Acquis",
        proof: "Utilisation de la méthode Agile pour les projets EDI, méthode en cascade pour le portfolio et le CRM, Scrum pour AnSiWeb et Kanban pour le jeu multijoueur.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 2,
        title: "Utiliser les outils de gestion",
        description: "Exploiter les outils adaptés au pilotage des projets et les groupes de processus : WBS, matrice des risques, triangle d’or, etc.)",
        mastering: "Acquis",
        proof: "Sur chaque projet, j'ai utilisé des outils adaptés (PBS, WBS, Gantt, matrice SWOT...) pour structurer et documenter les activités.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 3,
        title: "Planifier et suivre le projet",
        description: "Découper, ordonnancer et suivre l’avancement des tâches à l’aide de supports visuels et structurés.",
        mastering: "Acquis",
        proof: "Mon expérience chef BestDrive m'a grandement aidé à comprendre l'intérêt d'un bon suivi et d'une bonne planification. J'ai appris à utiliser des outils comme WBS, PERT, Gantt et à assurer une visibilité complète sur les livrables et les dépendances",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 4,
        title: "Analyser les risques et gérer le budget",
        description: "Identifier les opportunités et les risques du projet, estimer les coûts et suivre les écarts.",
        mastering: "Acquis",
        proof: "J'ai utilisé l'analyse SWOT sur les projets CRM et EDI pour anticiper des points de blocage et proposer des plans d'action.",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 5,
        title: "Définir les KPI et analyser les données",
        description: "Suivre les indicateurs clés d’un projet pour mesurer sa performance et guider les décisions.",
        mastering: "Acquis",
        proof: "Sur les projets EDI, j’ai mis en place des indicateurs de suivi opérationnels (taux de transmission, erreurs, satisfaction client).",
        category: SkillCategory.PROJECT_MANAGEMENT,
      },
      {
        id: 6,
        title: "Comprendre les systèmes d'informations",
        description: "Connaître l’environnement technique (réseaux, bases de données, cybersécurité, etc.) et les contraintes du développement logiciel.",
        mastering: "Expert",
        proof: "Fort de 10 ans d’expérience en développement (Java, Angular, Swift, Spring Boot), je suis capable de dialoguer efficacement avec les équipes techniques et de traduire un besoin métier en solution logicielle cohérente.",
        category: SkillCategory.PROGRAMMING,
      },
      {
        id: 7,
        title: "Synthétiser et communiquer efficacement",
        description: "S’exprimer de façon claire, synthétique et accessible.",
        mastering: "Acquis",
        proof: "Lors des projets EDI menés avec les équipes comptable, juridique et commerciale, j’ai animé des réunions de cadrage et produit des synthèses compréhensibles de tous.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 8,
        title: "S'adapter et faire preuve de résilience",
        description: "Anticiper les imprévus et réagir rapidement aux incidents.",
        mastering: "En cours d'acquisition",
        proof: "Sur le projet RLA, nous avons rencontré des désaccords commerciaux récurrents. J'ai rendu modulables toutes les valeurs de configuration pour que l'équipe puisse ajuster les données en autonomie.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 9,
        title: "Résoudre les conflits",
        description: "Identifier l'origine des tensions, faciliter le dialogue et prévenir les futurs désaccords.",
        mastering: "En cours d'acquisition",
        proof: "Sur AnSiWeb, j'ai organisé des réunions pour comprendre le désengagement de certains membres. J'ai ensuite rééquilibré les tâches ce qui a significativement augmenté leur implication.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 10,
        title: "Prendre du recul et faire preuve d'esprit critique",
        description: "Remettre en question ses propres décisions et celles des collaborateurs pour améliorer constamment la qualité du travail.",
        mastering: "Expert",
        proof: "Dans les différents projets que j'ai gérer, j'ai aimé animé des réunions de rétrospection où je teste et challenge le travail de mes collaborateurs pour identifier les axes d'amélioration.",
        category: SkillCategory.TRANSVERSAL,
      },
      {
        id: 10,
        title: "Organiser son travail et gérer son temps",
        description: "Structurer efficacement son activité et respecter les délais fixés.",
        mastering: "Acquis",
        proof: "Chef BestDrive, collaborer avec des équipes pluridisciplinaires et internationales m'a permis d'améliorer mon organisation afin d'assurer un suivi constant et équilibré des charges de travail.",
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
