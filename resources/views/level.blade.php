<html>
    <head>
        <title>Level</title>
    </head>
    <body>
       <h1>Level</h1>
       <table border="1">
           <tr>
               <th>ID</th>
               <th>Kode Level</th>
                <th>Nama Level</th>
           </tr>
           @foreach ($data as $d )
           <tr>
               <td>{{ $d->level_id }}</td>
               <td>{{ $d->level_kode }}</td>
               <td>{{ $d->level_name }}</td>

           @endforeach
    </body>
