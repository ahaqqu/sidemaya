<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    @foreach($data as $data)
    <tr>
        <th>Jenis Surat</th>
        <th>File</th>
</tr>

<td>{{$data->category}}</td>
<td>{{$data->file}}</td>


@endforaech
</body>
        </html>

