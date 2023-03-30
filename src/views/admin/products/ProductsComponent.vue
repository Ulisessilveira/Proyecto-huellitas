<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-2">
                <SidebarComponent/>
                <!--END SIDEBAR-->
            </aside>
            <main class="col-10">
                <h1 class="d-flex justify-content-between">
                    <div class="h4 py-2">Productos</div>
                    <div class="px-4">
                        <buttton class="btn btn-sm"
                        :class="{'btn-outline-success':!add,'btn-outline-danger':add}"
                        v-on:click=" add=!add">
                            <span v-if="!add"><i class="fa fa-plus"></i> Agregar</span>
                            <span v-if="add"><i class="fa fa-times"></i> Cancelar</span>
                        </buttton>
                    </div>
                </h1> 
                <div class="row" v-if="!add">
                    <div class="col-3 my-2" v-for="x in data" v-bind:key="x.product.id">
                        <div class="card">
                            <img :src="'http://localhost:8000/img/products/'+x.product.img"
                            alt="imagen de comida para wawas" class="card-img-top img-product">
                            <div class="card-body">
                                <h5 class="card-title">{{x.product.name}}</h5>
                                <p class="card-text">{{x.product.description}}</p>
                                <div class="d-flex justify-content-between p2">
                                    <button class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i></button>
                                    <div>
                                        <button class="btn btn-sm btn-outline-danger mx-2"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-sm btn-outline-dark"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <ProductAddComponent v-if="add"/>
                <!--END MAIN-->
            </main>
            <!--END ROW MAIN-->
        </div> 
    </div>
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    import ProductAddComponent from './ProductAddComponent.vue';
    import axios from 'axios'
    export default{
        name:'productsComponent',
        components:{
            HeaderComponent,
            SidebarComponent,
            ProductAddComponent
        },
        data(){

            return {
                add:false,
                data:[]
            }
        },
        created(){
            axios.get("http://localhost:8000/api/products").then((result)=>{
                if (result.data.status == 'success'){
                    this.data = result.data.data
                }
            })
        }
    }
</script>

<style>
.img-product{
    text-align: center;
    height: 500px;
    width: 100%;
}
</style>