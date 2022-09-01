<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Booking List</h4>
                    </div>
                    <div class="row">
                        <a href="<?php echo base_url('CBa/CBooking/ToPdf')?>" class="btn btn-outline-danger"
                            style="float:right;">Export PDF</a> &nbsp;
                        <a href="<?php echo base_url('CBa/CBooking/ToExcel')?>" class="btn btn-outline-success"
                            style="float:right;">Export Excel</a> &nbsp;
                        <a href="<?php echo base_url('CBa/CBooking/newbooking')?>" class="btn btn-outline-success"
                            style="float:right;">Tbh NEW</a> &nbsp;
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#exampleModalCenteredScrollable" style="float:right;">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="iq-card-body">
                    <!-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>.
                        <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the
                        image so that it scales with the parent element.
                    </p> -->
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Booking</th>
                                    <th>Nama Penumpang</th>
                                    <th>Tanggal Booking</th>
                                    <th>Keterangan</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($bookinglist as $key => $value) {
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?php echo  $value['kode_booking']; ?></td>
                                    <td><?php echo  $value['nama_penumpang']; ?></td>
                                    <td><?php echo  $value['tanggal_booking']; ?></td>
                                    <td>
                                        <h6>Keberangkatan:</h6>
                                        <?php echo  $value['nama_pool_keberangkatan']; ?>
                                        <h6>Tujuan:</h6>
                                        <?php echo  $value['nama_pool_tujuan']; ?>
                                        <h6>Status Bayar:</h6>
                                        <?php if($value['payment_status'] == 0){?>
                                        Belum Dibayar
                                        <?php } else if ($value['payment_status'] == 1){?>
                                        Sudah Dibayar
                                        <?php }?>
                                        <h6>Seat Number:</h6>
                                        <span class="badge iq-bg-info"><?php echo  $value['seat']; ?></span>
                                    </td>
                                    <td>
                                        <?php if($value['status'] == 0){?>
                                        <span class="badge iq-bg-warning">Pending</span>
                                        <?php } else if ($value['status'] == 1){?>
                                        <span class="badge iq-bg-success">Accepted</span>
                                        <?php } else if ($value['status'] == 2){?>
                                        <span class="badge iq-bg-danger">Rejected</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                data-target="#editModal-<?php echo $value['id_booking']; ?>">Edit</button>

                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    More
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <!-- <a class="dropdown-item" href="#">View Available Seat</a> -->
                                                    <a class="dropdown-item"
                                                        href="<?= base_url('CBa/CBooking/deletebooking/'.$value['id_booking'])?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="editModal-<?php echo $value['id_booking']; ?>"
                                    class="modal fade bd-example-modal-lg role=" dialog"
                                    aria-labelledby="exampleeditModal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleeditModal">Edit
                                                    Booking</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis,
                    diam nibh finibus leo</p> -->
                                                <form method="POST"
                                                    action="<?php echo base_url('CBa/CBooking/editbooking/'.$value['id_booking'])?>">
                                                    <input type="hidden" name="id_users" id="id_users"
                                                        value="<?php echo $_SESSION['id_users'];?>" />
                                                    <div class="form-group">
                                                        <label for="exampleInputText1">Kode Booking </label>
                                                        <input type="text" name="kodebooking" class="form-control"
                                                            id="exampleInputText1"
                                                            value="<?php echo $value['kode_booking']; ?>"
                                                            placeholder="Enter Name" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail3">Nama Penumpang</label>
                                                        <input type="text" name="namapenumpang" class="form-control"
                                                            id="exampleInputText1"
                                                            value="<?php echo $value['nama_penumpang']; ?>"
                                                            placeholder="Enter Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputNumber1">Seat</label>
                                                        <select class="form-controls cobaselect2" name="seat">
                                                            <option selected="">--[Seat]--</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword3">Status</label>
                                                        <select class="form-controls cobaselect2" name="status">
                                                            <option value="0"
                                                                <?php if($value['status'] == "0"){echo "selected";}?>>
                                                                Pending</option>
                                                            <option value="1"
                                                                <?php if($value['status'] == "1"){echo "selected";}?>>
                                                                Accepted</option>
                                                            <option value="2"
                                                                <?php if($value['status'] == "2"){echo "selected";}?>>
                                                                Rejected</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword3">Payment Status</label>
                                                        <select class="form-controls cobaselect2" name="paymentstatus">
                                                            <option value="0"
                                                                <?php if($value['payment_status'] == "0"){echo "selected";}?>>
                                                                Unpaid</option>
                                                            <option value="1"
                                                                <?php if($value['payment_status'] == "1"){echo "selected";}?>>
                                                                Paid</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-warning">Update</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Booking</th>
                                    <th>Nama Penumpang</th>
                                    <th>Tanggal Booking</th>
                                    <th>Keterangan</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="exampleModalCenteredScrollable" class="modal fade bd-example-modal-lg" role="dialog"
    aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">New Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis,
                    diam nibh finibus leo</p> -->
                <form class="was-validated" method="POST"
                    action="<?php echo base_url('CBa/CBooking/insertnewbooking')?>">
                    <input type="hidden" name="id_users" id="id_users" value="<?php echo $_SESSION['id_users'];?>" />
                    <div class="form-group">
                        <label for="exampleInputText1">Kode Booking </label>
                        <input type="text" name="kodebooking" class="form-control" id="exampleInputText1"
                            value="B002USR2" placeholder="Enter Code" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Nama Penumpang</label>
                        <input type="text" name="namapenumpang" class="form-control" id="exampleInputText1" value=""
                            placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber1">Jadwal Keberangkatan</label>
                        <select class="form-controls cobaselect2" name="jadwalkeberangkatan" required>
                            <option value="">--[Jadwal]--</option>
                            <?php
                                foreach ($travel_schedule as $key => $travel) {
                                ?>
                            <option value="<?=$travel['id_departure_schedule']?>">
                                <?=$travel['tanggal_keberangkatan']?>
                            </option>
                            <?php
                        }?>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Jadwal</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumber1">Seat</label>
                        <select class="form-controls cobaselect2" id="" name="seat" required>
                            <option value="">--[Seat]--</option>
                            <option value="1">Seat 1</option>
                            <option value="2">Seat 2</option>
                            <option value="3">Seat 3</option>
                            <option value="4">Seat 4</option>
                            <option value="5">Seat 5</option>
                            <option value="6">Seat 6</option>
                            <option value="7">Seat 7</option>
                            <option value="8">Seat 8</option>
                            <option value="9">Seat 9</option>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Seat</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">Status</label>
                        <select class="form-controls cobaselect2" id="" name="status" required>
                            <option value="">--[Status]--</option>
                            <option value="0">Pending</option>
                            <option value="1">Accepted</option>
                            <option value="2">Rejected</option>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Status Pesanan</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">Payment Status</label>
                        <select class="form-controls cobaselect2" id="" name="paymentstatus" required>
                            <option value="">--[Payment Status]--</option>
                            <option value="0">Unpaid</option>
                            <option value="1">Paid</option>
                        </select>
                        <div class="invalid-feedback">Silahkan Pilih Status Bayar</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>