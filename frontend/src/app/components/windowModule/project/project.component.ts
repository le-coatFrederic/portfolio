import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { BaseWindowComponent } from '../base-window/base-window.component';

@Component({
  selector: 'app-project',
  standalone: true,
  imports: [CommonModule],
  template: `
    <div class="projects-container">
      <div class="project-card">
        <h3>Projet 1</h3>
        <p>Description du projet 1</p>
        <div class="project-tags">
          <span class="tag">Angular</span>
          <span class="tag">TypeScript</span>
        </div>
      </div>
      <div class="project-card">
        <h3>Projet 2</h3>
        <p>Description du projet 2</p>
        <div class="project-tags">
          <span class="tag">React</span>
          <span class="tag">Node.js</span>
        </div>
      </div>
    </div>
  `,
  styles: [`
    :host {
      display: block;
      height: 100%;
    }
    .projects-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px;
    }
    .project-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    .project-card h3 {
      color: #333;
      margin-bottom: 10px;
    }
    .project-tags {
      margin-top: 15px;
    }
    .tag {
      background: #e0e0e0;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 0.8em;
      margin-right: 5px;
    }
  `]
})
export class ProjectComponent extends BaseWindowComponent {
  constructor() {
    super();
    this.title = 'Projects';
  }
}
