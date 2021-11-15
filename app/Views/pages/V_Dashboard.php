<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid p-3">

        <a class="btn btn-primary m-3" href="/tambah">Tambah User</a>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Previllege</th>
                                <th scope="col">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($user as $users) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $users['username']; ?></td>
                                    <td><?= $users['password']; ?></td>
                                    <td><?= $users['status']; ?></td>
                                    <td>
                                        <a class="btn btn-outline-warning m-1" href="/pages/<?= $users['username']; ?>">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>

<?= $this->endSection('content'); ?>