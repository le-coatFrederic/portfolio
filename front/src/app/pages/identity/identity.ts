import {Component, inject, OnInit} from '@angular/core';
import {RouterLink} from '@angular/router';
import {SkillRepository} from '../../services/repositories/skill';
import {Skill} from '../../models/skill';

@Component({
  selector: 'app-identity',
  imports: [
    RouterLink
  ],
  templateUrl: './identity.html',
  styleUrl: './identity.css'
})
export class Identity implements OnInit {
    public age : number = Math.floor((Date.now() - Date.UTC(2000,8,1)) / (1000 * 60 * 60 * 24 * 365));
    protected readonly Date = Date;
    protected skillRepository = inject(SkillRepository);
    public skills!: Skill[]
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
  }
}
