
<x-header>
</x-header>

<x-preloader>

</x-preloader>


<div class="body_container">
    <!-- sidebar starts -->
    <x-body.sidebar>

    </x-body.sidebar>
    <!-- sidebar ends -->

    <!-- feed starts -->

    @yield('main-body')

    <x-body.main-body>

    </x-body.main-body>

    <!-- feed ends -->

    <!-- widgets starts -->
    <x-body.widgets>

    </x-body.widgets>
    <!-- widgets ends -->
</div>

<x-footer>

</x-footer>
