    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js')?>, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/dashboard/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/bootstrap.min.js')?>"></script>
    <!-- Appear JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/jquery.appear.js')?>"></script>
    <!-- Countdown JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/countdown.min.js')?>"></script>
    <!-- Counterup JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/jquery.counterup.min.js')?>"></script>
    <!-- Wow JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/wow.min.js')?>"></script>
    <!-- Apexcharts JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/apexcharts.js')?>"></script>
    <!-- Slick JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/slick.min.js')?>"></script>
    <!-- Select2 JavaScript -->
    <!-- <script src="<?php echo base_url('assets/dashboard/js/select2.min.js')?>"></script> -->
    <!-- Owl Carousel JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/owl.carousel.min.js')?>"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/jquery.magnific-popup.min.js')?>"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/smooth-scrollbar.js')?>"></script>
    <!-- lottie JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/lottie.js')?>"></script>
    <!-- Chart Custom JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/chart-custom.js')?>"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/custom.js')?>"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>">
    </script>
    <script
        src="<?php echo base_url('assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>">
    </script>
    <script
        src="<?php echo base_url('assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/dashboard/plugins/jszip/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/pdfmake/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/pdfmake/vfs_fonts.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')?>">
    </script>
    <!-- Select2 -->
    <script src="<?php echo base_url('assets/dashboard/plugins/select2/js/select2.full.min.js')?>"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url('assets/dashboard/plugins/moment/moment.min.js')?>"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url('assets/dashboard/plugins/daterangepicker/daterangepicker.js')?>"></script>
    <script>
$(document).ready(function() {
    $('table#datatable').DataTable();
});
    </script>

    <script>
$(document).ready(function() {
    //Initialize Select2 Elements
    $('.cobaselect2').select2()
});

$('#reservation').daterangepicker()
    </script>

    <script>
$(function() {
    $('input[name="tanggal"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10)
    });
});



$('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '11',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
    </script>

    <script type="text/javascript" language="javascript">
$(document).ready(function() {
    var dataTable = $('#tabel_serverside').DataTable({
        "processing": true,
        "oLanguage": {
            "sLengthMenu": "Tampilkan _MENU_ Data",
            "sSearch": "Cari: ",
            "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
            "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
            "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
            "sInfoFiltered": "(di filter dari _MAX_ total data)",
            "oPaginate": {
                "sFirst": "<<",
                "sLast": ">>",
                "sPrevious": "<",
                "sNext": ">"
            }
        },
        columnDefs: [{
            targets: [0],
            orderable: false
        }],
        lengthMenu: [5, 10, 20, 50, 100],
        "iDisplayLength": 5,
        "ordering": true,
        "info": true,
        "serverSide": true,
        "stateSave": true,
        "scrollX": true,
        "ajax": {
            url: "<?php echo base_url("CBa/CUsers/allusers"); ?>", // json datasource
            type: "post", // method  , by default get
            error: function() { // error handling
                $(".tabel_serverside-error").html("");
                $("#tabel_serverside").append(
                    '<tbody class="tabel_serverside-error"><tr><th colspan="3">Data Tidak Ditemukan di Server</th></tr></tbody>'
                );
                $("#tabel_serverside_processing").css("display", "none");
            }
        }
    });
});
    </script>

    <!-- Script -->
    <script type="text/javascript">
$(document).ready(function() {
    $('#userTable').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        lengthMenu: [5, 10, 20, 50, 100],
        "iDisplayLength": 5,
        'ajax': {
            'url': "<?=site_url('CBa/CUsers/getUsers')?>",
            'data': function(data) {
                // CSRF Hash
                var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
                var csrfHash = $('.txt_csrfname').val(); // CSRF hash

                return {
                    data: data,
                    [csrfName]: csrfHash // CSRF Token
                };
            },
            dataSrc: function(data) {

                // Update token hash
                $('.txt_csrfname').val(data.token);

                // Datatable data
                return data.aaData;
            }
        },
        'columns': [{
                data: 'id_users'
            },
            {
                data: 'fullname'
            },
            {
                data: 'email'
            },
            {
                data: 'password'
            },
            {
                data: 'level'
            },
        ]
    });
});
    </script>