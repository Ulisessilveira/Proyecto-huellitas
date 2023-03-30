<template>
    <div>
        <HeaderComponent/>
        <div>
            <main>  
                <div class="container my-5 py-4 border border-1 rounded-2 shadow-lg">
                    <div class="row" >
                        <div class="col-md-3 text-center">
                            <img class="img-profile" src="http://localhost:8000/img/users/img_users_1.jpg" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-sm-2"><p class="fs-2 fw-bold">Name:</p></div>
                                <div class="col-sm-10"><p class="fs-2">José Ulises Silveira Trejo</p></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"><p class="fs-5 fw-bold">Email:</p></div>
                                <div class="col-sm-10"><p class="fs-5">ulises_silveira@gmail.com</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-3">
                    <div class="row">
                        <h5>You bought</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="col-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">This month</option>
                                <option value="2">Last month</option>
                                <option value="2">This year</option>
                                <option value="3">2022</option>
                                <option value="3">2021</option>
                                <option value="3">2020</option>
                                <option value="3">2019</option>
                                <option value="3">2018</option>
                                <option value="3">2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-flex border border-1 rounded-2 shadow mb-3">
                        <div class="row">
                            <div class="col m-3 border-bottom">
                                <h6>April 30th</h6>
                            </div>
                        </div>
                        <div class="row px-4 pb-3">
                            <div class="col-2 text-center">
                                <div class="border border-2">
                                    <img class="img-bought" src="http://localhost:8000/img/products/default.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row mt-3">
                                    <p class="fw-bold" style="color:green;">Delivered</p>
                                </div>
                                <div class="row">
                                    <p class="fw-bold">Arrived on April 11</p>
                                </div>
                                <div class="row mt-5">
                                   <p class="fw-light">Bocadillos para perro</p>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class="col">
                                    <button class="btn btn-outline-success my-2" style="width: 100%;">
                                        See purchase
                                    </button>
                                    <button class="btn btn-success" style="width: 100%;">
                                        Repurchase
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-flex border border-1 rounded-2 shadow mb-3">
                        <div class="row">
                            <div class="col m-3 border-bottom">
                                <h6>April 30th</h6>
                            </div>
                        </div>
                        <div class="row px-4 pb-3">
                            <div class="col-2 text-center">
                                <div class="border border-2">
                                    <img class="img-bought" src="http://localhost:8000/img/products/pelota.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="row mt-3">
                                    <p class="fw-bold" style="color:green;">Delivered</p>
                                </div>
                                <div class="row">
                                    <p class="fw-bold">Arrived on April 11</p>
                                </div>
                                <div class="row mt-5">
                                   <p class="fw-light">Bocadillos para perro</p>
                                </div>
                            </div>
                            <div class="col-2 text-center">
                                <div class="col">
                                    <button class="btn btn-outline-success my-2" style="width: 100%;">
                                        See purchase
                                    </button>
                                    <button class="btn btn-success" style="width: 100%;">
                                        Repurchase
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    
                </div>
                <!--END MAIN-->
            </main>
        </div>
    </div>
</template>

<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    export default{
        name:'ProfileComponent',
        components: {
            HeaderComponent
        },
        data(){
            return{
            }
        }
    }
</script>

<style>
.img-profile{
    border-radius: 50%;
    height: 100px;
    width: 100px;
}
.img-bought{
    height: 100%;
    width: 100%;
}
</style>