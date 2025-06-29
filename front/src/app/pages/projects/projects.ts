import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from '@angular/router';
import {Portfolio} from './portfolio/portfolio';
import {Home} from './home/home';
import {Ansiweb} from './ansiweb/ansiweb';

@Component({
  selector: 'app-projects',
  imports: [
    Portfolio,
    Home,
    Ansiweb
  ],
  templateUrl: './projects.html',
  styleUrl: './projects.css'
})
export class ProjectsPage implements OnInit {
  slug!: string;

  constructor(private route: ActivatedRoute) {
  }

  ngOnInit() {
    this.slug = this.route.snapshot.paramMap.get("slug")!;
    this.slug = this.slug == null ? "home" : this.slug;
  }
}
