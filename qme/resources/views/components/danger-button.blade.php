<button {{ $attributes->merge(['type' => 'submit', 'class' => 'input-danger-button']) }}>
    {{ $slot }}
</button>
