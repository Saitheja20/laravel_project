<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Faculty Profile</title>
</head>
<body>

<h1>Edit Faculty Profile</h1>

<form action="{{ route('faculty.update', $faculty->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $faculty->name }}" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $faculty->email }}" required>
    </div>
    <div>
        <label for="department">Department</label>
        <input type="text" id="department" name="department" value="{{ $faculty->department }}" required>
    </div>
    <div>
        <label for="designation">Designation</label>
        <input type="text" id="designation" name="designation" value="{{ $faculty->designation }}" required>
    </div>
    <div>
        <label for="qualification">Qualification</label>
        <input type="text" id="qualification" name="qualification" value="{{ $faculty->qualification }}" required>
    </div>
    <div>
        <label for="experience">Experience</label>
        <input type="text" id="experience" name="experience" value="{{ $faculty->experience_in_year }}" required>
    </div>
    <div>
        <label for="image">Profile Image</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit">Update Profile</button>
</form>

</body>
</html>
