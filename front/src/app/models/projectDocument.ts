import {ProjectDocumentType} from './projectDocumentType';
import {ProjectDocumentData} from './projectDocumentData';

export interface ProjectDocument {
  title: string;
  type: ProjectDocumentType;
  data: Map<string, ProjectDocumentData>;
}
