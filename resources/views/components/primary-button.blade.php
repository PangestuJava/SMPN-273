<button {{ $attributes->merge([
    'type' => 'submit',
    'data-mdb-ripple' => 'true',
    'data-mdb-ripple-color' => 'light',
    'class' =>
    'btn btn-primary py-3 px-4 w-full align-top',
    ]) }}>
    {{ $slot }}
</button>