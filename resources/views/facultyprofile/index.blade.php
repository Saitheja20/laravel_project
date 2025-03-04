<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Profile List</title>
</head>
<body>

<h1>Profile of the faculty</h1>


@if($facultys->isEmpty())
    <p>No records found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                    <th>Experience</th>

                </tr>



            </thead>
            <tbody>
                @foreach($facultys as $faculty)
                    <tr>
                        <td>{{ $faculty->name }}</td>
                        <td>{{ $faculty->email }}</td>
                        <td>{{ $faculty->department }}</td>
                        <td>{{ $faculty->designation }}</td>
                        <td>{{ $faculty->qualification }}</td>
                        <td>{{ $faculty->experience }}</td>

                    </tr>
                @endforeach
            </tbody>



        </table>
        @endif
</body>
</html
