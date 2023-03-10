@extends('layouts.dashboard')
@section('content')

          <div class="col-12">
                <div class="card table-card overflow-hidden table-nowrap mb-3 mb-lg-5">

                    </div>
                    <div class="table-responsive">
                        <a href="{{ route('settings.create') }}" class="btn btn-primary active mb-2 me-2 bi-gear">  Подесувања</a>
                    </div>


                </div>
                                <div class="dropdown-menu overflow-hidden dropdown-menu-sm p-0 mt-0">
                                    <!--Apps list-->
                                    <div class="list-group list-group-flush">

                                        <div class="list-group-item d-flex align-items-center justify-content-between px-3">
                                            <h6 class="dropdown-header ps-0">Apps Shortcuts</h6>
                                            <a href="#!" class="btn btn-primary">View All Apps <span class="ms-1 fs-5 align-middle material-symbols-rounded">
                        arrow_forward
                        </span></a>
                                        </div>
                                        <!--App item-->
                                        <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                            <!--App logo-->
                                            <img src="assets/media/brand-logos/atlassian.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Atlassian</h6>
                                                <small>Security and control across Cloud</small>
                                            </div>
                                        </a>

                                        <!--App item-->
                                        <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                            <!--App logo-->
                                            <img src="assets/media/brand-logos/google-webdev.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Google webdev</h6>
                                                <small>Work involved in developing a website</small>
                                            </div>
                                        </a>

                                        <!--App item-->
                                        <a href="#!" class="list-group-item px-4 py-3 list-group-item-action d-flex align-items-center">
                                            <!--App logo-->
                                            <img src="assets/media/brand-logos/slack.svg" class="width-30 w-auto flex-shrink-0 me-4" alt="">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Slack</h6>
                                                <small>Email collaboration software</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </header>
                    <!--Main Header End-->



                    <!--Main Search Modal-->
                    <!-- Modal -->
                    <div class="modal" id="modal_search" tabindex="-1" aria-labelledby="modal_searchLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <!--Search inner-->
                                    <div class="">

                                        <!--Search form-->
                                        <form>
                                            <div class="position-relative mb-4">
                                                <div class="text-muted">
                  <span class="material-symbols-rounded position-absolute start-0 top-50 translate-middle-y ms-2">
                    search
                    </span>
                                                </div>
                                                <input type="text" autofocus class="form-control form-control-lg border-2 border-primary border ps-6"
                                                       placeholder="Search App...">
                                            </div>
                                        </form>

                                        <!--Recently searched-->
                                        <div class="d-flex mb-2 align-items-center">
                                            <h6 class="d-block mb-0 me-3 flex-grow-1">
                <span class="material-symbols-rounded align-middle me-1 fs-5 opacity-50">
                  history
                  </span>
                                                Recent
                                            </h6>
                                            <a href="#!" class="small flex-shrink-0 d-block">Clear All</a>
                                        </div>
                                        <div class="list-group">
                                            <!--Recently searched item-->
                                            <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <span class="text-truncate">Campaign reports</span>
                                                </div>
                                            </a>
                                            <!--Recently searched item-->
                                            <a href="#" class="list-group-item px-3 d-flex overflow-hidden align-items-center list-group-item-action">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <span class="text-truncate">Funnel reports</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 border-top-0 modal-footer">
                 <span class="small">Press ESC or
                 <span class="badge bg-secondary" role="button" data-bs-dismiss="modal">Click me</span> to close
                 </span>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--//Page content//-->
                    <div class="content pt-3 px-3 px-lg-6 d-flex flex-column-fluid">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-md-5 col-lg-4 mb-3 mb-lg-5">
                                    <div class="card card-body mb-3 mb-lg-5">
                                        <div class="d-flex mb-4">
                                            <div class="me-3 flex-grow-1">
                                                                                          </div>
                                            <div>

                                            </div>
                                        </div>

                                        <!--Description text-->

                                    </div>
                                </div>
                                <div class="col 12 col-lg-8 col-md-7">
                                    <div class="card-header">
                                        <h5 class="mb-0">ЛИНКОВИ</h5>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped mb-0">
                                            <thead>
                                            <tr class="bg-body">
                                                <th>Network</th>
                                                <th>Линк</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Twitter</td>
                                                <td>...</td>

                                            </tr>
                                            <tr>
                                                <td>Facebook</td>
                                                <td>...</td>

                                            </tr>
                                            <tr>
                                                <td>Skype</td>
                                                <td>....</td>

                                            </tr>
                                            <tr>
                                                <td>LinkedIn</td>
                                                <td>...</td>

                                            </tr>
                                            <tr>
                                                <td>Youtube</td>
                                                <td>...</td>

                                            </tr>
                                            <tr>
                                                <td>Flickr</td>
                                                <td>...</td>

                                            </tr>
                                            <tr>
                                                <td>Pinterest</td>
                                                <td>...</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-5 col-lg-4 mb-3 mb-lg-5">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex justify-content-between">
                                            <h5 class="mb-0">Информации</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="oLastWeek">
                                                    <div id="chartOverview">
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="overall">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="spinner-border" role="status">

                                                        </div><span class="ms-3">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col 12 col-lg-8 col-md-7">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex justify-content-between">
                                            <h5 class="mb-0">Опис</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="oLastWeek">
                                                    <div id="chartOverview">

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="overall">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div class="spinner-border" role="status">

                                                        </div><span class="ms-3">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<br>

                                <div class="col-12 col-lg-8 col-md-7">
                                    <div class="card">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0 me-3">Recent Activity</h5>
                                            <a href="#!" class="text-muted">View All</a>
                                        </div>
                                        <div class="card-body">
                                            <ul class="step mx-3 mx-sm-0 list-unstyled mb-0">
                                                <li class="step-item">
                                                    <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span
                                  class="avatar sm avatar-status status-online rounded-circle d-flex align-items-center justify-content-center bg-primary text-white">
                                <b>R</b>
                              </span>
                            </span>

                                                        <div class="step-content">
                                                            <h6 class="mb-1">Raymond Atkins</h6>
                                                            <span class="lh-sm d-block mb-1">Added <a href="#!">Felipe Grace</a> to project
                                group</span>
                                                            <small class="d-block mb-0 text-muted">3h ago</small>
                                                        </div>
                                                    </div>

                                                </li>
                                                <!--/.step-item-->
                                                <li class="step-item">
                                                    <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/03.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                                                        <div class="step-content">
                                                            <h6 class="mb-1">Abdul Kadir</h6>
                                                            <span class="lh-sm d-block mb-1">Created a new task <a href="#!">#235</a></span>
                                                            <small class="d-block mb-0 text-muted">3h ago</small>
                                                        </div>
                                                    </div>

                                                </li>
                                                <!--/.step-item-->
                                                <li class="step-item">
                                                    <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/05.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                                                        <div class="step-content">
                                                            <h6 class="mb-1">Jessica</h6>
                                                            <span class="d-block mb-2 lh-sm small">Added CSS file</span>
                                                            <!--Post-->
                                                            <div class="p-3 border rounded-3 mb-1 d-flex align-items-center">
                                                                <img src="assets/media/icons/files/css.svg" class="height-40 me-3 flex-shrink-0 w-auto"
                                                                     alt="">
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1 lh-sm text-truncate">tooltip-popover.css</p>
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <small class="text-muted">4KB</small>
                                                                        <a href="#!" class="text-body">
                                      <span class="material-symbols-rounded align-middle">
                                        download
                                      </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small class="d-block text-muted">Sep 14, 12:24PM EST</small>
                                                        </div>
                                                    </div>

                                                </li>
                                                <!--/.step-item-->

                                                <!--.step-item-->
                                                <li class="step-item">
                                                    <div class="step-row">
                            <span class="step-icon">
                              <!--Avatar-->
                              <span class="avatar sm avatar-status status-online">
                                <img src="assets/media/avatars/04.jpg" class="img-fluid rounded-circle w-auto" alt="">
                              </span>
                            </span>

                                                        <div class="step-content">
                                                            <h6 class="mb-1">Adam Voes</h6>
                                                            <span class="lh-sm d-block mb-1">Reassigned a tasked to <a href="#!">Jessica</a> <a
                                                                    href="#!">#078</a></span>
                                                            <small class="d-block mb-0 text-muted">June 14, 12:24PM EST</small>
                                                        </div>
                                                    </div>

                                                </li>
                                                <!--/.step-item-->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--//Page content End//-->

                    <!--//Page-footer//-->
                    <footer class="pb-3 pb-lg-5 px-3 px-lg-6">
                        <div class="container-fluid px-0">
                <span class="d-block lh-sm small text-muted text-end">&copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>. Copyright
                </span>
                        </div>
                    </footer>
                    <!--/.Page Footer End-->
                </main>
                <!--///////////Page content wrapper End///////////////-->
            </div>
        </div>

        <!--////////////Theme Core scripts Start/////////////////-->
        <script src="assets/js/theme.bundle.js"></script>

        <!--////////////Theme Core scripts End/////////////////-->


        <!--Charts-->
        <script src="assets/vendor/apexcharts.min.js"></script>
        <script>
            //--------------------------Chart Overview--------------------
            //      const ctx8 = document.getElementById('chart_mixed').getContext('2d');
            //     let chartMixed = new Chart(ctx8, {
            //       type: 'line',
            //  data: {
            //      datasets: [{
            //          label: 'Working Hours',
            //          data: [110, 120, 310, 140,360,260,120],
            //          // this dataset is drawn below
            //          order: 2,
            //          borderColor: cPrimary,
            //           borderWidth: 2,
            //           backgroundColor: rgbaPrimary,
            //          fill:true,
            //          tension: .4,
            //           pointHoverRadius: 0,
            //           pointRadius: 0,
            //      }, {
            //          label: 'Tasks Done',
            //          data: [120, 230, 150, 360,260,180,240],
            //          order: 1,
            //          tension: .4,
            //          borderColor: cSuccess,
            //           borderWidth: 2,
            //           backgroundColor: rgbaSuccess,
            //           pointHoverRadius: 0,
            //           fill:true,
            //           pointRadius: 0,
            //      }],
            //      labels: ['January', 'February', 'March', 'April','May','Jun','Jul']
            //  },
            //  options: {
            //         maintainAspectRatio:false,
            //         responsive: true,

            //         title: {
            //           display: false,
            //         },
            //         plugins: {
            //           legend: {
            //             display: true,
            //             align:'start',
            //             position:'chartArea',
            //             maxHeight:60,
            //             labels: {
            //               color: cMuted,
            //               boxWidth: 6,
            //               boxHeight: 6,
            //               padding:10,
            //               usePointStyle:false,
            //               pointStyle:'circle',
            //               font: {
            //                 family: cFont
            //               }
            //             }
            //           },

            //           tooltip: {
            //             boxWidth: 6,
            //             boxHeight: 6,
            //             boxPadding: 6,
            //             usePointStyle: true,
            //             backgroundColor: cSecondary,
            //             titleColor: cLight,
            //             bodyColor: cLight,
            //             footerColor: cLight,
            //             padding: 12,
            //             cornerRadius: 12,
            //             titleSpacing: 2,
            //             bodySpacing: 6,

            //             font: {
            //               family: cFont
            //             },
            //           },
            //         },
            //         interaction: {
            //           mode: 'index',
            //           intersect: false,
            //         },
            //         stacked: true,
            //         scales: {
            //           y: {
            //             grid: {
            //               drawBorder: false,
            //               display: true,
            //               drawOnChartArea: true,
            //               drawTicks: false,
            //               borderDash: [5, 5],
            //             },
            //             ticks: {
            //               maxTicksLimit:6,
            //               display:true,
            //               padding: 16,
            //               color: cMuted,
            //               font: {
            //                 size: 12,
            //                 family: cFont,
            //                 style: 'normal',
            //                 lineHeight: 2
            //               },
            //             }
            //           },
            //           x: {
            //             grid: {
            //               drawBorder: false,
            //               display: false,
            //               drawOnChartArea: false,
            //               drawTicks: false,
            //               borderDash: [5, 5]
            //             },
            //             ticks: {
            //               display: true,
            //               color: cMuted,
            //               padding: 16,
            //               font: {
            //                 size: 12,
            //                 family: cFont,
            //                 style: 'normal',
            //                 lineHeight: 2
            //               },
            //             }
            //           }
            //         }
            //       },
            //     })
            var options = {
                colors:[utils.getColor('primary'),utils.getColor('success')],
                series: [{
                    name: 'Working Hours',
                    data: [48, 36, 29, 39, 54]
                },{
                    name: 'Tasks Completed',
                    data: [214, 198, 121, 111, 139]
                }],
                chart: {
                    fontFamily:'inherit',
                    height: 350,
                    type: 'line',
                    toolbar:{
                        show:false
                    },
                    zoom:{
                        enabled:false
                    }
                },
                stroke: {
                    width: 4,
                    dashArray: [4,0],
                    curve: 'smooth'
                },
                markers: {
                    strokeWidth: 5,
                    strokeOpacity: 1,
                    strokeColors: [utils.getColor('white'),utils.getColor('white')]
                },
                legend:{
                    position:'top'
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        gradientToColors: [ utils.getColor('primary'), utils.getColor('success')],
                        shadeIntensity: .1,
                        type: 'horizontal',
                        opacityFrom: .95,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100]
                    },
                },
                xaxis: {
                    type: 'category',
                    categories: ['Mon', 'Tue', 'Wed', 'Thr', 'Fri'],
                    tickAmount: 5,

                    tooltip: {
                        enabled: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    labels:{
                        offsetX:0
                    }
                },
                yaxis: {
                    max: 260,
                    min:0,
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    labels:{
                        offsetX: -16,
                    }
                },
                grid:{
                    show:true,
                    strokeDashArray: 5,
                    padding:{
                        left:0,
                        bottom:0,
                        right:0,
                        top:0,
                    },
                    xaxis:{
                        lines: {
                            show: false,
                        }
                    },
                    yaxis:{
                        lines: {
                            show: true,
                        }
                    }
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: [{
                        formatter: function (y) {
                            if (typeof y !== 'undefined') {
                                return ' : ' + y.toFixed(0) + 'h';
                            }
                            return y;
                        },
                    },
                        {
                            formatter: function (y) {
                                if (typeof y !== 'undefined') {
                                    return ' : ' + y.toFixed(0) + ' Tasks';
                                }
                                return y;
                            },
                        },
                    ],
                },
            }

            var chart = new ApexCharts(document.querySelector("#chartOverview"), options);
            chart.render();
        </script>
        </body>

        </html>


@endsection
