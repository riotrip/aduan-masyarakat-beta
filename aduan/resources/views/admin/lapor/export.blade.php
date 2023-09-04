<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #212529;
  color: white;
}

h1{
  text-align: center;
}
</style>
</head>
<body>

<h1>Data Aduan</h1>

<table id="customers">
  <tr>
    <th scope="col">Nama Pengguna</th>
    <th scope="col">Judul</th>
    <th scope="col">Isi</th>
    <th scope="col">Status</th>
    <th scope="col">Tanggal Aduan</th>
  </tr>

  @foreach ($data as $post)
  
  <tr>
    <td>{{ $post->user->name }}</td>
    <td>{{ $post->judul }}</td>
    <td>{{ $post->isi }}</td>
    <td>{{ $post->status->name }}</td>
    <td>{{ $post->created_at }}</td>
  </tr>
  
  @endforeach

</table>

</body>
</html>
