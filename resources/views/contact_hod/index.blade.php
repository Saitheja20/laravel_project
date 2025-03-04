<!-- resources/views/contact_hod/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact HOD Data</title>
</head>
<body>

    <h1>Contact HOD List</h1>

    @if($users->isEmpty())
        <p>No records found.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Add other fields as per your table structure -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <!-- Add other fields as per your table structure -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
