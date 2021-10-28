<!DOCTYPE html>
<html>

<head>
    <title>Monitoring System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/download.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/owl.css">
</head>

<body>

    <center>

        <h2>Data Pemantauan Air Sungai</h2>
        <h4> Station 2 </h4>
        <br>

    </center>

    <table border="1" style="width: 100%">
        <tr>
            <th>Tanggal</th>
            <th>Rain Gauge</th>
            <th>Water Level</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Conductivity</th>
        </tr>
        <?php foreach ($tables as $t) : ?>
        <tr>
            <td>
                <center><?= $t['DateTime'] ?></center>
            </td>
            <td>
                <center><?= $t['Rain_Gauge'] ?></center>
            </td>
            <td>
                <center><?= $t['Water_Level'] ?></center>
            </td>
            <td>
                <center><?= $t['Temperature'] ?></center>
            </td>
            <td>
                <center><?= $t['pH'] ?></center>
            </td>
            <td>
                <center><?= $t['Conductivity'] ?></center>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
    window.print();
    </script>

</body>

</html>
