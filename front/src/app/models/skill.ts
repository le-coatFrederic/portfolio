export interface Skill {
  id: number;
  title: string;
  description: string;
  mastering: string;
  proof: string;
  category: SkillCategory;
}

export enum SkillCategory {
  PROJECT_MANAGEMENT,
  PROGRAMMING,
  TRANSVERSAL,
}
