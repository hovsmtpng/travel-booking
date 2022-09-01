<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-8 offset-md-2">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tambah Jadwal Baru</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis,
                        diam nibh finibus leo</p> -->
                    <form method="POST" action="<?php echo base_url('CBa/CTravelSchedule/actionadd')?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departure">Pool Keberangkatan</label>
                                    <select class="form-controls cobaselect2" name="pool_keberangkatan"
                                        style="width:100%">
                                        <?php
                                        foreach ($pool_keberangkatan as $key => $poolkeb) {
                                        ?>
                                        <option value="<?=$poolkeb['id_pool_keberangkatan']?>">
                                            <?=$poolkeb['nama_pool_keberangkatan']?>
                                        </option>
                                        <?php
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="destinations">Pool Tujuan</label>
                                    <select class="form-controls cobaselect2" name="pool_tujuan" style="width:100%">
                                        <?php
                                        foreach ($pool_tujuan as $key => $pooltuj) {
                                        ?>
                                        <option value="<?=$pooltuj['id_pool_tujuan']?>">
                                            <?=$pooltuj['nama_pool_tujuan']?>
                                        </option>
                                        <?php
                                        }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Tanggal Keberangkatan</label>
                                    <input type="text" class="form-control datepickers" id="reservation" value=""
                                        name="tanggal">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="timepicker">Jam Keberangkatan</label>
                                    <select class="form-controls cobaselect2" name="jam_keberangkatan"
                                        style="width:100%">
                                        <option selected="">--[Jam Keberangkatan]--</option>
                                        <option value="07:00:00">07:00</option>
                                        <option value="07:30:00">07:30</option>
                                        <option value="08:00:00">08:00</option>
                                        <option value="08:30:00">08:30</option>
                                        <option value="09:00:00">09:00</option>
                                        <option value="09:30:00">09:30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationDefaultUsername">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">Rp</span>
                                </div>
                                <input type="text" class="form-control" id="validationDefaultUsername"
                                    aria-describedby="inputGroupPrepend2" name="price" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="seat">Seat</label>
                            <br>
                            <!-- <input type="text" class="form-control" id="seat" name="seat"> -->
                            <div class="row">
                                <div class="col-sm-12 col-md-8 offset-md-3">
                                    <table>
                                        <tr>
                                            <?php
                                    for ($x = 1; $x <= 1; $x++) { ?>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-primary"
                                                        id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                        value="<?php echo($x)?>">
                                                    <label class="custom-control-label"
                                                        for="customCheck-<?php echo($x)?>">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                            alt="" srcset=""> <?php echo($x)?>
                                                    </label>
                                                </div>
                                            </td>
                                            <?php } ?>
                                            <td></td>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-secondary"
                                                        id="customCheck-supir" name="seatnya[]" value="0" disabled>
                                                    <label class="custom-control-label" for="customCheck-supir">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-sopir.png')?>"
                                                            alt="" srcset="">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <?php
                                    for ($x = 2; $x <= 4; $x++) { ?>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-primary"
                                                        id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                        value="<?php echo($x)?>">
                                                    <label class="custom-control-label"
                                                        for="customCheck-<?php echo($x)?>">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                            alt="" srcset=""> <?php echo($x)?>
                                                    </label>
                                                </div>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php
                                    for ($x = 5; $x <= 7; $x++) { ?>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-primary"
                                                        id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                        value="<?php echo($x)?>">
                                                    <label class="custom-control-label"
                                                        for="customCheck-<?php echo($x)?>">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                            alt="" srcset=""> <?php echo($x)?>
                                                    </label>
                                                </div>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php
                                    for ($x = 8; $x <= 10; $x++) { ?>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-primary"
                                                        id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                        value="<?php echo($x)?>">
                                                    <label class="custom-control-label"
                                                        for="customCheck-<?php echo($x)?>">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                            alt="" srcset=""> <?php echo($x)?>
                                                    </label>
                                                </div>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <tr>
                                            <?php
                                    for ($x = 11; $x <= 13; $x++) { ?>
                                            <td>
                                                <div
                                                    class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input bg-primary"
                                                        id="customCheck-<?php echo($x)?>" name="seatnya[]"
                                                        value="<?php echo($x)?>">
                                                    <label class="custom-control-label"
                                                        for="customCheck-<?php echo($x)?>">
                                                        <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                            alt="" srcset=""> <?php echo($x)?>
                                                    </label>
                                                </div>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:rights">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>