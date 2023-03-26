<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-2">
                <SidebarComponent/>
                <!--END SIDEBAR-->
            </aside>
            <main class="col-10">

                <h1>Perfil de usuario</h1>
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
        name:'ProfileComponent',
        components: {
            HeaderComponent,
            SidebarComponent
        },
        data(){
            return{
            }
        }
    }
</script>