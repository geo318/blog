@props(['heading','button','inputs','method','action'])
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto p-6 rounded-xl bg-gray-100">
        <h1 class="text-center font-bold text-xl">{{ $heading }}</h1>
        <form method="{{ $method }}" action="{{ $action }}" class="mt-10">
            @csrf
            @foreach ( $inputs as $input )
                <div class="mb-6">
                    <lablel for="{{ $input }}" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        {{ $input }}
                    </lablel>
                    <input type="{{ $input === 'password' ? 'password' : 'text' }}" name="{{ $input }}" id="{{ $input }}" class="border border-gray-400 p-2 w-full rounded-md" value="{{ old($input) }}" required>
                    @error($input)
                        <p class="text-red-500 mt-1 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            @endforeach
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">{{ $button }}</button>
            </div>
                {{-- @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif --}}
        </form>
    </main>
</section>
