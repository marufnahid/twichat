
@php
    use Illuminate\Support\Facades\Route;
    $name = Route::currentRouteName();
@endphp

@if($name == 'home')

    <x-body.feed>

    </x-body.feed>

@elseif($name == 'profile')
    <x-pages.profile>

    </x-pages.profile>
@endif

