@props([
'course' => null,
'submitLabel' => 'Save Course',
])

<x-form-input name="name" label="Course Name" :value="$course?->name ?? ''" required />
<x-form-input name="code" label="Course Code" :value="$course?->code ?? ''" required />
<x-form-textarea name="description" label="Description" :value="$course?->description ?? ''" />
<x-form-input name="credit_hours" label="Credit Hours" type="number" :value="$course?->credit_hours ?? ''" required />

<button type="submit" class="btn btn-primary">{{ $submitLabel }}</button>
