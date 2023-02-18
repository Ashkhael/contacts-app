<template>
    <div class="home">
        <contacts-list />
    </div>
</template>
  
  
<script>
import ContactsList from '@/components/ContactsList.vue';

export default {
    name: "ContactsListView",
    components:{
        ContactsList
    }
};
</script>