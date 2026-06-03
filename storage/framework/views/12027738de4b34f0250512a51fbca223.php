<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Data Masyarakat</h2>

    <form action="<?php echo e(route('masyarakat.update', $masyarakat->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label>Nomor KK</label>
            <input type="text" name="nomor_kk" class="form-control" value="<?php echo e($masyarakat->nomor_kk); ?>">
        </div>

        <div class="mb-3">
            <label>Nomor KTP</label>
            <input type="text" name="nomor_ktp" class="form-control" value="<?php echo e($masyarakat->nomor_ktp); ?>">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php echo e($masyarakat->nama); ?>">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"><?php echo e($masyarakat->alamat); ?></textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki" <?php echo e($masyarakat->jenis_kelamin == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo e($masyarakat->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo e(route('masyarakat.index')); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html><?php /**PATH C:\Users\Hype AMD\project-web-laravel\resources\views/masyarakat/edit.blade.php ENDPATH**/ ?>