import {Component, Input} from '@angular/core';
import {Project} from '../../../models/project';

@Component({
  selector: 'app-ansiweb',
  imports: [],
  templateUrl: './ansiweb.html',
  styleUrl: './ansiweb.css'
})
export class Ansiweb {
  @Input() public projet!: Project;
}
