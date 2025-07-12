@props(['value'])

<button {{ $attributes->merge(['type' => 'button', 'class' => 'input-secondary-button']) }}>
    {{ $value ?? $slot }}
</button>
