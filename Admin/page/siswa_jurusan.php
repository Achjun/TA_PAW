<?php
$siswa = getSiswaJurusan();
?>

<div class="page"><a href="">Admin</a> / <a href="">Jurusan </a>/ <a href="">Siswa</a></div>
<h1>Daftar Siswa Jurusan </h1>
<?php if(!$siswa):?>
    <h1>Tidak Ada Siswa Pada Jurusan Ini</h1>
    <?php else:?>
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
        </tbody>
    </table>
<?php endif?>
