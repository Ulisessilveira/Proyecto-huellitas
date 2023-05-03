import * as vueRouter from 'vue-router'
import HomeConponent from '@/views/admin/home/HomeComponent'
import SettingsComponent from '@/views/admin/settings/SettingsComponent'
import NotFoundComponent from '@/views/admin/notfound/NotFoundComponent'
import ProductsComponent from '@/views/admin/products/ProductsComponent'
import OrdersComponent from '@/views/admin/orders/OrdersComponent'
import UsersComponent from '@/views/admin/users/UsersComponent'
import IndexComponent from '@/views/front/index/IndexComponent'
import DetailsComponent from '@/views/front/details/DetailsComponent'
import ProfileComponent from '@/views/front/profile/ProfileComponent'
const routes=[
    {path:'/admin',name:'admin',component:HomeConponent},
    {path:'/admin/settings',name:'settings',component:SettingsComponent},
    {path:'/admin/products',name:'products',component:ProductsComponent},
    {path:'/admin/orders',name:'orders',component:OrdersComponent},
    {path:'/admin/users',name:'users',component:UsersComponent},
    {path:'/profile',name:'profile',component:ProfileComponent},
    {path:'/details/:slug',name:'details',component:DetailsComponent},

    {path:'/',name:'index',component:IndexComponent},
    
    {path:'/:pathmatch(.*)*',name:'notfound',component:NotFoundComponent}


]
const router = vueRouter.createRouter({
    history:vueRouter.createWebHistory(),
    routes
})
export default router