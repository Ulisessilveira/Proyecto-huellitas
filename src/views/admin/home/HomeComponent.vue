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


            </main>
            <!--END ROW MAIN-->
            <Bar
              id="my-chart-id"
              :options="chartOptions"
              :data="chartData"
            />
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
    import { Bar } from 'vue-chartjs'
    import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

    ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)
   
    export default{
    name: "HomeComponent",
    components: { Bar, HeaderComponent, SidebarComponent
            
      }, data() {
    return {
      chartData: {
        labels: [ 'January', 'February', 'March' ],
        datasets: [ { data: [40, 20, 12] } ]
      },
      chartOptions: {
        responsive: true
      }
    }
  }
}
</script>
      


