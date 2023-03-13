@props(['name', 'rows', 'cols', 'placeholder', 'label'])
<x-form.field>
    <x-form.label name="{{ $name }}" >
        {{ $label ?? $name }}
    </x-form.label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="w-full text-sm focus:outline-none ring-1 rounded-md p-5 focus:ring" cols="{{ $cols ?? '30'}}" rows="{{ $rows ?? '10' }}" placeholder="{{ $placeholder ?? '' }}">
        {{ $slot ?? old($name) }}
    </textarea>
    <x-form.error name="{{ $name }}"/>
</x-form.field>
