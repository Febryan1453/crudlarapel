<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">

        <h1 class="text-center mb-4">Form Create Data</h1>

        <div class="text-end mb-4">
            <a href="{{ route('student.index') }}" class="btn btn-secondary">Ke Index</a>
        </div>

        <form action="{{ route('student.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input value="{{old('nama')}}" name="nama" class="form-control @error('nama') is-invalid @enderror" type="text" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('nama')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telepon</label>
                <input value="{{old('telp')}}" name="telp" type="number" class="form-control  @error('telp') is-invalid @enderror" id="exampleInputPassword1">
                @error('telp')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input value="{{old('deskripsi')}}" name="deskripsi" type="text" class="form-control  @error('deskripsi') is-invalid @enderror" id="exampleInputPassword1">
                @error('deskripsi')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>
            
            <button type="submit" class="btn btn-primary">Simpan Kontak</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>