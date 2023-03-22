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
                    <div class="h4 py-2">Home</div>
                </h1> 
                <!--<button class="btn btn-danger">Hola mundo</button>-->
                <!--END MAIN-->
            </main>
            <!--END ROW MAIN-->
        </div> 
    </div>
    
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    export default{
        name:'HomeComponent',
        components:{
            HeaderComponent,
            SidebarComponent
        }
    }
</script>