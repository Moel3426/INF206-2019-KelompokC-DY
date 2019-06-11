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
                <?php foreach ($tb_member as $mbr) { ?>
                    <tr>
                        <td>ID </td>
                        <td><?= $mbr['id']; ?></td>
                    </tr>
                    <tr>
                        <td>NAMA</td>
                        <td><?= $mbr['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>AGAMA</td>
                        <td><?= $mbr['agama']; ?></td>
                    </tr>
                    <tr>
                        <td>STATUS</td>
                        <td><?= $mbr['status']; ?></td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td><?= $mbr['email']; ?></td>
                    </tr>
                    <tr>
                        <td>NoHP/TELP</td>
                        <td><?= $mbr['noHp']; ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?= $mbr['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>NEGARA</td>
                        <td><?= $mbr['negara']; ?></td>
                    </tr>
                    <tr>
                        <td>KOTA/KABUPATEN</td>
                        <td><?= $mbr['kotakabupaten']; ?></td>
                    </tr>
                    <tr>
                        <td>KODE POS</td>
                        <td><?= $mbr['kodepos']; ?></td>
                    </tr>
                    <tr>
                        <td>DESKRIPSI</td>
                        <td><?= $mbr['deskripsi']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>