<template>
    <header>
        <nav class="navbar navbar-light bg-verde px-4 d-flex justify-content-between" >
            <a href="/" class="navbar-brand"> <img src="@/assets/img/logo_solo_perro.png" alt="" height="50px" width="50px" class="rounded-circle"> Huellitas felices</a>
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
    /*
    Colores 
    amarillo: #FFDF6e
    cafe claro: #C99E6B
    cafe: #50381B
    verde: #B6E2BD
    */
    .imgProfile{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .bg-verde{
        background-color: #B6E2BD;
    }
    .bg-amarillo{
        background-color: #FFDF6E;
    }
    .bg-cafe1{
        background-color: #50381B;
    }
    .bg-cafe2{
        background-color: #C99E6B;
    }
</style>