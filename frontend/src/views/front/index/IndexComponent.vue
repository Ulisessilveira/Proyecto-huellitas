<template>
<body>
    <div>
        <NavFrontComponent/>
        <!-- Header-->
        <header class="bg-verde py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5" v-for="x in data" v-bind:key="x.product.id">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" :src="url+'img/products/'+x.product.img" alt="..." />
                            
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{x.product.name}}</h5>
                                    <!-- Product price-->
                                    ${{x.product.price.toFixed(2)}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <router-link class="btn btn-outline-dark mt-auto" :to="'/details/'+x.product.slug">View more</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-verde">
            <div class="container"><p class="m-0 text-center">Copyright &copy; Your Website 2023</p></div>
        </footer>
    </div>
</body>
</template>
<script>
    import NavFrontComponent from '@/components/layoutsfrontend/NavFrontComponent.vue';
    import axios from 'axios';
    export default{
        name: "IndexComponent",
        components: {
            NavFrontComponent
        },
        data(){
            return{
                categorys:[],
                data:[],
                loaded:false,
                url:""
            }
        },created() {
            this.url = process.env.VUE_APP_IMG
            axios.get(process.env.VUE_APP_URL+"products").then((result)=>{
                if (result.data.status == 'success'){
                    this.data = result.data.data
                }
            })
        }
    }
</script>