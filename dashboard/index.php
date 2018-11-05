<?php  
include_once '../include/header.php';
include_once '../include/menu.php';
?>

<main class="main">
  <div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row mt-2">
        <div class="col-md-12">
          <div class="card-group mb-4">
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="icon-people"></i>
                </div>
                <div class="text-value">87.500</div>
                <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="icon-user-follow"></i>
                </div>
                <div class="text-value">385</div>
                <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="icon-basket-loaded"></i>
                </div>
                <div class="text-value">1238</div>
                <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="icon-pie-chart"></i>
                </div>
                <div class="text-value">28%</div>
                <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                  <i class="icon-speedometer"></i>
                </div>
                <div class="text-value">5:34:11</div>
                <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                <div class="progress progress-xs mt-3 mb-0">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-5">
              <h4 class="card-title mb-0">Traffic</h4>
              <div class="small text-muted">November 2017</div>
            </div>
            <!-- /.col-->
            <div class="col-sm-7 d-none d-md-block">
              <button class="btn btn-primary float-right" type="button">
              <i class="icon-cloud-download"></i>
              </button>
              <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                <label class="btn btn-outline-secondary">
                  <input id="option1" type="radio" name="options" autocomplete="off"> Day
                </label>
                <label class="btn btn-outline-secondary active">
                  <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                </label>
                <label class="btn btn-outline-secondary">
                  <input id="option3" type="radio" name="options" autocomplete="off"> Year
                </label>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
          <div class="chart-wrapper" style="height:300px;margin-top:40px;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas class="chart chartjs-render-monitor" id="main-chart" height="300" width="1049" style="display: block;"></canvas>
          <div id="main-chart-tooltip" class="chartjs-tooltip center" style="opacity: 0; left: 727.021px; top: 303.84px;"><div class="tooltip-header"><div class="tooltip-header-item">F</div></div><div class="tooltip-body"><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span class="tooltip-body-item-label">My First dataset</span><span class="tooltip-body-item-value">160</span></div><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span class="tooltip-body-item-label">My Second dataset</span><span class="tooltip-body-item-value">88</span></div><div class="tooltip-body-item"><span class="tooltip-body-item-color" style="background-color: rgb(255, 255, 255);"></span><span class="tooltip-body-item-label">My Third dataset</span><span class="tooltip-body-item-value">65</span></div></div></div></div>
        </div>
        <div class="card-footer">
          <div class="row text-center">
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
              <div class="text-muted">Visits</div>
              <strong>29.703 Users (40%)</strong>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
              <div class="text-muted">Unique</div>
              <strong>24.093 Users (20%)</strong>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
              <div class="text-muted">Pageviews</div>
              <strong>78.706 Views (60%)</strong>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
              <div class="text-muted">New Users</div>
              <strong>22.123 Users (80%)</strong>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-sm-12 col-md mb-sm-2 mb-0">
              <div class="text-muted">Bounce Rate</div>
              <strong>40.15%</strong>
              <div class="progress progress-xs mt-2">
                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</main>
</div>

<?php  
include_once '../include/footer.php';
?>