<x-layout>
    <x-settings heading="Manage your posts here!">

        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <tbody>

                    @foreach ($posts as $post)

                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-600 whitespace-no-wrap">edit</a>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <form method="POST" action="/admin/posts/{{ $post->id }}">
                                    @csrf
                                    @method('delete')
                                    <button class="text-xs text-gray-400">delete</button>
                                </form>
                            </td>

                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>

    </x-settings>
</x-layout>
