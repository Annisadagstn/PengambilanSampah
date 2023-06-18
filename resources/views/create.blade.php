<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity ="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="w-50 m-auto py-4">
        <h2 class="text-center">Tambah Data Sampah</h2>
        <form action={{route("store_trash")}} method="post">
            @csrf
            <div class="mb-3 mt-5">
                <label for="name" class="form-label">kepala keluarga</label>
                <input type="text" name="kepala_keluarga" class="form-control" id="nama">
            </div>
    
            <div class="mb-3">
                <label for="name" class="form-label">no rumah</label>
                <input type="text" name="no_rumah" class="form-control" id="nama">
            </div>
    
            <div class="mb-3">
                <label for="rumah_sakit" class="form-label">rt/rw</label>
                <input type="text" name="rt_rw" class="form-control" id="rumah_sakit">
            </div>
    
            <div class="mb-3">
                <label for="obat" class="form-label">total karung sampah</label>
                <input type="text" name="total_karung_sampah" class="form-control" id="obat">
            </div>
            
            {{-- <div class="mb-3">
                <label for="rujukan" class="form-label">Kriteria</label>
                <select name="kriteria" class="form-control" id="rujukan" onchange="show()">
                    <option value="standar">Standar</option>
                    <option value="collapse">Collapse</option>
                </select>
            </div> --}}
    
            <div class="mb-3">
                <label for="apoteker" class="form-label">tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="apoteker">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/sampah" class="btn btn-outline-dark">Back</a>
        </form>
    </div>

</body>
</html>
    
     
    
              
              
    