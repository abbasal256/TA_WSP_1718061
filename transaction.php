<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title text-center">Transaction</h3>
            <br><br><br>
            <button type="button" class="btn btn-info btn-lg btnCreate" data-toggle="modal" data-target="#exampleModalCenterTsc"><i class="fa fa-table mr-3"></i>Tambah Data</button>
            <br>
            <br>
            <br>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">customer_id</th>
                        <th scope="col">operator_id</th>
                        <th scope="col">sound_id</th>
                        <th scope="col">tanggal_pemakaian</th>
                        <th scope="col">lama_pemakaian</th>
                        <th scope="col">lokasi_pemakaian</th>
                        <th scope="col">harga</th>
                        <th scope="col">dibayar</th>
                        <th scope="col">status_pembayaran</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody id="table_transaction">

                </tbody>

            </table>
            <div class="modal fade" id="exampleModalCenterTsc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formTscadz">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Customer</label>
                                    <select class="form-control addCustomer" name="createCustomer">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Operator</label>
                                    <select class="form-control addOperator" name="createOperator">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Sound</label>
                                    <select class="form-control addSound" name="createSound">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Pemakaian</label>
                                    <input type="date" class="form-control" name="createTanggalPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Lama Pemakaian</label>
                                    <input type="number" class="form-control" name="createLamaPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Lokasi Pemakaian</label>
                                    <input type="text" class="form-control" name="createLokasiPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Harga</label>
                                    <input type="number" class="form-control" name="createHarga" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Di Bayar</label>
                                    <input type="number" class="form-control" name="createDibayar" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status Pembayaran</label>
                                    <input type="text" class="form-control" name="createStatusPembayaran" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary addTsc" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="updateModalCenterTsc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formTscadz">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Customer</label>
                                    <select class="form-control addUpCustomer" name="updateCustomer">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Operator</label>
                                    <select class="form-control addUpOperator" name="updateOperator">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Sound</label>
                                    <select class="form-control addUpSound" name="updateSound">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal Pemakaian</label>
                                    <input type="date" class="form-control" name="updateTanggalPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Lama Pemakaian</label>
                                    <input type="number" class="form-control" name="updateLamaPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Lokasi Pemakaian</label>
                                    <input type="text" class="form-control" name="updateLokasiPemakaian" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Harga</label>
                                    <input type="number" class="form-control" name="updateHarga" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Di Bayar</label>
                                    <input type="number" class="form-control" name="updateDibayar" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status Pembayaran</label>
                                    <input type="text" class="form-control" name="updateStatusPembayaran" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary updateTsc" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>