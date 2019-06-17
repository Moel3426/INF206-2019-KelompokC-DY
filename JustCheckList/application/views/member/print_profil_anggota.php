<style>
    #title {
        margin-top: 50px;
        margin-left: 40px;
        margin-right: 80px;
        margin-bottom: 40px;
        font-size: 28px;
        border-bottom: 2px solid black;
    }

    .table {
        padding: 20px;
    }
</style>
<?php
$data = $tb_member[0];

?>
<section id="title">
    <div>
        <p>Profil Anggota</p>
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</section>

<body>
    <div class="container">
        <table class="table mt-2 data">
            <tbody>
                <tr>
                    <td>ID </td>
                    <td><?= $data['id'] ?></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>AGAMA</td>
                    <td><?= $data['agama'] ?></td>
                </tr>
                <tr>
                    <td>STATUS</td>
                    <td><?= $data['status'] ?></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><?= $data['email'] ?></td>
                </tr>
                <tr>
                    <td>NoHP/TELP</td>
                    <td><?= $data['noHp'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?= $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td>NEGARA</td>
                    <td><?= $data['negara'] ?></td>
                </tr>
                <tr>
                    <td>KOTA/KABUPATEN</td>
                    <td><?= $data['kotakabupaten'] ?></td>
                </tr>
                <tr>
                    <td>KODE POS</td>
                    <td><?= $data['kodepos'] ?></td>
                </tr>
                <tr>
                    <td>DESKRIPSI</td>
                    <td><?= $data['deskripsi'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>