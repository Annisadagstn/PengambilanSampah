<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengambilan Sampah</title>
</head>
<body>
    @foreach ($sampah as $sampah)
        <ol>
            <li>kepala_keluarga : {{$sampah['kepala_keluarga']}}</li>
            <li>no_rumah : {{$sampah['no_rumah']}}</li>
            <li>rt_rw : {{$sampah['rt_rw']}}</li>
            <li>total_karung_sampah : {{$sampah['total_karung_sampah']}}</li>
            <li>kriteria : {{$sampah['kriteria']}}</li>
            <li>tanggal : {{$sampah['tanggal']}}</li>
            <a href="/edit">update</a>
        </ol>
    @endforeach
</body>
</html>