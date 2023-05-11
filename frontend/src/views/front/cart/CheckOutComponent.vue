<template>
    <div class="row">
        <!--INFORMACION-->
        <div class="col-8">
            <!--STEP 1-->
            <div class="row">
                <h3 class="h5">Personal information</h3>
                <form action="">
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col form-group">
                            <label for="">Last name:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Phone:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-control">
                        <button class="btn btn-outline-primary">
                            <i class="fa fa-arrow-right"></i> Next
                        </button>
                    </div>
                </form>
            </div>

            <!--STEP 2-->
            <div class="row">
                
            </div>
            <!--END COL-->
        </div>
        <!--DETALLES CARRITO-->
        <div class="col-4">
            <h2 class="h5">Your products</h2>
        </div>
    </div>
</template>

<script>
    export default{
        name:'CheckOutComponent'
    }
</script>