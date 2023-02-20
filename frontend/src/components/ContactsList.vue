<template v-if="contacts.data.length>0">
    <div class="row">
        <div class="col m-0">
            <div class="card mt-2 mb-2 border-0">
                <div class="row align-items-center border-top" v-for="contact of contacts.data" :key="contact">
                    <div class="col-sm-1" >
                        <img :src="'http://localhost:8000/'+contact.profile_photo" alt="profile image" class="contact-img">
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-group">
                            <li class="list-group-item border-0 p-0" id="name"><span class="fw-bold">{{ contact.full_name }}</span> </li>
                            <li class="list-group-item border-0 p-0" id="email"> {{ contact.email }}</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-between">
                        <button class="btn btn-primary m-1"><i class="bi bi-heart"></i></button>
                        <router-link :to="'/contacts/update/'+contact.id" class="btn btn-primary m-1">Edit</router-link>
                        <button class="btn btn-danger m-1">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ContactService } from '../services/ContactService';
export default {
    name: "ContactsList",
    data: function(){
        return {
            contacts : [],
            errorMessage : null
        }
    },
    created : async function(){
        try {
            let response = await ContactService.getAllContacts();
            this.contacts = response.data;
        }
        catch(error){
            this.errorMessage = error;
        }
    },
};

</script>