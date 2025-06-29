import { TestBed } from '@angular/core/testing';
import {SkillRepository} from './skill';


describe('Skill', () => {
  let service: SkillRepository;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(SkillRepository);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
