<template>
    <div class="container shadow-lg p-3 ms-5 bg-body-tertiary rounded-3">
        <h5 class="py-4">Add Product</h5>
        <form action="">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Condition</label>
                <select name="" id="" class="form-control">
                    <option value="new">New</option>
                    <option value="used">Used</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ship</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="" id="" class="form-control">
                    <option value="1">Food</option>
                    <option value="2">Toys</option>
                    <option value="3">House</option>
                    <option value="4">Clothes</option>
                    <option value="5">Dog collar</option>
                </select>
            </div>
            <div class="form-group mt-1 mt-2">
                <button class="btn btn-outline-primary">
                    <i class="fa fa-plus"></i>Agregar
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';
    export default{
        name:'ProductAddComponent',
        data(){
            return{
                categorys:[]
            }
        },
        async mounted() {
            let response = await axios.get('http://localhost:8000/api/categorys')
            this.categorys = response.data.data
        }
    }
</script>