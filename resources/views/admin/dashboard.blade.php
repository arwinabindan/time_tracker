<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #F000FF, #2D86EF, #8BD8F0);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 1px solid #ddd;
            background: #F5f5dc;
            /* Added border */
        }

        h1,
        h2 {
            color: #333;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px 10px;
            /* Added space between buttons */
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .btn-logout {
            background-color: #dc3545;
            /* Red color */
            float: right;
            /* Align to the right */
        }

        .btn-logout:hover {
            background-color: #9c2f37;
            /* Dark red on hover */
        }

        .btn-container {
            display: flex;
            justify-content: flex-start;
            /* Align buttons to the left */
            margin-bottom: 20px;
            /* Space between container and tables */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .col-md-6 {
            width: 48%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="btn-container">
            <a href="{{ route('admin.add.student') }}" class="btn btn-primary">Add Student</a>
            <a href="{{ route('admin.add.facilitator') }}" class="btn btn-primary">Add Facilitator</a>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}" class="btn-logout"> <!-- Added 'btn-logout' class -->
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button> <!-- Changed to red color -->
        </form>

        <h2>Students</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->year }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->section }}</td>
                        <td>
                            <a href="{{ route('admin.edit.student', ['id' => $student->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.delete.student', ['id' => $student->id]) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Facilitators</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilitators as $facilitator)
                    <tr>
                        <td>{{ $facilitator->name }}</td>
                        <td>{{ $facilitator->username }}</td>
                        <td>
                            <a href="{{ route('admin.edit.facilitator', ['id' => $facilitator->id]) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.delete.facilitator', ['id' => $facilitator->id]) }}"
                                method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Student's Attendance</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->year }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->section }}</td>
                        <td>{{ $student->time_in }}</td>
                        <td>{{ $student->time_out }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
