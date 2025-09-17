<!doctype html>
<html lang="en">

<head>
    <title>Sibio - Aplikasi Biodata Siswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #183D3D" data-bs-theme="dark">
    <header>
        <h1 class="text-center my-3">Aplikasi Biodata Siswa</h1>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark border-bottom border-body border-top bg-dark"
            data-bs-theme="dark">
            <a class="navbar-brand ms-3" href="#">Sibio</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/beranda" aria-current="page">Beranda
                            <span class="visually-hidden"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/biodata" aria-current="page">Biodata
                            <span class="visually-hidden"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="fs-2 text-start mb-2 mt-3"><strong>BIODATA</strong></div>
        <button type="button" class="btn btn-primary">
            Tambah
        </button>
        <div class="table-responsive-md mt-2">
            <table class="table table-striped table-hover table-dark">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Daisy Doe</td>
                        <td>Perempuan</td>
                        <td>Wisconsin</td>
                        <td>20-10-2009</td>
                        <td>24 Providence Street, Little Chute, WS</td>
                        <td>
                            <div class="d-grid gap-2 d-flex">
                                <button type="button" name="" id="" class="btn btn-warning">
                                    Edit
                                </button>
                                <button type="button" name="" id="" class="btn btn-danger">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>James Dean</td>
                        <td>Laki-laki</td>
                        <td>Dallas</td>
                        <td>15-05-2008</td>
                        <td>71 Pilgrim Avenue, Dallas, TX</td>
                        <td>
                            <div class="d-grid gap-2 d-flex">
                                <button type="button" name="" id="" class="btn btn-warning">
                                    Edit
                                </button>
                                <button type="button" name="" id="" class="btn btn-danger">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

    </div>
</body>
<footer class="bg-dark text-white p-3 mt-4 fixed-bottom d-flex justify-content-between">
    <p class="d-flex text-start">Aplikasi Biodata Siswa</p>
    <p class="justify-content-end text-end">&copy;Scientia</p>
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</body>

</html>
