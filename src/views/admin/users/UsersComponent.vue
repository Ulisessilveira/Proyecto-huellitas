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
                    <div class="h4 py-2">Users</div>
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
                    <div class="container-flex px-5">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center"></th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><img class="img-profile rounded-circle" src="@/assets/img/userProfile1.jpg" alt="" height="50px" width="50px"></td>
                                        <td>Ulises Silveira</td>
                                        <td>josu011201@gmail.com</td>
                                        <td>636-132-3309</td>
                                        <td>Infonavit Paquime, Rio Conchos #2321</td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-info mx-1"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-outline-danger mx-1"><i class="fa fa-trash"></i></button>
                                            <button class="btn btn-outline-dark mx-1"><i class="fa fa-arrow-right"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><img class="img-profile rounded-circle" src="@/assets/img/userProfile2.jpeg" alt="" height="50px" width="50px"></td>
                                        <td>Saul Rodriguez</td>
                                        <td>capitan@gmail.com</td>
                                        <td>636-222-2164</td>
                                        <td>Cerca del Aurrera</td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-info mx-1"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-outline-danger mx-1"><i class="fa fa-trash"></i></button>
                                            <button class="btn btn-outline-dark mx-1"><i class="fa fa-arrow-right"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <UsersAddComponent v-if="add"/>
                <!--END MAIN-->
            </main>
            <!--END ROW MAIN-->
        </div>
    </div>
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    import UsersAddComponent from './UsersAddComponent.vue';
    export default{
        name:'UsersComponent',
        components: {
            HeaderComponent,
            SidebarComponent,
            UsersAddComponent
        },
        data(){
            return{
                add:false
            }
        }
    }
</script>