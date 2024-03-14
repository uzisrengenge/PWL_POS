<html>
    <head>
        <title>User</title>
    </head>
    <body>
       <h1>User</h1>
       <table border="1">
           <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Nama</th>
               <th>ID level pengguna</th>
           </tr>
           {{-- @foreach ($data as $d )
           <tr>
               <td>{{ $d->user_id }}</td>
               <td>{{ $d->username }}</td>
               <td>{{ $d->nama }}</td>
               <td>{{ $d->level_id }}</td>
           </tr>
           @endforeach --}}

           <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
            </tr>
       </table>
    </body>
