<template>
    <div class="col-2">
        <router-link to="/" class="nav-link btn btn-block m-2"><i class="bi bi-arrow-left"></i></router-link>
    </div>
    <div class="container mt-5">
        <div class="list">
            <div class="card-body">
                <div class="row">
                    <div class="card">
                        <div> 
                            <h5>NAME</h5>
                        </div>
                        <favorites />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
  
<script>
import Favorites from '@/components/Favorites.vue';

export default {
    name: "FavoritesView",
    components:{
        Favorites
    }
};
</script>