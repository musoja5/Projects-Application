<!DOCTYPE html>
<html>
<head>
    <title>Systems Report</title>
</head>
<body>
    <h1>Systems Report</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Category</th>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
                <th>Developer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($systems as $system)
            <tr>
                <td>{{ $system->pcat }}</td>
                <td>{{ $system->pcode }}</td>
                <td>{{ $system->pname }}</td>
                <td>{{ $system->pdescription }}</td>
                <td>{{ $system->pdeveloper }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
