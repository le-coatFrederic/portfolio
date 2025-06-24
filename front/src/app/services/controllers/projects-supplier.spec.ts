import { TestBed } from '@angular/core/testing';

import { ProjectsSupplier } from './projects-supplier';

describe('ProjectsSupplier', () => {
  let service: ProjectsSupplier;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ProjectsSupplier);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
