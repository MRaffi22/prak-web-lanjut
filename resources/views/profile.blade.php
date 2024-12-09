<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .background {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            font-family: 'Arial', sans-serif;
            padding: 20px;
            box-sizing: border-box;
        }

        .card-img {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin: auto;
            transition: transform 0.3s;
        }

        .card-img:hover {
            transform: scale(1.05);
        }

        .profile-img {
            position: relative;
            overflow: hidden;
        }

        .profile-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-bottom: 4px solid #4e54c8;
        }

        .info {
            padding: 20px;
            background-color: #f9f9f9;
        }

        .label {
            font-size: 1.2rem;
            color: #333;
            margin: 10px 0;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media screen and (max-width: 768px) {
            .background {
                padding: 10px;
            }

            .card-img {
                max-width: 300px;
            }

            .label {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="card-img">
            <div class="profile-img">
                <img src="/asset/images/game.jpg">
            </div>
            <div class="info">
                <h1 class="label">{{$nama}}</h1>
                <h1 class="label">{{ $npm }}</h1>
                <h1 class="label">{{ $kelas }}</h1>
            </div>
        </div>
    </div>
</body>
</html>
