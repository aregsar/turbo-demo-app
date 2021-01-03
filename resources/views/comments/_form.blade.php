<form
    @if($comment ?? false)
    action="{{ route('comments.update', $comment) }}"
    @else
    action="{{ route('posts.comments.store', $post) }}"
    @endif
    method="POST"
    class="space-y-4"
>
    @csrf
    @if($comment ?? false)
        @method('PUT')
    @endif

    <label class="block">
        <span class="text-gray-700 {{ $comment ?? false ? 'sr-only' : '' }}">Comment</span>
        <textarea name="content" class="form-textarea mt-1 block w-full" rows="3"
                  placeholder="Say something nice...">{{ old('content', optional($comment)->content) }}</textarea>
        @error('content')
        <span class="text-gray-700">{{ $message }}</span>
        @enderror
    </label>

    <div class="flex justify-between items-center">
        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>

        <a href="{{ route('posts.show', $post ?? $comment->post) }}" class="text-base text-gray-500">
            Cancel
        </a>
    </div>
</form>
