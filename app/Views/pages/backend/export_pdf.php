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
        <h1>List Jadwal Travel Bus Damri <br /></h1>
    </center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Tanggal Jadwal</th>
                <th>Jam Keberangkatan</th>
                <th>Harga</th>
                <th>Seat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                                foreach ($travel_schedule as $key => $value) {
                                ?>
            <tr>
                <td><?php echo  $value['id_departure_schedule']; ?></td>
                <td><?php echo  $value['nama_pool_keberangkatan']; ?></td>
                <td><?php echo  $value['nama_pool_tujuan']; ?></td>
                <td><?php echo  $value['tanggal_keberangkatan']; ?></td>
                <td><?php echo  $value['jam_keberangkatan']; ?></td>
                <td><?php echo  $value['price']; ?></td>
                <td><?php echo  $value['seat']; ?></td>
            </tr>
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
            </tr>
        </tfoot>
    </table>
</body>

</html>