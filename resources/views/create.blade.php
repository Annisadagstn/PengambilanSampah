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
    <form action={{route("/sampah/store")}} method="post">
        @csrf
        <div class="mb-3 mt-5">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
        </div>

        <div class="mb-3">
            <label for="rujukan" class="form-label">Category</label>
            <select name="rujukan" class="form-control" id="rujukan" onchange="show()">
                <option value="true">Ya</option>
                <option value="false">Tidak</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="rumah_sakit" class="form-label">Rumah Sakit</label>
            <input type="text" name="rumah_sakit" class="form-control" id="rumah_sakit">
        </div>

        <div class="mb-3">
            <label for="obat" class="form-label">Obat</label>
            <input type="text" name="obat" class="form-control" id="obat">
        </div>
        
        <div class="mb-3">
            <label for="harga_satuan" class="form-label">harga_satuan</label>
            <input type="text" name="harga_satuan" class="form-control" id="harga_satuan">
        </div>

        <div class="mb-3">
            <label for="apoteker" class="form-label">apoteker</label>
            <input type="text" name="apoteker" class="form-control" id="apoteker">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</body>
</html>
    
     
    
              
              
    