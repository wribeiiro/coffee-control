<style>
    .dropdown-menu {
        font-size: 13px !important;
    }

    table > tbody > tr:hover {
        cursor: pointer;
    }

    .table-responsive {
        min-height: 100vh !important;
    }
</style>

<div class="main-panel">
    <?=view('layout/menu')?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="modal fade" id="modalPayment" role="dialog" data-backdrop="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-top-purple">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title"> Create link payment</h5>
                            </div>
  
                            <div class="modal-body">
                                <form class="form" id="formPayment">
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="client"><i class="fa fa-user"></i> Client</label>
                                                <select class="form-control" name="client" id="client">
                                                    <option selected disabled> <- Select -></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label" for="product"><i class="fa fa-cubes"></i> Product / Service</label>
                                                <select class="form-control" name="product" id="product">
                                                    <option selected disabled> <- Select -></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label" for="product"><i class="fa fa-coins"></i> Price</label>
                                                <input class="form-control price" name="price" id="price" value="0,00" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 pull-right">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-window-close"></i> Close</button>
                                            <button type="button" class="btn btn-purple"> <i class="fa fa-wallet"></i> Create link</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="content">
                            <div class="d-sm-flex align-items-center mt-4 mb-4 form-group"> <!--justify-content-between-->
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-purple shadow-sm mr-3 mb-4 form-group" data-toggle="modal" data-target="#modalPayment" id="newLink">
                                    <i class="fa fa-plus fa-sm text-white-50"></i> NEW LINK
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-condensed table-hover table-sm" id="tablePayment" style="width: 100% !important;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="border-top-left-radius: 4px;">Id</th>
                                            <th><i class="fa fa-user"></i> Client</th>
                                            <th><i class="fa fa-cube"></i> Item</th>
                                            <th><i class="fa fa-dollar-sign"></i> Price</th>
                                            <th><i class="fa fa-link"></i> Link</th>
                                            <th><i class="fa fa-info"></i> Status</th>
                                            <th><i class="fa fa-calendar"></i> Expire in</th>
                                            <th style="border-top-right-radius: 4px;"><i class="fa fa-pencil"></i> Actions</th>
                                        </tr>
                                    </thead>
                                    <thead class="filters hidden-xs">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

    <?=view('layout/scripts')?>
    <script src="<?= base_url('')?>/assets/js/pages/payment.js?v=<?=JS_VERSION?>"></script>