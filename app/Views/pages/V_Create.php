<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid p-3">

        <a class="btn btn-danger m-3" href="/pages">Kembali</a>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" id="status" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <button type="submit" href="" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>


<?= $this->endSection('content'); ?>