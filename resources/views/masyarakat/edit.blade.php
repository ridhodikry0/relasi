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

    <form action="{{ route('masyarakat.update', $masyarakat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nomor KK</label>
            <input type="text" name="nomor_kk" class="form-control" value="{{ $masyarakat->nomor_kk }}">
        </div>

        <div class="mb-3">
            <label>Nomor KTP</label>
            <input type="text" name="nomor_ktp" class="form-control" value="{{ $masyarakat->nomor_ktp }}">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $masyarakat->nama }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ $masyarakat->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki" {{ $masyarakat->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $masyarakat->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('masyarakat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>