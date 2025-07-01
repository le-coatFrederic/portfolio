import {Component, inject, OnInit} from '@angular/core';
import {ContactRepository} from '../../services/repositories/contact';
import {Contact} from '../../models/contact';

@Component({
  selector: 'app-contact',
  imports: [],
  templateUrl: './contact.html',
  styleUrl: './contact.css'
})
export class ContactPage implements OnInit {
  contacts!: Contact[];
  private contactRepository: ContactRepository = inject(ContactRepository);
  constructor() {
  }

  ngOnInit(): void {
    this.contactRepository.getContacts().subscribe({
      next: value => {
        this.contacts = value;
        console.log("Loaded contact " + this.contacts.length);
      },
      error: err => {
        console.error("Error loading contacts : " + err);
      }
    });
  }
}
