  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>APP PLACE</h1>
      <BR>
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-md-6">

          <div class="card">
            <img src="public/assets/img/securitas.png" style="height:250px;" width="200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <br>
              Descripcion de securita
            </div>
            <div class="card-footer">
              <a href=" https://securita.senasubsedemalambo.com.co" target="_blank"> <button type="text"
                  class="btn btn-primary">IR</button></a>
            </div>
          </div>

        </div>

        <div class="col-md-6">

          <div class="card">
            <img src="public/assets/img/prueba.png" style="height:250px;" width="200px;"  class="card-img-top" alt="...">
            <div class="card-body">
              <br>
              Descripcion de fidelizacion
            </div>
            <div class="card-footer">
              <a href="fidelizacion"> <button type="text" class="btn btn-primary">IR</button></a>
            </div>
          </div>

        </div>
      </div>
      <div class="row" style="display:none;">
        
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Line Charts</h5>
            </div>
            <div class="card-body">

              <!-- Line Chart -->
              <div id="lineCharts"></div>
              <!-- End Line Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Line Charts</h5>
            </div>
            <div class="card-body">
              <!-- Line Chart -->
              <div id="lineChart"></div>
              <!-- End Line Chart -->
            </div>
          </div>
        </div>

       <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Line Charts</h5>
            </div>
            <div class="card-body">
             <!-- Line Chart -->
              <div id="lineChar"></div>
              <!-- End Line Chart-->
            </div>
          </div>
        </div>

       


      </div>


      </div>
    </section>

  </main>
  <!-- Reports -->


  <script>
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#lineChart"), {
        series: [{
          name: "Desktops",
          data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
      }).render();
    });
 
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#lineCharts"), {
        series: [{
          name: "Desktops",
          data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
      }).render();
    });
  
  document.addEventListener("DOMContentLoaded", () => {
    new ApexCharts(document.querySelector("#lineChar"), {
      series: [{
        name: "Desktops",
        data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
      }],
      chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      }
    }).render();
  });

  
</script>
  