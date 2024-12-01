@props(['category'])

<x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->title]) }}"
    :textColor="$category->text_color" :bgColor="$category->bg_Color">
    {{ $category->title }}
</x-badge>
