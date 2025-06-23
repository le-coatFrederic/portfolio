import { Routes } from '@angular/router';
import {Home} from './pages/home/home';
import {Projects} from './pages/projects/projects';
import {Tools} from './pages/tools/tools';
import {Contacts} from './pages/contacts/contacts';
import {Skills} from './pages/skills/skills';

export const routes: Routes = [
  {
    path: 'home',
    component: Home
  },
  {
    path: 'projects',
    component: Projects
  },
  {
    path: 'tools',
    component: Tools,
  },
  {
    path: 'contacts',
    component: Contacts
  },
  {
    path: 'skills',
    component: Skills
  }
];
