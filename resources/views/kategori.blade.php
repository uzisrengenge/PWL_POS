<html>
    <head>
        <title>Kategori</title>
    </head>
    <body>
       <h1>Kategori</h1>
       <table border="1">
           <tr>
               <th>ID</th>
               <th>Kode Kategori</th>
                <th>Nama Kategori</th>
           </tr>
           @foreach ($data as $d )
           <tr>
               <td>{{ $d->kategori_id }}</td>
               <td>{{ $d->kategori_kode }}</td>
               <td>{{ $d->kategori_nama }}</td>
           </tr>
           @endforeach
       </table>
    </body>
