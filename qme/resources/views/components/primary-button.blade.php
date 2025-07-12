@props(['value'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'input-primary-button']) }}>
    {{ $value ?? $slot }}
</button>
