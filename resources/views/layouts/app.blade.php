<x-layouts::app.sidebar :title="trim($__env->yieldContent('title')) ?: null">
    <flux:main>
        {{ $slot ?? ''}}
        @yield('content')
    </flux:main>
</x-layouts::app.sidebar>
