<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Report</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px;
        }
        .footer {
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px;
            font-size: 12px;
        }
        .content {
            margin-top: 150px; /* Adjust according to the height of your header */
            margin-bottom: 50px; /* Adjust according to the height of your footer */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <img src="{{ public_path('images/nduk.png') }}" alt="Logo" height="50">
        <h2>Confidential</h2>
    </div>

    <!-- Footer Section -->
    <div class="footer">
       2024 Deftec Software Squadron
    </div>

    <!-- Main Content Section -->
    <div class="content">
        <h1>Student Report</h1>
        <p>Generated on: {{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Student Identity</th>
                    <th>Rank</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Developer's Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->pname }}</td>
                        <td>{{ $student->stud_svc_no }}</td>
                        <td>{{ $student->rank }}</td>
                        <td>{{ $student->stud_fname }}</td>
                        <td>{{ $student->stud_lname }}</td>
                        <td>{{ $student->stud_email }}</td>
                        <td>{{ $student->stud_phone }}</td>
                        <td>{{ $student->class_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
