<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-2">
                <SidebarComponent style="height: 100%"/>
            </aside>
            <main class="col-10">
                <h1 class="d-flex justify-content-between">
                    <div class="h4 py-2">Users</div>
                </h1>
            </main>
        </div>
    </div>
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    export default{
        name:'UsersComponent',
        components: {
        HeaderComponent,
        SidebarComponent
        }
    }
</script>