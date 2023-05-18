<template>
    <div>
        <NavFrontComponent/>
        <section class="py-5 container">
            <div class="row">
            <!--INFORMACION-->
                <div class="col-8">
                    <!--STEP 1-->
                    <div class="row" v-if="step == 1">
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
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <button @click="step = 2" class="btn btn-outline-primary" type="button">
                                    <i class="fa fa-arrow-right"></i> Next
                                </button>
                            </div>
                        </form>
                    </div>

                    <!--STEP 2-->
                    <div class="row" v-if="step == 2">
                        <h2 class="h5">Ship info</h2>
                        <form action="">
                            <div class="form-group">
                                <label for="">Direction:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Postal Code:</label>
                                <input type="number" min="1000" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Reference:</label>
                                <input type="text" min="1000" class="form-control">
                            </div>
                        </form>
                        <div class="form-group">
                            <button  @click="step = 3" class="btn btn-outline-primary">
                                <i class="fa fa-arrow-right"></i> Next
                            </button>
                        </div>
                    </div>
                    <!--END COL-->

                    <!--STEP 3-->
                    <div class="row" v-if="step == 3">
                        <h2 class="h5">Payment method</h2>
                        <div class="form-group">
                            <button class="btn btn-outline-primary">
                                <i class="fa fa-arrow-right"></i> Next
                            </button>
                        </div>
                    </div>
                    <!--END COL-->
                </div>
                <!--DETALLES CARRITO-->
                <div class="col-4">
                    <h2 class="h5">Your products</h2>
                    <div class="row p-4" v-for="item in items" v-bind:key="item.id">
                        <div class="col-2">
                            <img class="imgCart rounded-5" :src="url+'img/products/'+item.img" alt="img producto" />
                        </div>
                        <div class="col-10">
                            <h6>{{ item.name }}</h6>
                            <p><b>${{  item.price.toFixed(2)  }}</b></p>
                            <p><b>Cantidad:</b>{{  item.cantidad.toFixed(2)  }}</p>
                            <p><b>Subtotal:</b>${{ (item.price * item.cantidad).toFixed(2) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Total: $ {{ total.toFixed(2) }}</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';
    export default{
        name:'CheckOutComponent',
        components:{
            NavFrontComponent
        },
        data(){
            return{
                step:1,
                items:[],
                total:0,
                url:""
            }
        },
        mounted(){
            this.url = process.env.VUE_APP_IMG
            if(localStorage.getItem('carrito')){
                this.items = JSON.parse(localStorage.getItem('carrito'))
                this.items.forEach(item=>{
                    this.total += item.price * item.cantidad
                })
            }
        }
    }
</script>