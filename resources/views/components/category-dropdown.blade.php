@props(['categories','currentCategory'])

<x-dropdown>
    <x-slot name="trigger">
        <button class="appearance-none pl-3 pr-9 text-sm font-semibold relative">
            <x-icon name='down-arrow' class="absolute pointer-events-none" style="right: 12px;"/>
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>
    <div>
        <x-dropdown-item href="/?" :active="request()->routeIs('home') && count(explode('/',url()->full())) === 3">All</x-dropdown-item>
        @foreach ($categories as $category )
            <x-dropdown-item
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category','page')) }}"
                :active="isset($currentCategory) && $currentCategory->is($category)"
            >
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
    </div>
</x-dropdown>
