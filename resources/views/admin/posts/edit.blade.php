<x-layout>
    <x-settings :heading="'EDIT POST: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name="title" placeholder="Your post title" :value="old('title',$post->title)"/>

            <div class="flex-col mb-6">
                <x-form.input name="thumbnail" type="file" label="Post image"/><img :value="old('thumbnail', $post->thumbnail)">
                <img width="100" src="{{ $post->thumbnail ? asset('storage/'. $post->thumbnail) : '/images/illustration-1.png' }}" alt="Blog Post illustration" class="rounded-xl">
            </div>
            <x-form.select name="category_id" label="Select category" :value="$post->category" :options="\App\Models\Category::all()"  />
            <x-form.input name="slug" placeholder="post slug" :value="old('slug',$post->slug)"/>
            <x-form.textarea name="excerpt" rows='3' :value="$post->excerpt" placeholder="Excerpt will be shown on the first page.">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>
            <x-form.textarea name="body" :value="$post->body" placeholder="This is body for your post.">
                {{ old('body', $post->body) }}
            </x-form.textarea>
            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
