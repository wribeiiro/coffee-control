<<<<<<< HEAD
    <div class="main-panel">
        <?=view('layout/menu')?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
=======
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Reports</a>-->
    </div>

    <div class="row form-group">
        <div class="col-md-12 form-group">
            <div class="card">
                <div class="card-body">
                    <form id="ticketsFilter" class="form-inline mt-2">
                        <label for="selectMes" class="sr">Filter by: </label>
                        <div class="col-md-3 mx-sm-4 col-xs-12 mb-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-vue text-white" for="selectMonth"> <i class="fa fa-fw fa-calendar"></i> </label>
                                </div>
                                <select class="form-control form-control-sm" name="selectMonth" id="selectMonth">
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 mx-sm-2 mb-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <label class="input-group-text bg-vue text-white" for="selectYear"><i class="fa fa-fw fa-calendar"></i></label>
>>>>>>> 1de182032707472a9accd497c992070c2b621cc2
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
=======

                        <div class="col-md-3 mx-sm-2 mb-2">
                            <button type="text" id="searchTicket" class="btn btn-primary shadow-sm form-control form-control-sm btn-vue btn-sm"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card h-100 border-left-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tickets</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="totalTickets">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ticket-alt fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card h-100 border-left-danger">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">My open tickets</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="openTickets">0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ticket-alt fa-2x text-danger"></i>
                        </div>
>>>>>>> 1de182032707472a9accd497c992070c2b621cc2
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label>
					  						  		</div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox2" type="checkbox" checked>
						  							  	<label for="checkbox2"></label>
					  						  		</div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
    <script src="<?= base_url('') ?>/assets/js/pages/dashboard.js?v=<?= JS_VERSION ?>"></script>
=======
    </div>

    <div class="row form-group">
        <div class="col-md-4">
            <div class="alert alert-primary alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6 class="text-white-800">
                    <div>Last opened ticket <span id="ticketId"></span></div>
                </h6>

                <div class="d-sm-flex mt-1 align-items-center justify-content-between">
                    <div><i class="fa fa-fw fa-building"></i> <small id="ticketClient"></small></div>    
                    <div><i class="fa fa-fw fa-calendar"></i> <small id="ticketDate"></small></div>
                </div> 

                <div class="d-sm-flex mt-1">
                    <small id="ticketDescription"></small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-info alert-dismissible" role="alert" style="padding-right: 0 !important;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6 class="text-white-800">
                    <span>Average by month</span>
                </h6>

                <div class="d-sm-flex mt-1 align-items-center justify-content-center">
                    <i class="fas fa-info-circle"></i> &nbsp;
                    <div class="h5 mb-0 font-weight-bold text-white-800" id="avgTickets">0</div>    
                </div> 

                <div class="d-sm-flex mt-1">
                    <small>Represents the number of open tickets per month.<br>&nbsp;</small>
                </div>
            </div>
        </div>

        <!--
        <div class="col-md-4">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6>
                    <i class="fas fa-exclamation-triangle"></i>
                    <b>Error must common <span id="errorCommon"></span></b>
                </h6>

                <div class="d-sm-flex mt-1 align-items-center justify-content-between">
                    <div><i class="fa fa-fw fa-bug"></i> <small id="totalError">23</small></div>    
                </div> 

                <div class="d-sm-flex mt-1">
                    <small id="errorDescription">RUNTIME ERROR 3022 <br> &nbsp;</small>
                </div>
            </div>
        </div>
        -->
        <div class="col-md-4">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h6 class="text-white-800">
                    <div>Tickets for more than 30 days</div>
                </h6>

                <div class="d-sm-flex mt-1 align-items-center justify-content-center">
                    <i class="fa fa-fw fa-box-open"></i> &nbsp;  
                    <div class="h5 mb-0 font-weight-bold text-white-800" id="ticketsMore30Days">0</div>    
                </div> 

                <div class="d-sm-flex mt-1">
                    <small>Represents unfinished open tickets. <br> &nbsp;</small>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xs-12 form-group">
            <div class="card border-left-vue" id="chartLinha" style="padding: 15px 10px 10px 10px; height: 320px"></div>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-3 col-lg-3 form-group">
            <div class="card">
                <div class="card-header py-4 bg-secondary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-light text-white"> <i class="fa fa-inbox"></i> Tickets by area</h6>
                </div>
                <div class="ht-300" id="cardArea"></div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 form-group">
            <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-light text-white"> <i class="fa fa-user"></i> Tickets by client</h6>
                </div>
                <div class="ht-300" id="cardClient"></div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 form-group">
            <div class="card">
                <div class="card-header py-4 bg-success d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-light text-white"> <i class="fa fa-code-branch"></i> Tickets by type</h6>
                </div>
                <div class="ht-300" id="cardType"></div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 form-group">
            <div class="card">
                <div class="card-header py-4 bg-warning d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-light text-white"> <i class="fa fa-cog"></i> Tickets by module</h6>
                </div>
                <div class="ht-300" id="cardModule"></div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('') ?>/assets/js/pages/dashboard.js?v=<?= JS_VERSION ?>"></script>
>>>>>>> 1de182032707472a9accd497c992070c2b621cc2
