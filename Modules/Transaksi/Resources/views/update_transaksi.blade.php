<div id="update_transaksi" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="update" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="Status">Status</label>
                            <select name="Status" id="update_status" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="cancel">Cancel</option>
                                <option value="success">Success</option>
                                <option value="proccess">Proccess</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <button type="button" name="close" data-toogle="modal" class="btn btn-default" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </form>

            </div>

            <div class="modal-footer">
                </div>
        </div>

    </div>
</div>
</div>

