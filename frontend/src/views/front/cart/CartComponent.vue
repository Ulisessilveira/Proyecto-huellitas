<template>
    <div>
        <NavFrontComponentVue />
        <section class="py-5 container">
            <h2 class="text-center">Shopping Card</h2>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Agua wawa</td>
                        <td>$59.99</td>
                        <td>4</td>
                        <td>$239.96</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</template>
<script>
    import NavFrontComponentVue from '@/components/layoutsfrontend/NavFrontComponent.vue';
    export default{
        name:'CartComponent',
        components:{
            NavFrontComponentVue
        }
    }
</script>