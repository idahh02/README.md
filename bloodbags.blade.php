@extends('master.layout')

@section('bloodInventory')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bag Inventory</title>

    <style>

        body{

        }
        h1{
            font-weight: bold;
            font-family: "Monaco", monospace;
            color: #4d4d4d; /* Dark gray text color */
        }

        table.custom-table {
            background-color: #f2f2f2; /* Light gray background color */
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            margin: auto;
            margin-top: 50px; /* Adjust the margin-top value as needed */

            height: 100%;
            border: 3px solid #000000;
            font-family: "Times New Roman", monospace;
            text-align:center;
        }

        .custom-table th,
        .custom-table td {
            border: 3px solid #000000;
            padding: 10px; /* Adjust padding for better spacing */
            background-color: #c5d4d7;
            color: black;
        }

        button.btn {
            background-color: #8bc4cf;
            padding: 8px 15px;
            width: 100px;
            font-weight: bold;
            font-family: "Monaco", monospace;
            color: black; /* White text color 8bc4cf 3ba7bd*/
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button.btn:hover {
            background-color: #6798a2;
        }

    </style>

</head>

<body>


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blood Bag Inventory</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Blood Bag Inventory</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->

        <section class="section">
         <div class= "" class="row">

                <div class="card">
                    <div class="card-body">
                        <br>
                        <!-- Bordered Table -->
                        <br>
                        <table class="table custom-table table-hover" >

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Blood Type</th>
                                    <th scope="col">No of Pack(s)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bloodBags as $bloodBag)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bloodBag->blood_type }}</td>
                                        <td>{{ $bloodBag->no_packs }}</td>
                                        <td>
                                            <form action="{{ route('bloodbags.edit', $bloodBag->id) }}" method="get" style="margin: 0;">
                                                <button class="btn" type="submit">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!-- End Table with hoverable rows -->
                        <br> <br><br>
                    </div>
                </div>

            </div>
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                  <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                      {{-- <div class="card info-card sales-card">

                        <div class="filter">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                          </ul>
                        </div>

                        <div class="card-body">
                          <h5 class="card-title">Sales <span>| Today</span></h5>

                          <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                              <h6>145</h6>
                              <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                            </div>
                          </div>
                        </div>

                      </div> --}}
                    </div><!-- End Sales Card -->

                    <!-- Reports -->
                    <div class="col-12">
                      <div class="card">

                        {{-- <div class="filter">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                              <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                          </ul>
                        </div> --}}

                        <div class="card-body">
                          <h5 class="card-title">Reports <span>/Today</span></h5>

                          <!-- Line Chart -->
                          <div id="reportsChart"></div>

                          <script>
                            document.addEventListener("DOMContentLoaded", () => {
                              new ApexCharts(document.querySelector("#reportsChart"), {
                                series: [{
                                  name: 'Blood Usage',
                                  data: [10, 6, 12, 14, 11, 17, 9, 15],
                                }, {
                                  name: 'Recipients',
                                  data: [8, 5, 1, 3, 2, 6, 8, 7]
                                }, {
                                  name: 'Donors',
                                  data: [12, 9, 13, 4, 9, 12, 10, 8]
                                }],
                                chart: {
                                  height: 350,
                                  type: 'area',
                                  toolbar: {
                                    show: false
                                  },
                                },
                                markers: {
                                  size: 4
                                },
                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                fill: {
                                  type: "gradient",
                                  gradient: {
                                    shadeIntensity: 1,
                                    opacityFrom: 0.3,
                                    opacityTo: 0.4,
                                    stops: [0, 90, 100]
                                  }
                                },
                                dataLabels: {
                                  enabled: false
                                },
                                stroke: {
                                  curve: 'smooth',
                                  width: 2
                                },
                                xaxis: {
                                  type: 'datetime',
                                  categories: [
          "2023-01-01T08:00:00.000Z",
          "2023-01-01T09:00:00.000Z",
          "2023-01-01T10:00:00.000Z",
          "2023-01-01T11:00:00.000Z",
          "2023-01-01T12:00:00.000Z",
          "2023-01-01T13:00:00.000Z",
          "2023-01-01T14:00:00.000Z",
          "2023-01-01T15:00:00.000Z",
          "2023-01-01T16:00:00.000Z"

        ],
                                },
                                tooltip: {
                                  x: {
                                    format: 'dd/MM/yy HH:mm'
                                  },
                                }
                              }).render();
                            });
                          </script>
                          <!-- End Line Chart -->

                        </div>

                      </div>
                    </div><!-- End Reports -->
                    {{-- <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Blood Usage for February</h5>

                            <!-- Line Chart -->
                            <canvas id="lineChart" style="max-height: 400px;"></canvas>
                            <script>
                              document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#lineChart'), {
                                  type: 'line',
                                  data: {
                                    labels: ['A', 'AB', 'B', 'O'],
                                    datasets: [{
                                      label: 'Line Chart',
                                      data: [42, 25, 33, 50],
                                      fill: false,
                                      borderColor: 'rgb(75, 192, 192)',
                                      tension: 0.1
                                    }]
                                  },
                                  options: {
                                    scales: {
                                      y: {
                                        beginAtZero: true
                                      }
                                    }
                                  }
                                });
                              });
                            </script>
                            <!-- End Line CHart -->

                          </div>
                        </div>
                      </div> --}}

                      {{-- <div class="col-lg-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Monthly Blood Donation Events (Past 6 Months)</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart" style="max-height: 400px;"></canvas>
                            <script>
                              document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart'), {
                                  type: 'bar',
                                  data: {
                                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                                    datasets: [{
                                      label: 'Bar Chart',
                                      data: [10, 15, 12, 18, 20, 14],
                                      backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 205, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(153, 102, 255, 0.2)'                          ],
                                      borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                      ],
                                      borderWidth: 1
                                    }]
                                  },
                                  options: {
                                    scales: {
                                      y: {
                                        beginAtZero: true
                                      }
                                    }
                                  }
                                });
                              });
                            </script>
                            <!-- End Bar CHart -->

                          </div>
                        </div>
                      </div> --}}

                  </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                  {{-- <!-- Recent Activity -->
                  <div class="card">

                    <div class="card-body">
                      <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                      <div class="activity">

                        <div class="activity-item d-flex">
                          <div class="activite-label">32 min</div>
                          <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                          <div class="activity-content">
                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                          </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                          <div class="activite-label">56 min</div>
                          <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                          <div class="activity-content">
                            Voluptatem blanditiis blanditiis eveniet
                          </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                          <div class="activite-label">2 hrs</div>
                          <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                          <div class="activity-content">
                            Voluptates corrupti molestias voluptatem
                          </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                          <div class="activite-label">1 day</div>
                          <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                          <div class="activity-content">
                            Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                          </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                          <div class="activite-label">2 days</div>
                          <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                          <div class="activity-content">
                            Est sit eum reiciendis exercitationem
                          </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                          <div class="activite-label">4 weeks</div>
                          <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                          <div class="activity-content">
                            Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                          </div>
                        </div><!-- End activity item-->

                      </div>

                    </div>
                  </div><!-- End Recent Activity --> --}}

                  <!-- Budget Report -->
                  <div class="card">

                    <div class="card-body pb-0">
                      <h5 class="card-title">Donor Demographics by Gender</h5>
                     <span> This Month</span>

                        <!-- Pie Chart -->
                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                        <script>
                          document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#pieChart'), {
                              type: 'pie',
                              data: {
                                labels: [
                                  'Men',
                                  'Women'
                                ],
                                datasets: [{
                                  label: 'My First Dataset',
                                  data: [300, 200],
                                  backgroundColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(54, 162, 235)',
                                    'rgb(255, 205, 86)'
                                  ],
                                  hoverOffset: 4
                                }]
                              }
                            });
                          });
                        </script><br>
                        <!-- End Pie CHart -->

                    </div>
                  </div><!-- End Budget Report -->

                  <!-- Website Traffic -->
                  {{-- <div class="card">

                    <div class="card-body pb-0">
                      <h5 class="card-title">Blood Traffic <span>| Today</span></h5>

                      <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                      <script>
                        document.addEventListener("DOMContentLoaded", () => {
                          echarts.init(document.querySelector("#trafficChart")).setOption({
                            tooltip: {
                              trigger: 'item'
                            },
                            legend: {
                              top: '5%',
                              left: 'center'
                            },
                            series: [{
                              name: 'Access From',
                              type: 'pie',
                              radius: ['40%', '70%'],
                              avoidLabelOverlap: false,
                              label: {
                                show: false,
                                position: 'center'
                              },
                              emphasis: {
                                label: {
                                  show: true,
                                  fontSize: '18',
                                  fontWeight: 'bold'
                                }
                              },
                              labelLine: {
                                show: false
                              },
                              data: [{
                                  value: 18,
                                  name: 'AB'
                                },
                                {
                                  value: 16,
                                  name: 'B'
                                },
                                {
                                  value: 3,
                                  name: 'A'
                                },
                                {
                                  value: 12,
                                  name: 'O'
                                }
                              ]
                            }]
                          });
                        });
                      </script>

                    </div>
                  </div><!-- End Website Traffic --> --}}

                </div><!-- End Right side columns -->

              </div>
        </section>

    </main><!-- End #main -->


</body>

</html>

@endsection
