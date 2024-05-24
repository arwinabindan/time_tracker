<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitator Login</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #F000FF, #2D86EF, #8BD8F0);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form {
        background: linear-gradient(to bottom, #FF8888, #FF6347);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        text-align: center;
    }

    .facilitator-icon {
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
    }

    button:hover {
        background-color: #0056b3;
    }

    .error-messages {
        color: red;
        margin-bottom: 20px;
    }
</style>

<body>
    <h1>Facilitator Login</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form">
        <form method="POST" action="{{ route('facilitator.login') }}">
            @csrf
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
