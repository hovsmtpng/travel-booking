<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">List Jadwal</h4>
                    </div>
                    <div class="row">
                        <a href="<?php echo base_url('CBa/CTravelSchedule/ToPdf')?>" class="btn btn-outline-danger"
                            style="float:right;">Export PDF</a> &nbsp;
                        <a href="<?php echo base_url('CBa/CTravelSchedule/ToExcel')?>" class="btn btn-outline-success"
                            style="float:right;">Export Excel</a> &nbsp;
                        <a href=" <?php echo base_url('CBa/CTravelSchedule/add')?>" class="btn btn-outline-primary"
                            style="float:right;">New</a>
                    </div>

                </div>
                <div class="iq-card-body">

                    <br>
                    <!-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>.
                        <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the
                        image so that it scales with the parent element.
                    </p> -->
                    <div class=" table-responsive">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal Jadwal</th>
                                    <th>Jam Keberangkatan</th>
                                    <th>Harga</th>
                                    <th>Seat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($travel_schedule as $key => $value) {

                                ?>
                                <tr>
                                    <td><?php echo $value['id_departure_schedule']; ?></td>
                                    <td><?php echo $value['nama_pool_keberangkatan']; ?></td>
                                    <td><?php echo $value['nama_pool_tujuan']; ?></td>
                                    <td><?php echo $value['tanggal_keberangkatan']; ?></td>
                                    <td><?php echo $value['jam_keberangkatan']; ?></td>
                                    <td><?php echo $value['price']; ?></td>
                                    <td>
                                        <?php
                                        $kursi = explode(",", $value['seat']);
                                        ?>
                                        <?php for($i=0; $i<count($kursi); $i++) {
                                        ?>
                                        <h6 style="color:#777D74">Seat <?php echo $kursi[$i]?></h6>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                data-target="#editModal-<?php echo $value['id_departure_schedule']; ?>">Edit</button>

                                            <div class=" btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    More
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#">View Available Seat</a>
                                                    <a class="dropdown-item"
                                                        href="<?= base_url('CBa/CTravelSchedule/deletetravelschedule/'.$value['id_departure_schedule'])?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="editModal-<?php echo $value['id_departure_schedule']; ?>"
                                    class="modal fade bd-example-modal-lg role=" dialog"
                                    aria-labelledby="exampleeditModal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleeditModal">Edit
                                                    Jadwal Keberangkatan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis,
                    diam nibh finibus leo</p> -->
                                                <form method="POST"
                                                    action="<?php echo base_url('CBa/CTravelSchedule/edittravelschedule/'.$value['id_departure_schedule'])?>">
                                                    <input type="hidden" name="id_users" id="id_users"
                                                        value="<?php echo $_SESSION['id_users'];?>" />
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="date">Tanggal Keberangkatan</label>
                                                                <input type="text" class="form-control datepickers"
                                                                    id="reservation" value="" name="tanggal">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label for="timepicker">Jam Keberangkatan</label>
                                                                <select class="form-controls cobaselect2"
                                                                    name="jam_keberangkatan" style="width:100%">
                                                                    <option value="07:00:00"
                                                                        <?php if($value['jam_keberangkatan'] == "07:00:00"){echo "selected";}?>>
                                                                        07:00</option>
                                                                    <option value="07:30:00"
                                                                        <?php if($value['jam_keberangkatan'] == "07:30:00"){echo "selected";}?>>
                                                                        07:30</option>
                                                                    <option value="08:00:00"
                                                                        <?php if($value['jam_keberangkatan'] == "08:00:00"){echo "selected";}?>>
                                                                        08:00</option>
                                                                    <option value="08:30:00"
                                                                        <?php if($value['jam_keberangkatan'] == "08:30:00"){echo "selected";}?>>
                                                                        08:30</option>
                                                                    <option value="09:00:00"
                                                                        <?php if($value['jam_keberangkatan'] == "09:00:00"){echo "selected";}?>>
                                                                        09:00</option>
                                                                    <option value="09:30:00"
                                                                        <?php if($value['jam_keberangkatan'] == "09:30:00"){echo "selected";}?>>
                                                                        09:30</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validationDefaultUsername">Price</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"
                                                                    id="inputGroupPrepend2">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                id="validationDefaultUsername"
                                                                aria-describedby="inputGroupPrepend2" name="price"
                                                                value="<?php echo $value['price']?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seat">Seat</label>
                                                        <br>
                                                        <!-- <input type="text" class="form-control" id="seat" name="seat"> -->
                                                        <?php
                                                        for ($x = 1; $x <= 1; $x++) { ?>
                                                        <div
                                                            class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input bg-primary"
                                                                id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                                value="<?php echo($x)?>">
                                                            <label class="custom-control-label"
                                                                for="customCheck-<?php echo($x)?>">
                                                                <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                    alt="" srcset=""> <?php echo($x)?>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                        <br>
                                                        <?php
                                                        for ($x = 2; $x <= 4; $x++) { ?>
                                                        <div
                                                            class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input bg-primary"
                                                                id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                                value="<?php echo($x)?>">
                                                            <label class="custom-control-label"
                                                                for="customCheck-<?php echo($x)?>">
                                                                <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                    alt="" srcset=""> <?php echo($x)?>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                        <br>
                                                        <?php
                                                        for ($x = 5; $x <= 7; $x++) { ?>
                                                        <div
                                                            class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input bg-primary"
                                                                id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                                value="<?php echo($x)?>">
                                                            <label class="custom-control-label"
                                                                for="customCheck-<?php echo($x)?>">
                                                                <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                    alt="" srcset=""> <?php echo($x)?>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                        <br>
                                                        <?php
                                                        for ($x = 8; $x <= 10; $x++) { ?>
                                                        <div
                                                            class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input bg-primary"
                                                                id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                                value="<?php echo($x)?>">
                                                            <label class="custom-control-label"
                                                                for="customCheck-<?php echo($x)?>">
                                                                <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                    alt="" srcset=""> <?php echo($x)?>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
                                                        <br>
                                                        <?php
                                                        for ($x = 11; $x <= 13; $x++) { ?>
                                                        <div
                                                            class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                            <input type="checkbox"
                                                                class="custom-control-input bg-primary"
                                                                id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                                value="<?php echo($x)?>">
                                                            <label class="custom-control-label"
                                                                for="customCheck-<?php echo($x)?>">
                                                                <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                    alt="" srcset=""> <?php echo($x)?>
                                                            </label>
                                                        </div>
                                                        <?php } ?>
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
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal Jadwal</th>
                                    <th>Jam Keberangkatan</th>
                                    <th>Harga</th>
                                    <th>Seat</th>
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