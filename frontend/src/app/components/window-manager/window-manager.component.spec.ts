import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WindowManagerComponent } from './window-manager.component';

describe('WindowManagerComponent', () => {
  let component: WindowManagerComponent;
  let fixture: ComponentFixture<WindowManagerComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WindowManagerComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WindowManagerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
