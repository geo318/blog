@props(['heading'])
<h1 class="font-bold leading-15 text-xl my-10 mx-auto text-center border-b pb-7 max-w-5xl">{{ $heading }}</h1>
<div class="flex max-w-5xl mx-auto mt-10">
    <aside class="min-w-30 mr-20">
        <ul>
            <li>
                <a href='/admin/posts/create' class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">
                    Create new post
                </a>
            </li>
            <li>
                <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                    All posts
                </a>
            </li>
        </ul>
    </aside>
    <section class='mx-auto p-6 rounded-xl max-w-4xl bg-gray-100 grow'>
        {{ $slot }}
    </section>
</div>
