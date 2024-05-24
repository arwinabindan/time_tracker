<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            /* Increased padding for better spacing */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 450px;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
            /* Added margin for spacing */
        }

        label {
            display: block;
            margin-bottom: 10px;
            /* Increased margin for better spacing */
        }

        input {
            width: calc(100% - 20px);
            /* Adjusted width to accommodate padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        @error('credentials')
            <div>{{ $message }}</div>
        @enderror
    </form>
</body>

</html>
