import { Injectable } from '@angular/core';
import {Contact} from '../../models/contact';
import {Observable, of} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ContactRepository {
  protected contacts!: Contact[]
  constructor() {
    this.contacts = [
      {
        id: 1,
        title: "Linkedin",
        description: "Linkedin est un réseau social professionnel qui me permet de suivre les différentes actualités liées à la gestion de projet et l'aventure de mes anciens collaborateurs.",
        answerInTime: "Entre 30 minutes et 2h",
        link: "https://www.linkedin.com/in/fr%C3%A9d%C3%A9ric-le-coat-473104254/",
      },
      {
        id: 2,
        title: "Mail",
        description: "J'utilise au quotidien mon adresse email pour envoyer ou recevoir des courriers électroniques. Vous pouvez me contacter facilement avec l'adresse 'lecoatfred@gmail.com'.",
        answerInTime: "Entre 30 minutes et 4h",
        link: "mailto:lecoatfred+portfolio@gmail.com?subject=Contact depuis le portfolio",
      },
    ];
  }

  getContacts(): Observable<Contact[]> {
    return of(this.contacts);
  }
}
