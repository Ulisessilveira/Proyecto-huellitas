<template>
    <ul class="nav flex-column p-4 shadow-lg bg-cafe2" style="height: 100vh">
        <li class="nav-item">
            <router-link to="/admin" class="nav-link text-dark">Home</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/orders" class="nav-link text-dark">Orders</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/products" class="nav-link text-dark">Products</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/users" class="nav-link text-dark">Users</router-link>
        </li>
        <!--li class="nav-item">
            <router-link to="/admin/settings" class="nav-link text-dark">Ajustes</router-link>
        </li-->  
    </ul>
</template>

<script>
    export default{
        name:'SidebarComponent'
    } 
</script>
