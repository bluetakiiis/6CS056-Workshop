<x-layouts.app title="Course Details">
    <h1>Course Details</h1>

    <div class="card">
        <p><strong>Name:</strong> {{ $course->name }}</p>
        <p><strong>Code:</strong> {{ $course->code }}</p>

        <p>
            <strong>Description:</strong>
            {{ $course->description ?: 'No description provided' }}
        </p>

        <p>
            <strong>Credit Hours:</strong> {{ $course->credit_hours }}
        </p>
    </div>

    <div class="actions">
        <a
            href="{{ route('courses.edit', $course) }}"
            class="btn btn-primary"
        >
            Edit Course
        </a>

        <a
            href="{{ route('courses.index') }}"
            class="btn btn-secondary"
        >
            Back to Courses
        </a>

        <x-delete-form
            :action="route('courses.destroy', $course)"
            message="Are you sure you want to delete this course?"
        />
    </div>
</x-layouts.app>