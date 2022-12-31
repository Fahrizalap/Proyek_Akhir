<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>DATA MATA KULIAH!!</title>
</head>
<body>
    <div class="container nt-4">
    @if(session('status'))
        <div class="alert alert-success">
             ((session('status')))
        </div>
    @endif
    <h1 class="text-center mt-3 mb-4">Tambah Data Mata Kuliah</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-5">
                    <div class="card-body">
                        <form action="/insert-makul" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Mata Kuliah</label>
                                <input type="text" name="makul" class="form-control" placeholder="Isi Makul Anda" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dosen</label>
                                <input type="text" name="dosen" class="form-control" placeholder="Isi Dosen Anda" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat</label>
                                <textarea class="form-control" name="tempat" placeholder="Isi Tempat Anda" style="height: 100px"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hari</label>
                                <input type="text" name="hari" class="form-control" placeholder="Isi Hari Anda" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SKS</label>
                                <input type="text" name="sks" class="form-control" placeholder="Isi SKS Anda" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
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