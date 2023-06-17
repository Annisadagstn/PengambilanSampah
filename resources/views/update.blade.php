<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{route("store_trash")}}" method="post">
    @csrf
    @method('PUT')
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">kepala keluarga</label>
          <input type="email" class="form-control" id="exampleInputEmail1" value="{{$sampah['kepala_keluarga']}}">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">no rumah</label>
          <input type="password" class="form-control" id="exampleInputPassword1" value="{{$sampah['no_rumah']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">rt/rw</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="{{$sampah['rt_rw']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">total karung sampah</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="{{$sampah['total_karung_sampah']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">kriteria</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="{{$sampah['kriteria']}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">tanggal</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="{{$sampah['tanggal']}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>