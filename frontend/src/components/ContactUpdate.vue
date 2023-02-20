<template>
    <div class="container-fluid mt-5">
        <form >
            <div class="row">
                <div class="col-md-6">
                    IMAGE
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary m-3" value="Update">
                    <router-link to="/contacts/edit/:id" class="btn btn-primary m-3">Edit</router-link>
                    <button class="btn btn-danger m-3">Delete</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control m-2" id="name" placeholder="Name">
                    <label for="email">Email</label><br>
                    <input type="text" class="form-control m-2" id="email" placeholder="Email">
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="numbers">Numbers</label>
                    <div class="row border rounded" id="numbers">
                        <div class="col-md-5">    
                            <input type="text" class="form-control m-2" id="number" placeholder="phone number">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control m-2" id="details" placeholder="details">
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <button class="btn btn-danger m-1">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "ContactUpdate",
};
</script>