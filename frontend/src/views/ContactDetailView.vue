<template>
        <div class="col-2">
        <router-link to="/" class="nav-link btn btn-block m-2"><i class="bi bi-arrow-left"></i></router-link>
    </div>
    <div class="container border mt-5">
        <contact-detail />
    </div>
</template>
  
  
<script>
import ContactDetail from '@/components/ContactDetail.vue';

export default {
    name: "ContactDetailView",
    components:{
        ContactDetail
    }
};
</script>