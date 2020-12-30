<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title text-center">Customer</h3>
            <br><br><br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenterCsm"><i class="fa fa-table mr-3"></i>Tambah Data</button>
            <br>
            <br>
            <br>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">id_customer</th>
                        <th scope="col">nama_customer</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no_hp_customer</th>
                        <th scope="col">action</th>

                    </tr>
                </thead>
                <tbody id="table_customer">

                </tbody>

            </table>
            <div class="modal fade" id="exampleModalCenterCsm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formCsmadz">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat</label>
                                    <input type="text" class="form-control" name="createAlamat" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">No Hp</label>
                                    <input type="text" class="form-control" name="createNoHp" id="exampleFormControlInput1" placeholder="">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary addCsm" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="updateModalCenterCsm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formCsmadz">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input type="text" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Alamat</label>
                                    <input type="text" class="form-control" name="updateAlamat" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">No Hp</label>
                                    <input type="text" class="form-control" name="updateNoHp" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary updateCsm" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>