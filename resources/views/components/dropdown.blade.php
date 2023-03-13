@props(['trigger'])

<div x-data="{show : false}" @click.away="show=false" class="flex lg:inline-flex justify-start bg-gray-100 rounded-xl px-3 py-2 hover:cursor-pointer">
    <div @click="show = !show" class="]">
        {{ $trigger }}
    </div>
    <div x-show="show" class='absolute'>
        <div class="min-w-[9rem] absolute top-0 -left-[.7rem] overflow-y-auto overflow-x-hidden max-h-52 py-2 bg-gray-100 w-auto mt-10 z-50 rounded-xl">
            {{ $slot }}
        </div>
    </div>
</div>
