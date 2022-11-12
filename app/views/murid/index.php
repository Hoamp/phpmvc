<!-- Start list data -->
<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-info text-light my-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Murid
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="http://localhost/phpmvc/public/murid/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari murid disini ..." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <!-- data-bs- -->
            

            <h2>Daftar Murid</h2>

            <ul class="list-group">
                <?php foreach($data['mrd'] as $mrd):?>
                    <li class="list-group-item">
                        <?= $mrd['nama']; ?>
                        <a href="<?= BASEURL; ?>/murid/hapus/<?= $mrd['id']; ?>" class="badge badge-light bg-danger float-end mx-1 text-decoration-none " onclick="return confirm('yakin dek?')">Hapus</a>
                        <a href="<?= BASEURL; ?>/murid/ubah/<?= $mrd['id']; ?>" class="badge badge-light bg-warning float-end mx-1 text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mrd['id']; ?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/murid/detail/<?= $mrd['id']; ?>" class="badge badge-light bg-primary float-end mx-1 text-decoration-none">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- End list data -->

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judul-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Murid</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Start Form -->
            <div class="ss">
                <form action="<?= BASEURL; ?>/murid/tambah" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="massukkan nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="number" class="form-control" id="nisn" placeholder="massukkan nisn" name="nisn">
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="massukkan email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" class="form-control" id="jurusan">
                                <option value="Teknik mesin">Teknik mesin</option>
                                <option value="Teknik industri">Teknik industri</option>
                                <option value="Teknik sipil">Teknik sipil</option>
                                <option value="Teknik kain">Teknik kain</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
            
            <!-- End Form -->
        </div>
    </div>
</div>

<!-- End modal -->