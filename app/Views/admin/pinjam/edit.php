<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-6">
        <form action="/crudpinjam/update/<?= $pinjam['id_pinjam']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="nama_peminjam" class="col-3 col-form-label">Nama peminjam</label>
                <div class="col-9">
                    <input id="nama_peminjam" name="nama_peminjam" value="<?= $pinjam['nama_peminjam']; ?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_buku" class="col-3 col-form-label">Judul buku</label>
                <div class="col-9">
                    <input id="judul_buku" name="judul_buku" placeholder="<?= $pinjam['judul_buku']; ?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_pinjam" class="col-3 col-form-label">Tanggal pinjam</label>
                <div class="col-9">
                    <input id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $pinjam['tanggal_pinjam']; ?>" type="date" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_kembali" class="col-3 col-form-label">Tanggal kembali</label>
                <div class="col-9">
                    <input id="tanggal_kembali" name="tanggal_kembali" value=" <?= $pinjam['tanggal_kembali']; ?>" type="date" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="kontak" class="col-3 col-form-label">kontak</label>
                <div class="col-9">
                    <input id="kontak" name="kontak" value=" <?= $pinjam['kontak']; ?>" type="text" required="required" class="form-control">

                </div>

                <div class="form-group row">
                    <div class="offset-3 col-9">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<!-- Page level plugins -->

<?= $this->endSection(); ?>