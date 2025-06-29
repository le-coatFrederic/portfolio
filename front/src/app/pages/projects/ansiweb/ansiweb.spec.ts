import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Ansiweb } from './ansiweb';

describe('Ansiweb', () => {
  let component: Ansiweb;
  let fixture: ComponentFixture<Ansiweb>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Ansiweb]
    })
    .compileComponents();

    fixture = TestBed.createComponent(Ansiweb);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
