@props(['name', 'type', 'placeholder', 'label'])

<x-form.field>
    <x-form.label name="{{ $name }}">
        {{ $label ?? $name }}
    </x-form.label>

    <input type="{{ $type ?? "text" }}" name="{{ $name }}" id="{{ $name }}" class="bg-white border border-gray-400 p-2 w-full rounded-md" {{ $attributes(['value'=> old($name)]) }} placeholder="{{ $placeholder ?? '' }}">

    <x-form.error name="{{ $name }}"/>
</x-form.field>
