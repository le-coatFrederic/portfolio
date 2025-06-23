import { TestBed } from '@angular/core/testing';

import { TechsSupplier } from './techs-supplier';

describe('TechsSupplier', () => {
  let service: TechsSupplier;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(TechsSupplier);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
