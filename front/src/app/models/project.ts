import {Skill} from './skill';
import {Technology} from './technology';
import {Tool} from './tool';
import {ProjectStatus} from './projectStatus';
import {ProjectDocument} from './projectDocument';

export interface Project {
  id: number;
  title: string;
  description: string;
  skills: Skill[];
  technologies: Technology[];
  tools: Tool[];
  status: ProjectStatus
  documents?: Map<string, ProjectDocument>
}
