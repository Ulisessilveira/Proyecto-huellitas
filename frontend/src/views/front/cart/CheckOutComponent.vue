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
                                    <input type="text" class="form-control" v-model="name">
                                </div>
                                <div class="col form-group">
                                    <label for="">Last name:</label>
                                    <input type="text" class="form-control" v-model="ln">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Phone:</label>
                                <input type="text" class="form-control" v-model="phone">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" v-model="email">
                            </div>
                            <div class="form-group">
                                <div class="alert alert-danger p-2 my-4" v-if="formValid">
                                    <p><b>Error: </b>Favor de llenar todos los campos</p>
                                </div>
                                <button @click="validateF()" class="btn btn-outline-primary" type="button">
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
                                <input type="text" class="form-control" v-model="address">
                            </div>
                            <div class="form-group">
                                <label for="">Postal Code:</label>
                                <input type="number" min="1000" class="form-control" v-model="cp">
                            </div>
                            <div class="form-group">
                                <label for="">Reference:</label>
                                <input type="text" min="1000" class="form-control" v-model="reference">
                            </div>
                        </form>
                        <div class="form-group">
                            <div class="alert alert-danger p-2 my-4" v-if="formValid2">
                                    <p><b>Error: </b>Favor de llenar todos los campos</p>
                                </div>
                            <button  @click="validateEnvio()" class="btn btn-outline-primary">
                                <i class="fa fa-arrow-right"></i> Next
                            </button>
                        </div>
                    </div>
                    <!--END COL-->

                    <!--STEP 3-->
                    <div class="row" v-if="step == 3">
                        <h2 class="h5">Payment method</h2>
                        <div class="form-group">
                            <div v-if="!paid" id="btnPaypal" ></div>
                            <div v-else id="confirmation" >Order complete!</div>
                            <button  class="btn btn-outline-primary" @click="sendData()">
                                <i class="fa fa-arrow-right"></i> Finish
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
    import axios from 'axios';
    import {loadScript} from "@paypal/paypal-js"
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
                url:"",
                formValid:false,
                formValid2:false,

                name:"Pepe",
                ln:"Luis",
                email:"pepeLuis@gmail.com",
                phone:"6361234567",
                address:"sucasita",
                cp:"31700",
                reference:"hay un wawa azul",

                paypal:null,
                paid:false

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
        },
        methods:{
            validateF(){
                if(this.name.trim() != "" && this.ln.trim() !=""&&
                    this.email.trim()!= ""){
                        this.step = 2
                }else{
                    this.formValid = true
                }
            },
            validateEnvio(){
                if(this.address.trim() !="" && this.cp !="" && this.reference.trim()!=""){
                    this.step = 3
                    loadScript({
                        'client-id':"AbH0PT9Y_F3LyTIiy_99rLnvR-TDzyst84K3ksOqN5p0C5q-rKTF9DdhbiH5d2sCwDXhmAaa7979SMp-",
                        currency:'MXN'
                    }).then((paypal)=>{
                        paypal.Buttons({
                            createOrder: this.createOrder,
                            onApprove: this.onApprove,
                        })
                        .render('#btnPaypal')
                    })
                }else{
                    this.formValid2 = true
                }
            },
            sendData(){
                let data = {
                    name:this.name,
                    ln: this.ln,
                    email: this.email,
                    address: this.address,
                    cp: this.cp,
                    reference: this.reference,
                    phone: this.phone,
                    items: this.items
                }
                axios.post(process.env.VUE_APP_URL+"sells",data).then(res=>{
                    console.log(res);
                })
            },
            createOrder: function(data,actions){
                console.log('Creating order...')
                return actions.order.create({
                    purchase_units:[
                        {
                            amount: {
                                value: this.total,
                            }
                        }
                    ]
                })
            },
            onApprove: function(data,actions){
                console.log('Order approved...')
                return actions.order.capture().then(()=>{
                    this.paid = true;
                    console.log('Order complete!')
                })
            }
        }
    }
</script>