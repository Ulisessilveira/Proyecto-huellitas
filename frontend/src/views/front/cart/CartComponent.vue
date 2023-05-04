<template>
    <div>
        <NavFrontComponentVue />
        <section class="py-5 container">
            <h2 class="text-center">Shopping Card</h2>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Img</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in items" v-bind:key="item.id">
                        <td>{{  item.id  }}</td>
                        <td><img class="imgCart" :src="url+'img/products/'+item.img" alt="img producto" /></td>
                        <td>{{  item.name  }}</td>
                        <td>${{  item.price.toFixed(2)  }}</td>
                        <td>{{  item.cantidad.toFixed(2)  }}</td>
                        <td>${{  (item.price * item.cantidad).toFixed(2)  }}</td>
                    </tr>
                </tbody>
            </table>
            <h6 class="text-end">Total: ${{ total.toFixed(2) }}</h6>
        </section>
    </div>
</template>
<script>
    import NavFrontComponentVue from '@/components/layoutsfrontend/NavFrontComponent.vue';
    export default{
        name:'CartComponent',
        components:{
            NavFrontComponentVue
        },
        data(){
            return{
                items:[],
                total:0,
                url:""
            }
        },
        mounted(){
            this.items = JSON.parse(localStorage.getItem('carrito'))
            this.items.forEach(item=>{
                this.total += item.price * item.cantidad
            })

        },created() {
            this.url = process.env.VUE_APP_IMG
        }
    }
</script>

<style>
    .imgCart{
        width: 45px;
        height: 45px;
    }
</style>