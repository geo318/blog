@auth

    <form method="POST"action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u{{ auth()->id() }}" alt="" class="rounded-full">
            <h2 class="ml-4">Wanna comment down?</h2>
        </header>
        <div class="mt-6 mb-3">

            <textarea name="body" class="w-full text-sm focus:outline-none ring-1 rounded-md p-5 focus:ring" cols="30" rows="10" placeholder="share your ideas right down here..."></textarea>
            @error('body')
                <span class="mt-2 text-sm text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full text-white text-sm font-bold px-10 py-2">Post</button>
        </div>
    </form>
@else
    <a href="/login" class="text-blue-600" >Login</a> or <a href="/register" class="text-blue-600">Register</a> to leave a comment
@endauth
