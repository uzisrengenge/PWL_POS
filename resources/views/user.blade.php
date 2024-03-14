<html>
    <head>
        <title>User</title>
    </head>
    <body>
       <h1>User</h1>
         <a href="{{ url('user/tambah') }}">Tambah</a>
       <table border="1">
           <tr>
               <th>ID</th>
               <th>Username</th>
               <th>Nama</th>
               <th>ID level pengguna</th>
               <th>kode level</th>
                <th>level</th>
                <th>Action</th>
           </tr>
           {{-- @foreach ($data as $d )
           <tr>
               <td>{{ $d->user_id }}</td>
               <td>{{ $d->username }}</td>
               <td>{{ $d->nama }}</td>
               <td>{{ $d->level_id }}</td>

           </tr>
           @endforeach --}}


                {{-- <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td> --}}

                @foreach ($data as $d )
                <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level->level_id }}</td>
                <td>{{ $d->level->level_kode }}</td>
                <td>{{ $d->level->level_name }}</td>



                <td>
                    <a href="{{ url('user/edit/'.$d->user_id) }}">Edit</a>
                    <a href="{{ url('user/delete/'.$d->user_id) }}">Delete</a>
                </td>
            </tr>
                @endforeach

       </table>
    </body>
