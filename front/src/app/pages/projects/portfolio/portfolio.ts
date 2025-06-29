import {Component, Input} from '@angular/core';
import {ProjectPageBase} from '../projectPageBase';
import {ProjectDocument} from '../../../models/projectDocument';

@Component({
  selector: 'app-portfolio',
  imports: [
  ],
  templateUrl: './portfolio.html',
  styleUrl: './portfolio.css'
})
export class Portfolio extends ProjectPageBase{
  override projectId: number = 1;
  projectCharter!: ProjectDocument;
  protected override onInit(): void {
      if (!this.project.documents) {
        throw new Error("The project must have documents !");
      }

      if (!this.project.documents.has("project_charter")) {
        throw new Error("Some documents are missing !");
      }

      this.projectCharter = this.project.documents.get("project_charter")!;
      console.log("document charte de projet : " + this.projectCharter);
  }
}
