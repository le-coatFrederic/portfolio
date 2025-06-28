import {Observable} from 'rxjs';
import {Tool} from '../../models/tool';

export interface ToolORM {
  findAll(): Observable<Tool[]>;
  findById(id: number): Observable<Tool>
}
