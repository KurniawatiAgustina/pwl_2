<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 12pt;
        }
    </style>
    <center>
        <h5>Laporan Artikel</h5>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $a)
                <tr>
                    <td>{{ 1 }}</td>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->content }}</td>
                    <td><img src="{{asset('storage/'.$a->featured_image )}}" width="200px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>