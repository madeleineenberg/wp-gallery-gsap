@include('partials.header')

<div class="main-container">
    <main class="main">
        @yield('content')
    </main>

    @hasSection('sidebar')
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    @endif
</div>

@include('partials.footer')
