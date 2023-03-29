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
                        v-on:click=" add=!add" v-if="!edit">
                            <span v-if="!add"><i class="fa fa-plus"></i> Add</span>
                            <span v-if="add"><i class="fa fa-times"></i> Cancel</span>
                        </buttton>

                        <button v-else class="btn btn-sm btn-outline-danger"
                        v-on:click="edit=!edit">
                            <span v-if="edit"><i class="fa fa-times"></i> Cancel edit</span>
                        </button>
                    </div>
                </h1>
                <div class="row" v-if="!add && !edit">
                    <div class="container-flex px-5">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col" class="text-center">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="x in data" v-bind:key="x.id">
                                        <td class="text-center"><img class="img-Profile rounded-circle" :src="+x.img" alt=""></td>
                                        <td>{{x.name}}</td>
                                        <td>{{x.email}}</td>
                                        <td>{{x.phone}}</td>
                                        <td>{{x.address}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-info mx-1" v-on:click="edit=true">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-outline-danger mx-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <router-link to="/profile" class="btn btn-outline-dark mx-1"><i class="fa fa-arrow-right"></i></router-link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <UsersAddComponent v-if="add"/>
                <UsersEditComponent v-if="edit"/>
                <!--END MAIN-->
            </main>
            <!--END ROW MAIN-->
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure delete user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    import UsersAddComponent from './UsersAddComponent.vue';
    import UsersEditComponent from './UsersEditComponent.vue';
    export default{
        name:'UsersComponent',
        components: {
            HeaderComponent,
            SidebarComponent,
            UsersAddComponent,
            UsersEditComponent
        },
        data(){
            return{
                add:false,
                edit:false,
                data:[
                    {id:1,name:'Ulises Silveira',email:'josu011201@gmail.com',phone:'636-132-3309',address:'Infonavit Paquime, Rio Conchos #2321',img:'@/assets/img/userProfile1.jpg'},
                    {id:2,name:'Saul Rodrigez',email:'capitan@gmail.com',phone:'636-222-2164',address:'Cerca del Aurrera',img:'@/assets/img/userProfile2.jpeg'},
                    {id:3,name:'Ulises Silveira',email:'josu011201@gmail.com',phone:'636-132-3309',address:'Infonavit Paquime, Rio Conchos #2321',img:'@/assets/img/userProfile2.jpeg'},
                ]           
            }
            
        }
    }
</script>

<style>
    .img-Profile{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }
</style>