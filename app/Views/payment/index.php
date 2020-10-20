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
                <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="titlePayment" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titlePayment">Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control form-control-sm" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control form-control-sm" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
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
                                            <th>Id</th>
                                            <th>Client</th>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th>Expire in</th>
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
    <script src="<?= base_url('')?>/assets/js/pages/payment.js?v=<?=JS_VERSION?>"></script>