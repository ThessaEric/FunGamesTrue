import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FidelityComponent } from './fidelity.component';

describe('FidelityComponent', () => {
  let component: FidelityComponent;
  let fixture: ComponentFixture<FidelityComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FidelityComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FidelityComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
