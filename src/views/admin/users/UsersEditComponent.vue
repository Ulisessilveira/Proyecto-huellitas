<template>
    <div class="container shadow-lg p-3 ms-5 bg-body-tertiary rounded-3">
        <h5 class="py-4">Editar Usuario</h5>
        <form action="">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control">
            </div>
        </form>
    </div>
</template>

<script>
    export default{
        name:'UsersEditComponent'
    }
</script>