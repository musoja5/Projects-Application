<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>system Report</title>
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
        <h1>Systems Report</h1>
        <p>Generated on: {{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}</p>
        <table>
            <thead>
                <tr>
                <th>Project id</th>
                 <th>Project Catgory</th>
                 <th>Project Code</th>
                 <th>Project Name</th>
                 <th>Project Developer</th>
                <th>Cover Image</th>
               
                </tr>
            </thead>
            <tbody>
                @foreach($systems as $system)
                    <tr><td>{{ $system->id }}</td>
                        <td>{{ $system->pcat }}</td>
                        <td>{{ $system->pcode }}</td>
                        <td>{{ $system->pname }}</td>
                        <td>{{ $system->pdeveloper }}</td>
                        <td>
                            @if($system->image)
                                <img src="{{ public_path('uploads/systems/' . $system->image) }}" width="100" alt="Image">
                            @else
                                No Image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>
</html>
