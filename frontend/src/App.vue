<template>
  <div id="app">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <navbar/>
        </div>
        <div class="col-9">
            <router-view/>
        </div>  
      </div>
    </div>
  </div>
</template>


<script>
import Navbar from './components/Navbar.vue';

export default {
  name: "App",
  components:{
    Navbar,
  }
};
</script>

<style>
  @import './assets/base.css';
</style>



