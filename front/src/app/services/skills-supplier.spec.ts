import { TestBed } from '@angular/core/testing';

import { SkillsSupplier } from './skills-supplier';

describe('SkillsSupplier', () => {
  let service: SkillsSupplier;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(SkillsSupplier);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
