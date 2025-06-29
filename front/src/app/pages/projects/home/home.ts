import {Component} from '@angular/core';
import {Stat} from '../../../models/stat';
import {ProjectRepository} from '../../../services/repositories/project';
import {Project} from '../../../models/project';
import {of} from 'rxjs';
import {ProjectStatus} from '../../../models/projectStatus';
import {ProjectCard} from '../../../components/project-card/project-card';
import {RouterLink} from '@angular/router';

@Component({
  selector: 'app-home',
  imports: [
    ProjectCard,
    RouterLink

  ],
  templateUrl: './home.html',
  styleUrl: './home.css'
})
export class Home {
  public stats!: Stat[];
  public projects!: Project[];
  constructor(private projectRepository: ProjectRepository) {
    this.projectRepository.findAll().subscribe(
      {
        next: value => {
          this.projects = value;
        }
      }
    )

    let nbRunningProject = 0;
    let nbDonegProject = 0;

    for (let project of this.projects) {
      switch (project.status) {
        case ProjectStatus.DONE:
          nbDonegProject++;
          break;
        case ProjectStatus.MAKING || ProjectStatus.PLANNING || ProjectStatus.STARTING:
          nbRunningProject++;
          break;
      }
    }

    this.stats = [
      {
        title: 'Nombre de projet :',
        value: String(this.projects.length)
      },
      {
        title: 'Nombre de projet en cours :',
        value: String(nbRunningProject)
      },
      {
        title: 'Nombre de projet terminé :',
        value: String(nbDonegProject)
      },
    ]
  }

  protected readonly of = of;
}
