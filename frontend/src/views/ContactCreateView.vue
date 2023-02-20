<template>
    <div class="col-2">
        <router-link to="/" class="nav-link btn btn-block m-2"><i class="bi bi-arrow-left"></i></router-link>
    </div>
    <div class="container border mt-5">
        <contact-create />
    </div>
</template>
  
  
<script>
import ContactCreate from '@/components/ContactCreate.vue';

export default {
    name: "ContactCreateView",
    components:{
        ContactCreate
    }
};
</script>