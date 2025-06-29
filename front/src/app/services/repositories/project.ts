import {Inject, inject, Injectable} from '@angular/core';
import {TechnologyRepository} from './technology';
import {ToolRepository} from './tool';
import {SkillRepository} from './skill';
import {Project} from '../../models/project';
import {firstValueFrom, Observable} from 'rxjs';
import {ProjectORM} from '../orm/projectORM';
import {ProjectORMTest} from '../orm/impl/projectORMTest';

@Injectable({
  providedIn: 'root'
})
export class ProjectRepository {
  private projectOrm: ProjectORM = inject(ProjectORMTest);

  findAll(): Observable<Project[]> {
    return this.projectOrm.findAll();
  }

  findById(id: number): Observable<Project> {
    return this.projectOrm.findById(id);
  }
}
