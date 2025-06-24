import {Technology} from './Technology';
import {Skill} from './Skill';
import {Image} from './Image';

export interface Project {
  id?: string
  name: string;
  description: string;
  technologies: Technology[]
  skills: Skill[]
  images: Image[]
}
