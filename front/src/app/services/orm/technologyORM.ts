import {Observable} from 'rxjs';
import {Technology} from '../../models/technology';

export interface TechnologyORM {
  findAll(): Observable<Technology[]>;
  findById(id: number): Observable<Technology>
}
