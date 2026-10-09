@props([
    'action',
    'message' => 'Are you sure you want to delete this record?',
])

<form
    action="{{ $action }}"
    method="POST"
    onsubmit="return confirm(@js($message))"
    style="display: inline;"
>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
