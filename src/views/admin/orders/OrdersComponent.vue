<template>
    <div>
        <HeaderComponent/>
        <div class="row">
            <aside class="col-2">
                <SidebarComponent/>
            </aside>
            <main class="col-10">
                <h1 class="d-flex justify-content-between">
                    <div class="h4 py-2">Pedidos</div>
                </h1>
            <table class="dataTable">
                <thead>
                    <tr>
                        <th>Numbers</th>
                        <th>Names</th>
                        <th>Values</th>
                        <th>Dates</th>
                        <th>Cash Money</th>
                        <th>Messages</th>
                        <th>Buttons</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">000000001</a></td>
                        <td>Food dog</td>
                        <td>102</td>
                        <td>03/30/1940</td>
                        <td>$60.42</td>
                        <td>PAID</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">000000002</a></td>
                        <td>Food dog</td>
                        <td>137</td>
                        <td>03/18/1953</td>
                        <td>$69.68</td>
                        <td>PAID</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">000000003</a></td>
                        <td>Clothes</td>
                        <td>154</td>
                        <td>03/29/1976</td>
                        <td>$86.68</td>
                        <td>PAID</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">000000004</a></td>
                        <td>House</td>
                        <td>113</td>
                        <td>03/30/1981</td>
                        <td>$63.50</td>
                        <td>PAID</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">000000005</a></td>
                        <td>Food dog</td>
                        <td>147</td>
                        <td>03/30/1987</td>
                        <td>$74.73</td>
                        <td>PAID</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">000000006</a></td>
                        <td>Toys</td>
                        <td>000</td>
                        <td>04/08/2013</td>
                        <td>$0.00</td>
                        <td>PENDING</td>
                        <td>
                            <button class="button action">Select</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            </main>

        </div>
        
    </div>
</template>

<style>
.dataTable {
  display: block;
  width: 100%;
  margin: 1em 0;
}

.dataTable thead, .dataTable tbody, .dataTable thead tr, .dataTable th {
  display: block;
}

.dataTable thead {
  float: left;
}

.dataTable tbody {
  width: auto;
  position: relative;
  overflow-x: auto;
}

.dataTable td, .dataTable th {
  padding: .625em;
  line-height: 1.5em;
  border-bottom: 1px dashed #ccc;
  box-sizing: border-box;
  overflow-x: hidden;
  overflow-y: auto;
}

.dataTable th {
  text-align: left;
  background: rgba(0, 0, 0, 0.14);
  border-bottom: 1px dashed #aaa;
}

.dataTable tbody tr {
  display: table-cell;
}

.dataTable tbody td {
  display: block;
}

.dataTable tr:nth-child(odd) {
	background: rgba(0, 0, 0, 0.07);
}

@media screen and (min-width: 50em) {

  .dataTable {
    display: table;
  }
  
  .dataTable thead {
    display: table-header-group;
    float: none;
  }
  
  .dataTable tbody {
    display: table-row-group;
  }
  
  .dataTable thead tr, .dataTable tbody tr {
    display: table-row;
  }
  
  .dataTable th, .dataTable tbody td {
    display: table-cell;
  }
  
  .dataTable td, .dataTable th {
    width: auto;
  }
  
}
</style>
<script>
    import HeaderComponent from '@/components/layouts/HeaderComponent.vue';
    import SidebarComponent from '@/components/layouts/SidebarComponent.vue';
    export default{
    name: "OrdersComponent",
    components: {
        HeaderComponent,
        SidebarComponent
    }
}

</script>