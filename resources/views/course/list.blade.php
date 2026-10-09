<x-layouts.app title="Courses">
    <h1>Courses</h1>

    <p>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            Add Course
        </a>
    </p>

    @if ($courses->isEmpty())
        <p>No courses have been added yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Credit Hours</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->code }}</td>
                        <td>{{ $course->credit_hours }}</td>
                        <td>
                            <div class="actions">
                                <a
                                    href="{{ route('courses.show', $course) }}"
                                    class="btn btn-secondary"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('courses.edit', $course) }}"
                                    class="btn btn-primary"
                                >
                                    Edit
                                </a>

                                <x-delete-form
                                    :action="route('courses.destroy', $course)"
                                    message="Are you sure you want to delete this course?"
                                />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layouts.app>