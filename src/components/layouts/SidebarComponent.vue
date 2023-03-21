<template>
    <ul class="nav flex-column p-4 ">
        <li class="nav-item">
            <router-link to="/admin" class="nav-link">Inicio</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/orders" class="nav-link">Pedidos</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/products" class="nav-link">Productos</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/users" class="nav-link">Usuarios</router-link>
        </li>
        <li class="nav-item">
            <router-link to="/admin/settings" class="nav-link">Ajustes</router-link>
        </li>
        
    </ul>
</template>

<script>
    export default{
        name:'SidebarComponent'
    } 
</script>