
<div class="card text-dark bg-light m-3" >
    <div class="card-header">Praktikum 8</div>
    <div class="card-body">
        <h5 class="card-title">Daftar Dosen</h5>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Keahlian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_dsn as $dsn) {
                ?>
                    <tr>
                        <td class="text-center"><?= $nomor ?></td>
                        <td class="text-center"><?= $dsn->nidn ?></td>
                        <td class="text-center"><?= $dsn->nama ?></td>
                        <td class="text-center"><?= $dsn->gender ?></td>
                        <td class="text-center"><?= $dsn->pendidikan ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>

    </div>
</div>