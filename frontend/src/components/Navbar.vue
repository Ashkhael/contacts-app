<template>
    <nav id="nav" class="navbar navbar-expand-md navbar-light bg-light">
        <ul class ="navbar-nav flex-column align-items-center w-100">
          <li class="nav-item w-75">
            <router-link to="/contacts/create" class="nav-link btn btn-block m-2 btn-new-contact">New contact</router-link>
          </li>
          <li class="nav-item w-75">
            <router-link to="/" class="nav-link btn btn-block m-2">All contacts</router-link>
          </li>
          <li class="nav-item w-75">
            <router-link to="/favorites" class="nav-link btn btn-block m-2">My favorites</router-link>
          </li>  
        </ul>
    </nav>
</template>

<script>
export default {
}
</script>