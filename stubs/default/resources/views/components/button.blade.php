<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark text-white']) }}>
    {{ $slot }}
</button>
