<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    <style>
        body{
            padding: 50px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        ?>
        <table>
            <tr>
                <th>Kunci</th>
                <th>Nilai</th>
            </tr>
            <?php foreach ($Dosen as $key => $value): ?>
                <tr>
                    <td><?php echo ucfirst($key); ?></td>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>