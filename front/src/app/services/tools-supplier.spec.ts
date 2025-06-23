import { TestBed } from '@angular/core/testing';

import { ToolsSupplier } from './tools-supplier';

describe('ToolsSupplier', () => {
  let service: ToolsSupplier;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ToolsSupplier);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
