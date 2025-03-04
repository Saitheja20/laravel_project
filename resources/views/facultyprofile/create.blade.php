<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Faculty Profile</title>
</head>
<body>

<h1>Create Faculty Profile</h1>

<form action="{{ route('faculty.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="department">Department</label>
        <input type="text" id="department" name="department" required>
    </div>
    <div>
        <label for="designation">Designation</label>
        <input type="text" id="designation" name="designation" required>
    </div>
    <div>
        <label for="qualification">Qualification</label>
        <input type="text" id="qualification" name="qualification" required>
    </div>
    <div>
        <label for="experience">Experience</label>
        <input type="text" id="experience" name="experience" required>
    </div>
    <div>
        <label for="image">Profile Image</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit">Save Profile</button>
</form>

</body>
</html>
