<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM9W1yJo0K3s59dbF6w5mBXwwi6xkPiJzABtkBo" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #F000FF, #2D86EF, #8BD8F0);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh;
        }

        form {
            background: linear-gradient(to bottom, #FF8888, #FF6347);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .student-icon {
            font-size: 50px;
            margin-bottom: 20px;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            padding-left: 15px;
        }

        input {
            width: calc(100% - 30px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: calc(100% - 30px);
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <form method="POST" action="{{ route('user.login.submit') }}">
            <div class="student-icon">
                <i class="fas fa-user-graduate"></i> <!-- Student icon from Font Awesome -->
            </div>
            <h1>Student Login</h1>
            @csrf
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    @endsection

</body>

</html>
