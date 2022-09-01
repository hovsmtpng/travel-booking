<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card" id="card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Travel Schedule</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <!-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>.
                        <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it
                        scales with the parent element.
                    </p> -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal Jadwal</th>
                                    <th>Jam Keberangkatan</th>
                                    <th>Harga</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($travel_schedule as $key => $travel) {
                                ?>
                                <input type="hidden" id="id_trv_sch_<?=$travel['id_departure_schedule']?>"
                                    value="<?=$travel['id_departure_schedule']?>">
                                <tr>
                                    <td></td>
                                    <td><?=$travel['nama_pool_keberangkatan']?></td>
                                    <td><?=$travel['nama_pool_tujuan']?></td>
                                    <td><?=$travel['tanggal_keberangkatan']?></td>
                                    <td><?=$travel['jam_keberangkatan']?></td>
                                    <td><?=$travel['price']?></td>
                                    <td><button class="btn rounded-pill btn-primary"
                                            onclick="pilihjadwal(<?=$travel['id_departure_schedule']?>)">pilih</button>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="iq-card" id="container1" style="display:none;">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Detail</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <!-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>.
                        <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it
                        scales with the parent element.
                    </p> -->
                    <div class="col-lg-12">
                        <div class="card-plain iq-mb-3">
                            <!-- <div class="card-header">
                                Featured
                            </div> -->
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title" id="card_title"></h4>
                                    <p class="card-text" id="departuredate"></p>
                                    <p class="card-text" id="departuretime"></p>
                                    <!-- <a href="#" class="btn btn-primary">Next</a> -->
                                </center>
                                <hr>

                                <form class="was-validated" method="POST"
                                    action="<?php echo base_url('CBa/CBooking/insertnewbooking')?>">
                                    <input type="hidden" name="id_users" id="id_users"
                                        value="<?php echo $_SESSION['id_users'];?>" />
                                    <div id="id_departure_schedule"></div>
                                    <div class="form-group">
                                        <label for="exampleInputText1">Kode Booking </label>
                                        <input type="text" name="kodebooking" class="form-control"
                                            id="exampleInputText1" value="B002USR2" placeholder="Enter Code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Nama Penumpang</label>
                                        <input type="text" name="namapenumpang" class="form-control"
                                            id="exampleInputText1" value="" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputNumber1">Seat</label>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-8 offset-md-4">

                                                <table>
                                                    <tr>
                                                        <?php
                                    for ($x = 1; $x <= 1; $x++) { ?>
                                                        <td>
                                                            <div
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio" id="customRadio-<?php echo($x)?>"
                                                                    name="seat" class="custom-control-input bg-primary"
                                                                    value="<?php echo($x)?>">
                                                                <label class="custom-control-label"
                                                                    for="customRadio-<?php echo($x)?>">
                                                                    <img src="<?php echo base_url('assets/images/seat/kursi-kosong.png')?>"
                                                                        alt="" srcset=""> <?php echo($x)?>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <?php } ?>
                                                        <td></td>
                                                        <td>
                                                            <div
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio"
                                                                    class="custom-control-input bg-secondary"
                                                                    id="customCheck-supir" name="seat" value="0"
                                                                    disabled>
                                                                <label class="custom-control-label"
                                                                    for="customCheck-supir">
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
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio" id="customRadio-<?php echo($x)?>"
                                                                    name="seat" class="custom-control-input bg-primary"
                                                                    value="<?php echo($x)?>">
                                                                <label class="custom-control-label"
                                                                    for="customRadio-<?php echo($x)?>">
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
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio" id="customRadio-<?php echo($x)?>"
                                                                    name="seat" class="custom-control-input bg-primary"
                                                                    value="<?php echo($x)?>">
                                                                <label class="custom-control-label"
                                                                    for="customRadio-<?php echo($x)?>">
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
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio" id="customRadio-<?php echo($x)?>"
                                                                    name="seat" class="custom-control-input bg-primary"
                                                                    value="<?php echo($x)?>">
                                                                <label class="custom-control-label"
                                                                    for="customRadio-<?php echo($x)?>">
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
                                                                class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                                                <input type="radio" id="customRadio-<?php echo($x)?>"
                                                                    name="seat" class="custom-control-input bg-primary"
                                                                    value="<?php echo($x)?>">
                                                                <label class="custom-control-label"
                                                                    for="customRadio-<?php echo($x)?>">
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function pilihjadwal(id) {
    let card = document.getElementById("card").style.display = "none"
    let container1 = document.getElementById("container1").style.display = "block"
    // let id = document.getElementById("id_trv_sch_<?=$travel['id_departure_schedule']?>").value;

    $.ajax({
        type: "POST",
        url: "<?php echo base_url('CBa/CBooking/get_schedule')?>",
        data: {
            "id": id,
        },
        success: function(result) {
            var data = JSON.parse(result);
            console.log(data);

            var card_title =
                `
            <span style='color:green;'>${data[0]['nama_pool_keberangkatan']}</span> - ke - <span style='color:green;'>${data[0]['nama_pool_tujuan']}</span>`
            var departuredate = `
            <span>Tanggal Keberangkatan : </span> ${data[0]['tanggal_keberangkatan']}`
            var departuretime = `
            <span>Jam Keberangkatan : </span> ${data[0]['jam_keberangkatan']}`
            var jadwalkeberangkatan = `
            <input type='hidden' name='jadwalkeberangkatan' id='jadwalkeberangkatan' value="${data[0]['id_departure_schedule']}" />
            `


            document.getElementById("card_title").innerHTML = card_title;
            document.getElementById("departuredate").innerHTML = departuredate;
            document.getElementById("departuretime").innerHTML = departuretime;
            document.getElementById("id_departure_schedule").innerHTML = jadwalkeberangkatan;
        }
    })
}
</script>