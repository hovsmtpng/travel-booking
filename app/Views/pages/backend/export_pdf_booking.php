<html>

<head>
    <title>Export Data Ke PDF</title>
</head>

<body>
    <style type="text/css">
    body {
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
    </style>

    <center>
        <h1>List Data Booking Bus Damri <br /></h1>
    </center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Booking</th>
                <th>Nama Penumpang</th>
                <th>Tanggal Booking</th>
                <th>Keterangan</th>
                <th>status</th>
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
                    <h6>Seat:</h6>
                    <?php echo  $value['seat']; ?>
                </td>
                <td>
                    <?php if($value['status'] == 0){?>
                    Pending
                    <?php } else if ($value['status'] == 1){?>
                    Accepted
                    <?php } else if ($value['status'] == 2){?>
                    Rejected
                    <?php }?>
                </td>
            </tr>
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
            </tr>
        </tfoot>
    </table>
</body>

</html>