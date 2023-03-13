<x-layout>
    <x-settings heading="Create new post down here!">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" placeholder="Your post title"/>
            <x-form.input name="thumbnail" type="file" label="Post image"/>
            <x-form.select name="category_id" label="Select category" :options="\App\Models\Category::all()"  />
            <x-form.input name="slug" placeholder="post slug"/>
            <x-form.textarea name="excerpt" rows='3' placeholder="Excerpt will be shown on the first page."/>
            <x-form.textarea name="body" placeholder="This is body for your post."/>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-settings>
</x-layout>
