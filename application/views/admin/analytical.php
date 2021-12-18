  <div class="page-body">
      <div class="container-fluid">
          <div class="page-header">
              <div class="row">
                  <div class="col-6">
                      <h3>
                          Smart Performa</h3>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= base_url() ?>Dashboard"><i data-feather="bar-chart-2"></i></a></li>
                          <li class="breadcrumb-item">Analytical Data</li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-sm-12">
          <div class="row">
              <div class="col-md-4">
                  <div class="card o-hidden static-top-widget-card">
                      <div class="card-body">
                          <div class="media static-top-widget">
                              <div class="media-body">
                                  <h6 class="font-roboto">Number Of Employee</h6>
                                  <h4 class="mb-0"><?= $number_of_employee; ?></h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card o-hidden static-top-widget-card">
                      <div class="card-body">
                          <div class="media static-top-widget">
                              <div class="media-body">
                                  <h6 class="font-roboto">Total Task Accepted</h6>
                                  <h4 class="mb-0"><?= $total_task_accepted; ?></h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card o-hidden static-top-widget-card">
                      <div class="card-body">
                          <div class="media static-top-widget">
                              <div class="media-body">
                                  <h6 class="font-roboto">Total Task Completed</h6>
                                  <h4 class="mb-0"><?= $total_task_completed; ?></h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="card-body">
                  <div class="mb-2 row">
                      <label class="col-sm-1 col-form-label">Select Date</label>
                      <div class="col-sm-4">
                          <input class="form-control digits" type="date" value="">
                      </div>
                  </div>

                  <div class="chart">
                      <!-- CHART Will Render Here -->
                      <div class="row mt-4">
                          <div class="col-md-4">
                              <h4>Overall Health Index</h4>
                              <div class="chart1"></div>
                          </div>
                          <div class="col-md-8">
                              <div class="card">
                                  <div class="card-header">
                                      <h5>Top 4 Performer Detail</h5>
                                  </div>
                                  <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th scope="col">Nama</th>
                                                  <th scope="col">Avg Rating</th>
                                                  <th scope="col">Avg Completion</th>
                                                  <th scope="col">Avg Speed</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>Alexander</td>
                                                  <td>1</td>
                                                  <td>2</td>
                                                  <td>3</td>
                                              </tr>
                                              <tr>
                                                  <td>John Deo</td>
                                                  <td>4</td>
                                                  <td>5</td>
                                                  <td>6</td>
                                              </tr>
                                              <tr>
                                                  <td>Randy Orton</td>
                                                  <td>7</td>
                                                  <td>9</td>
                                                  <td>10</td>
                                              </tr>
                                              <tr>
                                                  <td>Randy Mark</td>
                                                  <td>11</td>
                                                  <td>12</td>
                                                  <td>13</td>
                                              </tr>
                                              <tr>
                                                  <td>Ram Jacob</td>
                                                  <td>14</td>
                                                  <td>15</td>
                                                  <td>16</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="rank mt-5">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-header">
                                          <h5>Task Completed</h5>
                                      </div>
                                      <div class="card-body">
                                          <div class="chart2"></div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-6">
                                  <div class="card">
                                      <div class="card-header">
                                          <h5>Task Incompleted</h5>
                                      </div>
                                      <div class="card-body">
                                          <div class="chart3"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>