<div class="row">
    <div class="col-md-8">

        <!-- START SALES BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Sales</h3>
                    <span>Sales activity by period you selected</span>
                </div>
                <ul class="panel-controls panel-controls-title">
                    <li>
                        <div id="reportrange" class="dtrange">
                            <span></span><b class="caret"></b>
                        </div>
                    </li>
                    <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
                </ul>

            </div>
            <div class="panel-body">
                <div class="row stacked">
                    <div class="col-md-4">
                        <div class="progress-list">
                            <div class="pull-left"><strong>In Queue</strong></div>
                            <div class="pull-right">75%</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong>Shipped Products</strong></div>
                            <div class="pull-right">450/500</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong class="text-danger">Returned Products</strong></div>
                            <div class="pull-right">25/500</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">5%</div>
                            </div>
                        </div>
                        <div class="progress-list">
                            <div class="pull-left"><strong class="text-warning">Progress Today</strong></div>
                            <div class="pull-right">75/150</div>
                            <div class="progress progress-small progress-striped active">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div>
                        </div>
                        <p><span class="fa fa-warning"></span> Data update in end of each hour. You can update it manual by pressign update button</p>
                    </div>
                    <div class="col-md-8">
                        <div id="dashboard-map-seles" style="width: 100%; height: 200px"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SALES BLOCK -->

    </div>
    <div class="col-md-4">

        <!-- START PROJECTS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Projects</h3>
                    <span>Projects activity</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body panel-body-table">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="50%">Project</th>
                            <th width="20%">Status</th>
                            <th width="30%">Activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>Atlant</strong></td>
                            <td><span class="label label-danger">Developing</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Gemini</strong></td>
                            <td><span class="label label-warning">Updating</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Taurus</strong></td>
                            <td><span class="label label-warning">Updating</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Leo</strong></td>
                            <td><span class="label label-success">Support</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Virgo</strong></td>
                            <td><span class="label label-success">Support</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Aquarius</strong></td>
                            <td><span class="label label-success">Support</span></td>
                            <td>
                                <div class="progress progress-small progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- END PROJECTS BLOCK -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">

        <!-- START SALES & EVENTS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Sales & Event</h3>
                    <span>Event "Purchase Button"</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body padding-0">
                <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
            </div>
        </div>
        <!-- END SALES & EVENTS BLOCK -->

    </div>
    <div class="col-md-4">

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Users Activity</h3>
                    <span>Users vs returning</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body padding-0">
                <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
            </div>
        </div>
        <!-- END USERS ACTIVITY BLOCK -->

    </div>
    <div class="col-md-4">

        <!-- START VISITORS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Visitors</h3>
                    <span>Visitors (last month)</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="panel-body padding-0">
                <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
            </div>
        </div>
        <!-- END VISITORS BLOCK -->

    </div>
</div>
<!-- START DASHBOARD CHART -->
<div class="block-full-width">
    <div id="dashboard-chart" style="height: 250px; width: 100%; float: left;"></div>
    <div class="chart-legend">
        <div id="dashboard-legend"></div>
    </div>
</div>
<!-- END DASHBOARD CHART -->