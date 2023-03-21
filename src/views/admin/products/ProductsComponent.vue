<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-3">
                <SidebarComponent/>
                <!--END SIDEBAR-->
            </aside>
            <main class="col-9">
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
                    <div class="col-3 my-2" v-for="x in data" v-bind:key="x.id">
                        <div class="card">
                            <img 
                            v-bind:src="'@/assets/img/' + x.img "
                            alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{x.name}}</h5>
                                <p class="card-text">Descripción</p>
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
                data:[
                    {id:1,name:'Product 1',price:200,img:'delfin.jpg'},
                    {id:2,name:'Product 2',price:300,img:'delfin.jpg'},
                    {id:3,name:'Product 3',price:400,img:'delfin.jpg'},
                    {id:4,name:'Product 4',price:500,img:'delfin.jpg'},
                    {id:6,name:'Product 5',price:600,img:'delfin.jpg'},
                ]
            }
        }
    }
</script>