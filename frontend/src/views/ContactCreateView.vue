<template>
    <div class="create">
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