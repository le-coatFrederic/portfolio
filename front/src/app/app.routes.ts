import { Routes } from '@angular/router';
import {ProjectsPage} from './pages/projects/projects';
import {Home} from './pages/home/home';
import {Identity} from './pages/identity/identity';
import {Contact} from './pages/contact/contact';

export const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'projects', component: ProjectsPage },
  { path: 'projects/:slug', component: ProjectsPage },
  { path: 'identity', component: Identity },
  { path: 'contacts', component: Contact },
  { path: 'home', component: Home }
];
