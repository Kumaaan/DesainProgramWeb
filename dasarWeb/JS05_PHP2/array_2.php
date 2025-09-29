<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Dosen</title>
    <link rel="stylesheet" type="text/css" href="style_array_2.css"> 
</head>
<body>

    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <caption>Data Dosen</caption>
        <tr>
            <?php foreach ($Dosen as $key => $value): ?>
                <th><?php echo $key; ?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($Dosen as $key => $value): ?>
                <td><?php echo $value; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

</body>
</html>
