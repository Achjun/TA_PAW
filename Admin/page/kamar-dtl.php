<?php
if(!defined('APP_SECURE')){
    require_once 'error.php';
    die();
}
$dtl_kamar = getKamarName($_GET['id']);

$siswa = getSiswaKamar();
?>

<div class="page"><a href="index.php">Dashboard</a> / <a href="index.php?page=kamar">Kamar </a>/ <a href="">Siswa</a></div>
<?php if(!$siswa):?>
    <h1>Tidak Ada Siswa Pada Kamar Ini</h1>
    <?php else:?>
        <h1>Daftar Siswa Kamar | <?= $dtl_kamar['KAMAR']?></h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telp</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach( $siswa as $sw ):?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $sw['NISN'] ?></td>
                    <td><?= $sw['NAMA'] ?></td>
                    <td><?= $sw['ALAMAT'] ?></td>
                    <td><?= $sw['TELP'] ?></td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
<?php endif?>
