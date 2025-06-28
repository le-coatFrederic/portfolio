import {Observable} from 'rxjs';
import {Skill} from '../../models/skill';

export interface SkillORM {
  findAll(): Observable<Skill[]>;
  findById(id: number): Observable<Skill>
}
