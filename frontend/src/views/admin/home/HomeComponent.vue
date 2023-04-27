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
              <!--<h2>Pie Chart</h2>-->
              <!--<div class="piechart"></div>-->
              <div class="gar">
                <div class=""  style=" margin-top:2%;  width: 45%; height: 80%;">
                  <BarChart ref="bar" />

                    <Bar
                  id=""
                  :options="chartOptions"
                  :data="chartData"
                  />
                </div>
                <div class="" style=" margin-top:-21%; margin-left:60%; width: 23%; height: 30%;">
                  <Doughnut 
                  :options="chartOptions"
                  :data="chartConfig" 
                   />


                </div>
              </div>

              <div class="garr">
                <div class=""  style=" margin-left:10%; margin-right:10%; margin-top:2%;  width: 80%; height: 80%;">
                    <Line
                  id=""
                  :options="chartOptions"
                  :data="chartLine"
                  />
                </div>             
              </div>
          </main>
          <!--END ROW MAIN-->
          
      </div>
       
      
      
  </div>
  
       

</template>

<style>

.gar {
    margin-top:2%;
    max-width: 95%;
    height: 40%;
    border: 3px solid #73AD21;
}
.garr {
    margin-top:2%;
    margin-left:20%;
    margin-right:20%;

    max-width: 95%;
    height: 45%;
    border: 3px solid #ad4621;
}
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
  import { Doughnut } from 'vue-chartjs'
  import { Line } from 'vue-chartjs'

  import { Chart as ChartJS, ArcElement,Title, Tooltip, Legend, BarElement, PointElement, LineElement, CategoryScale, LinearScale } from 'chart.js'
  
  ChartJS.register(Title, Tooltip, Legend, ArcElement, BarElement, CategoryScale, LinearScale, PointElement, LineElement)
 
  export default{
  name: "HomeComponent",
  components: { Bar, Doughnut, Line, HeaderComponent, SidebarComponent
          
    }, data() {
  return {
    chartLine: {
        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        datasets: [
          {
            label: 'Week',
            backgroundColor: '#f87979',
            data: [40, 39, 10, 40, 39, 80, 40]
          }
      ]
    },
    chartConfig: {
        labels: ['Toys', 'food', 'House', 'others','Dog collar'],
          datasets: [
            { 
              backgroundColor: ['#41B883', '#E46651', '#00D8FF', '#DD1B16','#FFDF6E'],
              data: [20, 80, 40, 10 ,20] } ],
    },
    chartData: {
      Tooltip: "Sold",
      labels: [ 'January', 'February', 'March' ],
      datasets: [ 
      {label: 'Sales Month',
      backgroundColor: '#FFDF6E',
       data: [12, 20, 14] } ],

    },
    chartOptions: {
      responsive: true,
      type: Object,
    default: () => {}
    }
  }
}
}
</script>
    


