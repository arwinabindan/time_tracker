<!DOCTYPE html>
<html>

<head>
    <title>Role Selection</title>
    <style>
        body {
            background: linear-gradient(to bottom, #FFB6C1, #FFA07A);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            /* Arrange content in a column */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            margin-top: 30px;
            /* Adjusted margin-top */
        }

        .button {
            display: inline-block;
            width: 100px;
            height: 30px;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background: linear-gradient(to bottom, #FF8888, #FF6347);
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .button:hover {
            background-color: #3e8e41;
        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        h1 {
            text-align: center;
            font-size: 60px;
            margin-bottom: 50px;
            /* Adjusted margin-bottom */
            border: 2px solid #fff1d7;
            border-radius: 20px;
            padding: 20px;
            background-color: #b77957;
        }
    </style>
</head>

<body>
    <h1>NOLITC Time Tracker</h1>
    <div class="container">
        <a href="{{ route('admin.login') }}" class="button">ADMIN</a>
        <a href="{{ route('facilitator.login') }}" class="button">FACILITATOR</a>
        <a href="{{ route('user.login') }}" class="button">USER</a>
    </div>
</body>

</html>
