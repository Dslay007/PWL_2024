
<!DOCTYPE html>
    <html>
    <title>Data User</title>
    <head>
        <h1>Data User</h1>
    </head>
                <body>
                
                <table border="1" cellpadding="2" cellspacing="0">
                <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                </tr>
                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{$data->username }}</td>
                     <td>{{ $data->nama }}</td>
                    <td>{{ $data->level_id }}</td>
                    </tr>
                </table>
                </body>
    </html>