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
                    <div class="h4 py-2">Home</div>
                </h1> 
                <!--<button class="btn btn-danger">Hola mundo</button>-->
                <!--END MAIN-->
                <h2>Pie Chart</h2>
                <div class="piechart"></div>

                <DoughnutChart v-bind="doughnutChartProps" />

            </main>
            <!--END ROW MAIN-->
            
        </div>
         
        
        
    </div>
    
         

</template>

<style>
.piechart {
            margin-top: 20px;
            display: block;
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background-image: conic-gradient(
                pink 70deg, 
                lightblue 0 235deg, 
                orange 0);
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
</style>

<script>

    
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';

   
    export default{
    name: "HomeComponent",
    components: { 
        
        
        HeaderComponent,
        SidebarComponent
            
      }
}
    
          
</script>

