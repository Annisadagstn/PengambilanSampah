<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-50 m-auto py-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Data Sampah Keluarga {{$sampah['kepala_keluarga']}}</h2>
            <a href="/sampah" class="btn btn-outline-dark">Back</a>
        </div>
        <form>
        @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">kepala keluarga</label>
              <input type="email" class="form-control" id="exampleInputEmail1" value="{{$sampah['kepala_keluarga']}}">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">no rumah</label>
              <input type="text" class="form-control" id="exampleInputtext1" value="{{$sampah['no_rumah']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">rt/rw</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="{{$sampah['rt_rw']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">total karung sampah</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="{{$sampah['total_karung_sampah']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">kriteria</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="{{$sampah['kriteria']}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputtext1" class="form-label">tanggal</label>
                <input type="text" class="form-control" id="exampleInputtext1" value="{{$sampah['tanggal']}}">
            </div>
          </form>
    </div>
</body>
</html>