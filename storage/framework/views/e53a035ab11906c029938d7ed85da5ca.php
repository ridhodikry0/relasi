<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Data Masyarakat</h2>

    <form action="<?php echo e(route('masyarakat.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label>Nomor KK</label>
            <input type="number" name="nomor_kk" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nomor KTP</label>
            <input type="number" name="nomor_ktp" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo e(route('masyarakat.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html><?php /**PATH C:\Users\Hype AMD\project-web-laravel\resources\views/masyarakat/create.blade.php ENDPATH**/ ?>