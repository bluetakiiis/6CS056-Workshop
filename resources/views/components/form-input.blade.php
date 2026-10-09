@props([
'name',
'label',
'type' => 'text',
'value' => '',
'required' => false,
])

<div class="form-group">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

```
<input
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    class="form-control"
    @if ($required) required @endif
>

@error($name)
    <p class="field-error">{{ $message }}</p>
@enderror
```

</div>
