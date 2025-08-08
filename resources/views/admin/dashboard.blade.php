<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body>
    <div id="app">
@include('admin.header')
            <div class="main-content">
                <section class="section">
                    <h1 class="section-header">
                        <div>Dashboard</div>
                    </h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-primary">
                                    <i class="ion ion-person"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Users</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-danger">
                                    <i class="ion ion-ios-paper-outline"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Categories</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-warning">
                                    <i class="ion ion-ios-paper-outline"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Products</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-success">
                                    <i class="ion ion-ios-paper-outline"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Orders</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="float-right">
                                        <div class="btn-group">
                                            <a href="#" class="btn active">Week</a>
                                            <a href="#" class="btn">Month</a>
                                            <a href="#" class="btn">Year</a>
                                        </div>
                                    </div>
                                    <h4>Statistics</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" height="158"></canvas>
                                    <div class="statistic-details mt-sm-4">
                                        <div class="statistic-details-item">
                                            <small class="text-muted"><span class="text-primary"><i
                                                        class="ion-arrow-up-b"></i></span> 7%</small>
                                            <div class="detail-value">$243</div>
                                            <div class="detail-name">Today's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <small class="text-muted"><span class="text-danger"><i
                                                        class="ion-arrow-down-b"></i></span> 23%</small>
                                            <div class="detail-value">$2,902</div>
                                            <div class="detail-name">This Week's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <small class="text-muted"><span class="text-primary"><i
                                                        class="ion-arrow-up-b"></i></span>9%</small>
                                            <div class="detail-value">$12,821</div>
                                            <div class="detail-name">This Month's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <small class="text-muted"><span class="text-primary"><i
                                                        class="ion-arrow-up-b"></i></span> 19%</small>
                                            <div class="detail-value">$92,142</div>
                                            <div class="detail-name">This Year's Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Recent Activities</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="{{asset('Dashboard/dist/img/avatar/avatar-1.jpeg')}}" alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right"><small>10m</small></div>
                                                <div class="media-title">Farhan A Mujib</div>
                                                <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin.</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="{{asset('Dashboard/dist/img/avatar/avatar-2.jpeg')}}" alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right"><small>10m</small></div>
                                                <div class="media-title">Ujang Maman</div>
                                                <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin.</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="{{asset('Dashboard/dist/img/avatar/avatar-3.jpeg')}}" alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right"><small>10m</small></div>
                                                <div class="media-title">Rizal Fakhri</div>
                                                <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin.</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded-circle" width="50"
                                                src="{{asset('Dashboard/dist/img/avatar/avatar-4.jpeg')}}" alt="avatar">
                                            <div class="media-body">
                                                <div class="float-right"><small>10m</small></div>
                                                <div class="media-title">Alfa Zulkarnain</div>
                                                <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn-primary btn-round">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                             </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @include('admin.footer')
</body>

</html>
