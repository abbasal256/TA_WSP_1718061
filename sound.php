<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title text-center">Sound</h3>
            <br><br><br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenterSnd"><i class="fa fa-table mr-3"></i>Tambah Data</button>
            <br>
            <br>
            <br>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">id_sound</th>
                        <th scope="col">paket_acara</th>
                        <th scope="col">daya</th>
                        <th scope="col">status</th>
                        <th scope="col">tarif</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody id="table_sound">

                </tbody>

            </table>
            <div class="modal fade" id="exampleModalCenterSnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formSndadz">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Paket Acara</label>
                                    <input type="text" class="form-control" name="createPaketAcara" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Daya</label>
                                    <input type="text" class="form-control" name="createDaya" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status</label>
                                    <input type="text" class="form-control" name="createStatus" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tarif</label>
                                    <input type="number" class="form-control" name="createTarif" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary addSnd" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="updateModalCenterSnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formSndadz">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Paket Acara</label>
                                    <input type="text" class="form-control" name="updatePaketAcara" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Daya</label>
                                    <input type="text" class="form-control" name="updateDaya" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status</label>
                                    <input type="text" class="form-control" name="updateStatus" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tarif</label>
                                    <input type="number" class="form-control" name="updateTarif" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary updateSnd" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>