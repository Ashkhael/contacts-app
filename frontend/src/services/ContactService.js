import axios from "axios";

export class ContactService {
    static serverURL = `http://localhost:8000/api`;

    static getAllContacts() {
        let dataURL = `${this.serverURL}/contacts`;

        return axios.get(dataURL);
    }
    static getContact(id) {
        let dataURL = `${this.serverURL}/contacts/${id}`;

        return axios.get(dataURL);
    }
    static createContact(contact) {
        let dataURL = `${this.serverURL}/contacts/`;

        return axios.post(dataURL, contact);
    }
    static updateContact(contact, id) {
        let dataURL = `${this.serverURL}/contacts/${id}`;

        return axios.put(dataURL, contact);
    }
    static deleteContact(id) {
        let dataURL = `${this.serverURL}/contacts/${id}`;

        return axios.delete(dataURL);
    }
    static favoriteContact(id) {
        let dataURL = `${this.serverURL}/favorite/${id}`;

        return axios.put(dataURL);
    }
}