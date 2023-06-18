<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Pengambilan Sampah</title>
</head>
<body>

    <div class="m-5 px-5">
        <div class="mb-3 d-flex gap-3">
            <a href="/sampah" class="btn btn-outline-dark">back</a>
        </div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kepala Keluarga</th>
                <th scope="col">No Rumah</th>
                <th scope="col">Rt/Rw</th>
                <th scope="col">Total karung sampah</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Tanggal Pengangkutan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sampahs as $sampah)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sampah['kepala_keluarga']}}</td>
                <td>{{$sampah['no_rumah']}}</td>
                <td>{{$sampah['rt_rw']}}</td>
                <td>{{$sampah['total_karung_sampah']}}</td>
                <td>{{$sampah['kriteria']}}</td>
                <td>{{$sampah['tanggal']}}</td>
                <td class="d-flex justify-content-center gap-2">
                  <a href={{route('restore_sampah', $sampah['id'])}} class="btn btn-success">Restore</a>
                  <a href={{route('delete_permanent_sampah', $sampah['id'])}} class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>