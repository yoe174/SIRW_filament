{{-- @if (filled($brand = config('filament.brand')))
    <div
        @class([
            'filament-brand text-xl font-bold leading-5 tracking-tight',
            'dark:text-white' => config('filament.dark_mode'),
        ])
    >
        {{ $brand }}
    </div>
@endif --}}

<img src="{{ asset('LOGO/logo.png')}}" alt="logo" width="180px">