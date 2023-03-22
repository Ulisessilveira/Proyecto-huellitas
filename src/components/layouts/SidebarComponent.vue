<template>
    <ul class="nav flex-column p-4 shadow-lg bg-cafe2" style="height: 100vh">
        <li class="nav-item">
            <router-link to="/admin" class="nav-link text-dark">Inicio</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/orders" class="nav-link text-dark">Pedidos</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/products" class="nav-link text-dark">Productos</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/users" class="nav-link text-dark">Usuarios</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/settings" class="nav-link text-dark">Ajustes</router-link>
        </li>  
    </ul>
</template>

<script>
    export default{
        name:'SidebarComponent'
    } 
</script>
