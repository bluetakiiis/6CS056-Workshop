<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    @if($errors->any())
        <div>
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="/courses/{{ $course->id }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <div>
            <label for="name">Course Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $course->name) }}"
            >
        </div>

        <br>

        <div>
            <label for="code">Course Code</label>

            <input
                type="text"
                id="code"
                name="code"
                value="{{ old('code', $course->code) }}"
            >
        </div>

        <br>

        <div>
            <label for="description">Description</label>

            <textarea
                id="description"
                name="description"
            >{{ old('description', $course->description) }}</textarea>
        </div>

        <br>

        <div>
            <label for="credit_hours">Credit Hours</label>

            <input
                type="number"
                id="credit_hours"
                name="credit_hours"
                value="{{ old('credit_hours', $course->credit_hours) }}"
            >
        </div>

        <br>

        <button type="submit">
            Update Course
        </button>

    </form>

    <br>

    <a href="/courses">
        Back to Courses
    </a>

</body>
</html>