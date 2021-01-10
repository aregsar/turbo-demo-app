<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('posts.index') }}" class="text-cool-gray-500">Posts</a> / <a
                href="{{ route('posts.show', $comment->post) }}"
                class="text-cool-gray-500">{{ $comment->post->title }}</a> / Edit Comment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <turbo-frame id="@domid($comment)">
                <div class="rounded-lg shadow">
                    @include('comments._form', ['comment' => $comment])
                </div>
            </turbo-frame>
        </div>
    </div>
</x-app-layout>
