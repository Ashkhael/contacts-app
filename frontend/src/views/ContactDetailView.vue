<template>
    <div class="view">
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