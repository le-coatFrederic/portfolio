import {from, Observable} from 'rxjs';
import { Project } from '../../models/Project';
import {ProjectDataAccess} from './ProjectDataAccess';

export class ProjectDataAccessSimple implements ProjectDataAccess {
    findAll(): Observable<Project> {
      let projects: Project[] = [
        {
          id: "PRO1",
          name: "Portfolio",
          description: "Site sur lequel vous êtes actuellement, ce portfolio me permet de vous communiquer mes expériences, mes compétences et les outils que j'utilise le plus.",
          technologies: [
            {
              name: "Angular",
              description: "Angular est..."
            },
            {
              name: "Springboot",
              description: "Springboot est ..."
            }
          ],
          skills: [
            {
              name: "Gestion de projet agile",
              description: "qihdoqz"
            }
          ],
          images: [
            {
              alt: "test1",
              link: "qiozhdiqzdiqz"
            }
          ]
        },{
          id: "PRO2",
          name: "AnSiWeb",
          description: "Site vitrine et blog pour une association nommée \"antiquités siciliennes\".",
          technologies: [
            {
              name: "Angular",
              description: "Angular est..."
            },
            {
              name: "Laravel",
              description: "Laravel est ..."
            }
          ],
          skills: [
            {
              name: "Gestion de projet agile",
              description: "qihdoqz"
            }
          ],
          images: [
            {
              alt: "test1",
              link: "qiozhdiqzdiqz"
            }
          ]
        },{
          id: "PRO1",
          name: "Portfolio",
          description: "Site sur lequel vous êtes actuellement, ce portfolio me permet de vous communiquer mes expériences, mes compétences et les outils que j'utilise le plus.",
          technologies: [
            {
              name: "Angular",
              description: "Angular est..."
            },
            {
              name: "Springboot",
              description: "Springboot est ..."
            }
          ],
          skills: [
            {
              name: "Gestion de projet agile",
              description: "qihdoqz"
            }
          ],
          images: [
            {
              alt: "test1",
              link: "qiozhdiqzdiqz"
            }
          ]
        },
      ]

      return from(projects);
    }

}
