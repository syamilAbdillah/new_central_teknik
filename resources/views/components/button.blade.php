<button {{
    $attributes->merge([
            'class' => 'px-4 py-3 inline-flex items-center font-bold text-sm rounded-lg transition active:scale-95',
        ])
}} >
    {{ $slot }}
</button>