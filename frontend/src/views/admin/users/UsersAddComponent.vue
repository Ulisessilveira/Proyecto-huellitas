<template>
    <div class="container shadow-lg p-3 bg-body-tertiary rounded-3">
        <h5 class="py-4">Add Users</h5>
        <form action="">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group pt-3 text-end">
                <button class="btn btn-outline-primary">Add user</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default{
        name:'UsersAddComponent'
    }
</script>