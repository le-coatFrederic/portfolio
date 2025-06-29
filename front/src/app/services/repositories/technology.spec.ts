import { TestBed } from '@angular/core/testing';

import {TechnologyRepository} from './technology';

describe('Technology', () => {
  let service: TechnologyRepository;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(TechnologyRepository);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
