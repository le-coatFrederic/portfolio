import {Observable} from 'rxjs';
import {Project} from '../../models/project';

export interface ProjectORM {
  findAll(): Observable<Project[]>;
  findById(id: number): Observable<Project>
}
