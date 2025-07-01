import {Observable, of} from 'rxjs';
import {Project} from '../../../models/project';
import {ProjectORM} from '../projectORM';
import {Injectable} from '@angular/core';
import {ProjectStatus} from '../../../models/projectStatus';
import {ProjectDocumentType} from '../../../models/projectDocumentType';
import {ProjectDocumentData} from '../../../models/projectDocumentData';

@Injectable({
  providedIn: 'root'
})
export class ProjectORMTest implements ProjectORM {
  private projectList!: Project[]
  constructor() {
    this.projectList = [
      {
        id: 1,
        title: "Portfolio",
        description: "Le site web sur lequel vous êtes actuellement.",
        skills: [

        ],
        technologies: [
          {
            id: 3,
            title: "Laravel",
            description: "Monitorer le projet afin de comprendre sa situation."
          },
        ],
        tools: [
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
        ],
        status: ProjectStatus.MAKING,
        documents: new Map([
          ["project_charter", {
            title: "project_charter",
            type: ProjectDocumentType.PROJECT_CHART,
            data: new Map([
              [
                "name",
                {
                  name: "title",
                  value: "portfolio"
                }
              ],
              [
                "description",
                {
                  name: "title",
                  value: "qizuhdiqzh"
                }
              ]
            ])
          }]
        ])
      },{
        id: 2,
        title: "AnSiWeb",
        description: "Un site vitrine, blog et gestion de concours pour une association nommée \"Antiquités Siciliennes\".",
        skills: [
        ],
        technologies: [
          {
            id: 3,
            title: "Laravel",
            description: "Monitorer le projet afin de comprendre sa situation."
          },
        ],
        tools: [
          {
            id: 1,
            title: "WBS / PBS",
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
          {
            id: 4,
            title: "Charte de projet",
            description: "Monitorer le projet afin de comprendre sa situation."
          },
        ],
        status: ProjectStatus.DONE,
      },
    ]
  }
    findAll(): Observable<Project[]> {
      return of(this.projectList);
    }
    findById(id: number): Observable<Project> {
      for (let project of this.projectList) {
        if (project.id === id) {
          return of(project);
        }
      }

      throw new Error("project not found");
    }

}
