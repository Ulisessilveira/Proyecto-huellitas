<template>
    <div id="cuadrado">
        <h1 v-on:mouseenter="hover">Hola mundo {{cont}}</h1>
        <button @click="test" class="btn btn-dark">Click me</button>
        <div v-if="oculto">Hola</div>
        <br>
        <input type="text" v-model="txtTexto">
        <button @click="add" class="btn btn-dark">Agregar</button>
        <ul>
            <li v-for="x in data" v-bind:key="x.id">{{ x.value }}</li>
        </ul>
    </div>
</template>

<script>
    export default{
        name:'PruebaComponent',
        data(){
            return{
                cont:0,
                oculto:false,
                txtTexto:'',
                data:[]
            }
        },
        methods: {
            test(){
                this.cont++
                this.oculto = this.cont % 2 == 0
            },
            hover(){
                this.cont+=2
                this.oculto = this.cont % 2 == 0
            },
            add(){
                this.cont++
                this.data.push({
                    id:this.cont,
                    value:this.txtTexto
                })
            }
        }
    }
</script>

<style>
    #cuadrado{
        background-color: cadetblue;
        border-radius: 15px;
        padding: 10px;
    }
</style>