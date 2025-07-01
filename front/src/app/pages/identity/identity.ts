import {Component, inject, OnInit} from '@angular/core';
import {SkillRepository} from '../../services/repositories/skill';
import {Skill, SkillCategory} from '../../models/skill';

@Component({
  selector: 'app-identity',
  imports: [],
  templateUrl: './identity.html',
  styleUrl: './identity.css'
})
export class Identity implements OnInit {
  public age: number = Math.floor((Date.now() - Date.UTC(2000, 8, 1)) / (1000 * 60 * 60 * 24 * 365));
  protected readonly Date = Date;
  protected skillRepository = inject(SkillRepository);
  protected skills!: Skill[]

  public methodAndProgrammingSkills: Skill[] = [];
  public transversalSkills: Skill[] = [];

  constructor() {

  }

  ngOnInit(): void {
    this.skillRepository.findAll().subscribe({
      next: value => {
        this.skills = value;
      },
      error: err => {
        console.error("Couldn't load skills : " + err);
      }
    });

    this.sortSkills();
  }

  private sortSkills() {
    this.skills.forEach(value => {
      switch (value.category) {
        case SkillCategory.PROGRAMMING:
          this.methodAndProgrammingSkills.push(value);
          break;
        case SkillCategory.PROJECT_MANAGEMENT:
          this.methodAndProgrammingSkills.push(value);
          break;
        case SkillCategory.TRANSVERSAL:
          this.transversalSkills.push(value);
          break;
      }
    })
  }
}
