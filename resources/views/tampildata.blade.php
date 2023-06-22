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
        <h1 style="text-align: center">Edit data dummy</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatedata/{{$data->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Nama Lengkap</label
                                    >
                                    <input
                                        type="text" name="nama"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{$data->nama}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Jenis Kelamin</label
                                    >
                                    <select
                                        class="form-select" name="jenis_kelamin"
                                        aria-label="Default select example"
                                    >
                                        <option selected>{{$data->jenis_kelamin}}</option>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >No Telpon</label
                                    >
                                    <input
                                        type="number" name="no_telpon"
                                        class="form-control"
                                        id="exampleInputNumber1"
                                        aria-describedby="numberHelp" value="{{$data->no_telpon}}"
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
