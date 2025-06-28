import {Directive, inject, Inject, Input, OnInit} from '@angular/core';
import {Project} from '../../models/project';
import {ProjectRepository} from '../../services/repositories/project';

@Directive()
export abstract class ProjectPageBase implements OnInit {
  project!: Project;
  abstract projectId: number;
  projectRepository = inject(ProjectRepository);
  ngOnInit(): void {
    this.projectRepository.findById(this.projectId).subscribe({
      next: value => {
        this.project = value;
        console.log("Project found");
      },
      error: err => {
        throw new Error("Error loading the project : " + err);
      }
    });

    if (!this.project) {
      throw new Error("Project must be in the Input");
    }

    this.onInit();
  }

  protected abstract onInit(): void;

}
