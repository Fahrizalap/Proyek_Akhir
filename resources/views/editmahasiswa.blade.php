<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>DATA MAHASISWA!!</title>
</head>

<body>
    <h1 class="text-center mt-3 mb-4">Edit Data Mahasiswa</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-5">
                    <div class="card-body">
                        <form action="/update-mahasiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" value="{{ $data->nim }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Isi Alamat Anda" value="{{ $data->alamat }}"
                                    style="height: 100px">{{ $data->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <input type="text" name="semester" class="form-control" value="{{ $data->semester }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <input type="text" name="prodi" class="form-control" value="{{ $data->prodi }}" />
                            </div>
                            <button type="submit" class="btn btn-primary">Perbarui</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>