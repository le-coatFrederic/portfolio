import {inject, Injectable} from '@angular/core';
import {ProjectDataAccess} from '../repositories/ProjectDataAccess';
import {ProjectDataAccessSimple} from '../repositories/ProjectDataAccessSimple';
import {Observable} from 'rxjs';
import {Project} from '../../models/Project';

@Injectable({
  providedIn: 'root'
})
export class ProjectsSupplier {
  private projectData = inject(ProjectDataAccessSimple);
  findAll(): Observable<Project> {
    return this.projectData.findAll();
  }
}
