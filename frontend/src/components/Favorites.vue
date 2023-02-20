<template>
    <div class="row">
        <div class="col">
            <div class="card mt-2 mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-1">
                        <img src="" alt="profile image" class="contact-img">
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-group">
                            <li class="list-group-item border-0 p-0" id="name"><span class="fw-bold">Placeholder Name</span> </li>
                            <li class="list-group-item border-0 p-0" id="email"> email@email</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 d-flex justify-content-between">
                        <button class="btn btn-primary m-1"><i class="bi bi-heart"></i></button>
                        <router-link to="/contacts/edit/:id" class="btn btn-primary m-1">Edit</router-link>
                        <button class="btn btn-danger m-1">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Favorites",
};
</script>