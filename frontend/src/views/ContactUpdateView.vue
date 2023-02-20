<template>
    <div class="col-2">
        <router-link to="/" class="nav-link btn btn-block m-2"><i class="bi bi-arrow-left"></i></router-link>
    </div>
    <div class="container border mt-5">
        <contact-update />
    </div>
</template>
  
  
<script>
import ContactUpdate from '@/components/ContactUpdate.vue';

export default {
    name: "ContactUpdateView",
    components:{
        ContactUpdate
    }
};
</script>