import { TestBed } from '@angular/core/testing';

import {ToolRepository} from './tool';

describe('Tool', () => {
  let service: ToolRepository;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ToolRepository);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
