<template>
    <header>
        <nav class="navbar navbar-light bg-light px-4 d-flex justify-content-between fondo" >
            <a href="#" class="navbar-brand">Tienda</a>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <img src="@/assets/img/user-circle-svgrepo-com.png" class="imgProfile" alt="">
                        Ulises Silveira
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default{
        name:'HeaderComponent'
    }
</script>

<style>
    .imgProfile{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .fondo{
        background-color: yellowgreen;
    }
</style>