import {from, Observable} from 'rxjs';
import {Project} from '../../models/Project';

export interface ProjectDataAccess {
  findAll(): Observable<Project>;
}
