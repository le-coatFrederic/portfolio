import { TestBed } from '@angular/core/testing';

import {ProjectRepository} from './project';

describe('Project', () => {
  let service: ProjectRepository;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ProjectRepository);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
