<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #86e5f1 0%, #51ae92 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #9966ea 0%, #5795dd 100%);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }


        .container h1 {
            text-align: center;
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
        }


        label {
            display: block;
            font-size: 1rem;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"] {
            width: 95%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #4e54c8;
            outline: none;
        }


        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4e54c8;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #8f94fb;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus {
            border-color: #4e54c8;
            outline: none;
        }

        .input-invalid {
        border-color: red;
        }

        .message-error {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
        }


        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .container h1 {
                font-size: 1.5rem;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Create User</h1>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="@error('nama') input-invalid @enderror">
            @error('nama')
                <div class="message-error">{{ $message }}</div>
            @enderror

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}" class="@error('npm') input-invalid @enderror">
            @error('npm')
                <div class="message-error">{{ $message }}</div>
            @enderror
            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="@error('kelas_id') input-invalid @enderror">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @error('kelas_id')
                <div class="message-error">{{ $message }}</div>
            @enderror

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
