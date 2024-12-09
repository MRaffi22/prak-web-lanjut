<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1c7581 0%, #32e9b2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }


        .content-table {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-tambah {
            display: inline-block;
            background-color: #4e54c8;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-tambah:hover {
            background-color: #8f94fb;
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .table thead {
            background: linear-gradient(135deg, #6ad681 0%, #0d5842 100%);
            color: white;
        }

        .table th {
            padding: 12px;
            font-size: 1rem;
        }

        .table tbody tr {

            border-bottom: 1px solid #ddd;
        }

        .table td {
            padding: 12px;
            font-size: 1rem;
            color: #ffffff;
        }

        .table tbody tr:hover {
            background-color: #0c4049;
        }

        .table td:last-child {
            text-align: center;
        }

        @media screen and (max-width: 768px) {

            .table-container {
                -webkit-overflow-scrolling: touch;
            }

            .table th, .table td {
                font-size: 0.9rem;
                padding: 8px;
            }

            .btn-tambah {
                width: 100%;
                font-size: 1.2rem;
            }
        }

        @media screen and (max-width: 480px) {
            .table th, .table td {
                font-size: 0.8rem;
                padding: 6px;
            }

            .btn-tambah {
                font-size: 1rem;
                padding: 8px 12px;
            }
        }


    </style>
</head>
<body>


<div class="content-table">
        <a href="{{ route('user.create') }}" class="btn-tambah">Tambah User</a>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group">
                @foreach ($users as $user)
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['npm'] ?></td>
                        <td><?= $user['nama_kelas'] ?></td>
                        <td><a href="{{ route('user.show', $user->id) }}" class="btn-detail">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>


</body>
</html>
