<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Anggota</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align="center" class="mt-5">DAFTAR ANGGOTA</h2>
        <table class="table">
            <th>ID</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>No.HP/TELP</th>
            </tr>
            <?php
            $no = 1;
            foreach ($tb_member as $mbr) :
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                        <img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr['foto']); ?>" width="50px" height="50px">
                    </td>
                    <td><?php echo $mbr['nama'];  ?></td>
                    <td><?php echo $mbr['email']; ?></td>
                    <td><?php echo $mbr['noHp']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>