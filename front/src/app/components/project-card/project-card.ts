import {Component, Input} from '@angular/core';
import {Project} from '../../models/project';
import {ProjectStatus} from '../../models/projectStatus';

@Component({
  selector: 'app-project-card',
  imports: [],
  templateUrl: './project-card.html',
  styleUrl: './project-card.css'
})
export class ProjectCard {
  @Input() project!: Project
  protected readonly ProjectStatus = ProjectStatus;
}
