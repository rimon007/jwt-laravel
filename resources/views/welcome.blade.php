<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div class="container">
            <div id="mainHeader" class="pt-4 pb-4">
                <div class="row">
                    <div class="col">                        
                        <h1 class="topHeader"> 
                            <strong>MEDICOCAREBD</strong>
                            <span> Admin Panel</span>
                        </h1>
                    </div>
                </div>
            </div>

            <main class="mt-4 mb-4">
                <div class="row">
                    <div class="col-md-2">
                         <aside id="mainSidebar">
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link">
                                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                                        Dashboard
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        Monitoring
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        Metrics
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">                                        
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        Recent Jobs
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-md-10">
                        <section class="mainContent">
                            <div class="card">
                                <div class="card-header">Overview</div>

                                <div class="card-body p-0">
                                    <div class="container-fluid">
                                        <div class="stats row">
                                            <div class="stat col-3 p-4">
                                                <h2 class="stat-title">Jobs Per Minute</h2>
                                                <h3 class="stat-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                    2134
                                                </span>
                                            </div>
                                            <div class="stat col-3 p-4">
                                                <h2 class="stat-title">Jobs past hour</h2>
                                                <h3 class="stat-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                   234
                                                </span>
                                            </div>
                                            <div class="stat col-3 p-4">
                                                <h2 class="stat-title">Failed Jobs past hour</h2>
                                                <h3 class="stat-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                    33
                                                </span>
                                            </div>
                                            <div class="stat col-3 p-4 border-right-0">
                                                <h2 class="stat-title">Status</h2>
                                                <h3 class="stat-meta">&nbsp;</h3>

                                                <div class="d-flex align-items-center">
                                                    <status :active="stats.status == 'running'" :pending="stats.status == 'paused'" class="mr-2"/>
                                                    <span class="stat-value">
                                                      342
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="stat col-3 p-4 border-bottom-0">
                                                <h2 class="stat-title">Total Processes</h2>
                                                <h3 class="state-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                    23
                                                </span>
                                            </div>

                                            <div class="stat col-3 p-4 border-bottom-0">
                                                <h2 class="stat-title">Max Wait Time</h2>
                                                <h3 class="stat-meta">
                                                     
                                                </h3>
                                                <span class="stat-value">
                                                   --
                                                </span>
                                            </div>

                                            <div class="stat col-3 p-4 border-bottom-0">
                                                <h2 class="stat-title">Max Runtime</h2>
                                                <h3 class="state-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                   -
                                                </span>
                                            </div>

                                            <div class="stat col-3 p-4 border-0">
                                                <h2 class="stat-title">Max Throughput</h2>
                                                <h3 class="state-meta">&nbsp;</h3>
                                                <span class="stat-value">
                                                    -
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4" v-if="workload.length">
                                <div class="card-header">Current Workload</div>
                                <div class="table-responsive">
                                    <table class="table card-table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Queue</th>
                                            <th>Processes</th>
                                            <th>Jobs</th>
                                            <th>Wait</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="queue in workload">
                                            <td>
                                                <span>Test</span>
                                            </td>
                                            <td>34</td>
                                            <td>3</td>
                                            <td>pending</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card mt-4" v-for="worker in workers" :key="worker.name">
                                <div class="card-header">Worker</div>
                                <div class="table-responsive">
                                    <table class="table card-table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Supervisor</th>
                                            <th>Processes</th>
                                            <th>Queues</th>
                                            <th>Balancing</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="supervisor in worker.supervisors">
                                            <td class="ph2">
                                                <span class="fw7">DEMO</span>
                                            </td>
                                            <td>Process</td>
                                            <td>Failed</td>
                                            <td class="d-flex align-items-center">
                                                <status :active="supervisor.options.balance"  class="mr-2"/>
                                                <span v-if="supervisor.options.balance">
                                                    (0)
                                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </main>

            <footer id="mainFooter" class="pt-4 pb-4 text-center">
                Laravel is a trademark of Taylor Otwell. Copyright © Laravel LLC. All rights reserved.
            </footer>
        </div>
    </body>
</html>
