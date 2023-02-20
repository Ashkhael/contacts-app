<template>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2">
                IMAGE
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item border-0 p-0" id="name"><span class="fw-bold">Placeholder Name</span> </li>
                    <li class="list-group-item border-0 p-0" id="email"> email@email</li>
                </ul>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <router-link to="/contacts/edit/:id" class="btn btn-primary m-3">Edit</router-link>
                <button class="btn btn-danger m-3">Delete</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <label for="email">Email address</label><br>
                    <li class="list-group-item border-0 p-0" id="email">email@email</li>
                </ul>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="numbers">Numbers</label>
                <div class="row border rounded" id="numbers">
                    <ul class="list-group">
                        <li class="list-group-item border-0 p-0" id="email"><div class="col-md-6"></div><div class="col-md-6"></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ContactDetail",
};
</script>