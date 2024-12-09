<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
   <style>
       
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #caac4a 0%, #9c290c 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-attachment: fixed;
        }

        .container {
            max-width: 600px;
            margin-top: 40px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1.text-center {
            color: #ffffff;
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
        }

        .label-div {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff;
            font-weight: bold;
        }

        .form-control, 
        .form-select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus, 
        .form-select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .profile-img {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
            border-radius: 4px;
            object-fit: cover;
        }

        .btn-user {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
            margin-top: 40px;
        } 
        .btn-submit {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
            margin-top: 15px;
        }

        .btn-kembali {
            display: inline-block;
            padding: 6px 12px;
                    border: none;
                    border-radius: 4px;
                    color: white;
                    text-decoration: none;
                    font-size: 14px;
                    cursor: pointer;
                    transition: opacity 0.3s ease;
                
        }

        .btn-user {
            background-color: #28a745;
            color: white;
        }

        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-kembali {
            background-color: #6c757d;
            color: white;
        }

        .btn-user:hover, 
        .btn-submit:hover, 
        .btn-kembali:hover {
            opacity: 0.9;
        }

        @media (max-width: 600px) {
            .container {
                width: 95%;
                padding: 15px;
            }

            .btn-user, 
            .btn-submit, 
            .btn-kembali {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
   </style>
</head>
<body>
    <div>
        <a href="{{ route('user.list') }}" class="btn-user">List User</a>
    
        <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <h1 class="text-center">Input Data</h1>
                <div class="label-div">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                        placeholder="Nama anda">
                </div>
    
                <div class="label-div">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                        placeholder="NPM anda">
                </div>
    
                <div class="label-div">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" name="kelas_id" id="kelas_id">
                        @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                        @endforeach
                    </select>
                </div>
    
                <div class="label-div">
                    <label for="foto" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="foto" name="foto">
                    @if ($user->foto)
                    <img src="{{ asset('storage/' . $user->foto)}}" alt="Profile Picture" class="profile-img"></img>
                    @endif
                </div>
    
                <button type="submit" class="btn-submit">Submit</button>
                <a href="{{ route('user.list') }}" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>