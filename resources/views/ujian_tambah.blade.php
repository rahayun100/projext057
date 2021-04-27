<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambahata</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #48586f">


        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar Rahayun</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/mahasiswa')}}" tabindex="-1" aria-disabled="true">Mahasiswa</a>
            </li>
        </ul>

    </form>
</div>
</div>

</nav>
<body>


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
             <h1>TAMBAH DATA UJIAN</h1>
         </div>

                <div class="card-body">
                    <a href="/ujian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ujian/store">

                        {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label>Nama Matakuliah</label>
                            <input type="text" name="nama_mk" class="form-control" placeholder="Nama matakuliah ..">

                            @if($errors->has('nama_mk'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_mk')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Dosen</label>
                            <input type="text" name="dosen" class="form-control" placeholder="Dosen ..">

                             @if($errors->has('dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('dosen')}}
                                </div>
                            @endif
                        

                        </div>
                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input type="text" name="jumlah_soal" class="form-control" placeholder="Jumlah Soal ..">

                             @if($errors->has('jumlah_soal'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_soal')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" placeholder="Keterangan .."></textarea>

                             @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>