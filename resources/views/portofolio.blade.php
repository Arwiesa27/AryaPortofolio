    <!DOCTYPE html>
    <html lang="eng">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>ARYAWIRA</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">My Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarNav" aria-expanded="false" araria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active text-warning fw-bold" aria-current="page" href="/admin">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="#about">About Me</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-warning fw-bold" href="#contact">Contact Me</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <section id="home">
    <div class="container-fluid">
        <div class="p-5 text-center">
            @foreach ($profile as $key => $item)
            <img class="rounded-circle img-tumbnail pt-4" width="200" src="/storage/{{ $item->foto }}" alt="pp" />
            <h2 class="mt-3 fw-bold">{{ $item->nama }}</h2>
            @endforeach
            <p class="fs-5">{{ $item->username }}</p>
        </div>
    </div>

    </section>
    <p class="bg-success">-</p>
    <section id="about" class="pt-3">
        <div class="container">

            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About Me</h3>
                <h2> @foreach ($profile as $item)
                    {{ $item->about }}
                    @endforeach</h2>
                <div class="row justify-content-center">

                </div>
            </div>
        </div>
      </section>

      <p class="bg-success">-</p>
      <section id="portofolio" class="pt-5">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-bold mb-4">My Portofolio</h3>
                <div class="row justify-content-center">
                    @foreach ($admin as $key => $item )
                    <div class="col-md-4 mb-2 p-4">
                        <div class="card">
                            <img src="storage/{{ $item->foto }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $item->nama }}</p>
                                <p><b>{{ $item->kategori }}</b></p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <p class="bg-success">-</p>
    <section id="contact">
    <div class="container">
        <div class="p-5">
        <h3 class="fw-bold text-center mb-3">Contact Me</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="#contact" method="post" id="form-contact">
                <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap<span>*</span></label>
                <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" />
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email<span>*</span></label>
                <input type="text" class="form-control" name="email" id="email" autocomplete="off" />
                </div>
                <div class="mb-3">
                <label for="nama" class="form-label">Pesan<span>*</span></label>
                <textarea class="form-control" name="pesan" id=pesan rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Kirim</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="container-fluid">
    <footer class="py-3 my-3 border-top bg-success">
        <p class="text-center text-white">&copy; 2023 <a href="https://www.instagram.com/arwiesa_/" target="blank" class="fw-bold text-decoration-none text-warning">Arya Wira Saputra</a></p>
    </footer>
    </div>
    </body>
    </html>
