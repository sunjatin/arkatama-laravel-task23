<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <h1 style="text-align: center">dummy table portfolio</h1>
        <div class="container">
            <a href="/tambahpegawai" type="button" class="btn btn-success"
                >Tambah
            </a>
            <!-- table -->
            <div class="row">
                @if ($message=Session::get('success'))
                <div class="alert alert-secondary" role="alert">
                    {{ $message }}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$row->nama}}</td>
                            <td>
                                <img
                                    src="{{asset('fotopegawai/'.$row->foto)}}"
                                    alt=""
                                    style="width: 40px"
                                />
                            </td>
                            <td>{{$row->jenis_kelamin}}</td>
                            <td>{{$row->no_telpon}}</td>
                            <td>{{$row->created_at->format('D M Y')}}</td>
                            <td>
                                <a
                                    href="/tampilkandata/{{$row->id}}"
                                    class="btn btn-info"
                                >
                                    edit
                                </a>
                                <a
                                    href="#"
                                    class="btn btn-danger delete"
                                    data-id="{{$row->id}}"
                                >
                                    delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- carousels --}}
            <div id="carouselExampleCaptions" class="carousel slide me-auto mb-5 mt-5 ms-auto" style="max-width: 70%; display:block;">
                <div class="carousel-indicators ">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="fotopegawai/vika2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="display-4">Kartu Ucapan</h5>
                      <p>representasikan perasaanmu pada seseorang.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="fotopegawai/annie2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="display-4">Kartu Undangan</h5>
                      <p>beritahukan pada semua orang tentang momen kebahagiaanmu.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="fotopegawai/monique2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="display-4">Kartu custom</h5>
                      <p>atau custom kartu sesuai keinginan.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://code.jquery.com/jquery-3.7.0.slim.js"
            integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c="
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
    <script>
        $(".delete").click(function () {
            var pegawaiid = $(this).attr("data-id");
            Swal.fire({
                title: "Yakin mau hapus?",
                text: "kamu akan hapus data ini dengan id " + pegawaiid + "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus aja!",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "/deletedata/" + pegawaiid + "";
                    Swal.fire("Terhapus!", "Datanya udah dihapus.", "success");
                }
            });
        });
    </script>
</html>
