@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>ARYAWIRA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center fw-bold mt-2">PROFILE</h2>
                <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-mb-3">
                        <label class="form-label">Id</label>
                        <input type="number" name="id" class="form-control mb-3" id="" value="{{ $profile->id }}">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control mb-3" id="" value="{{ $profile->nama }}">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control mb-3" id="" value="{{ $profile->username }}">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">About</label>
                        <textarea name="about" class="form-control">{{ $profile->about }}"</textarea>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Nomor HP</label>
                        <input type="number" name="nohp" class="form-control mb-3" id="" value="{{ $profile->nohp }}">
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" id="" class="form-control">{{ $profile->alamat }}"</textarea>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label">Foto</label><br>
                        @if(file_exists("storage/". $profile->foto))
                        <img src="/storage/{{ $profile->foto }}" alt="" width="100"><br>
                        @endif
                        <input type="file" name="foto" id="">
                    </div>
                    <div class="modal-footer mt-4">
                        <button class="btn btn-secondary"><a style="border: none" class="bg-transparent text-white text-decoration-none" href="/admin">Close</a></button>
                        <button type="submit" name="simpan" class="btn btn-primary mx-2">{{ $tombol }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
