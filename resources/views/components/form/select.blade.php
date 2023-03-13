@props(['name','options','label'])
<x-form.field>
    <x-form.label name="{{ $name }}" >{{ $label }}</x-form.label>
    <select name="{{ $name }}" id="{{ $name }}" class="bg-white border border-gray-400 p-2 w-full rounded-md" {{ $attributes(['value'=> old($name)]) }} >
        @foreach ($options as $option )
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
    </select>

    <x-form.error name="{{ $name }}"/>
</x-form.field>
