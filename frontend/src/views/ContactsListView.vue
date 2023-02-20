<template>
    <div class="container mt-5">
        <form>
            <input type="text" class="form-control m-2" placeholder="Search...">
        </form>
        <div class="list">
            <div class="card-body">
                <div class="row">
                    <div class="card">
                        <div> 
                            <h5>NAME</h5>
                        </div>
                        <contacts-list />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
  
<script>
import ContactsList from '@/components/ContactsList.vue';

export default {
    name: "ContactsListView",
    components:{
        ContactsList
    },
};
</script>