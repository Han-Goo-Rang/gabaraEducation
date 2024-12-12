@props(['news'])

<article wire:key="{{ $news->id }}"
{{ $attributes->merge(['class' => '[&:not(:last-child)]:border-b border-gray-100 pb-10']) }}>
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a wire:navigate href="{{ route('news.show', $news->slug) }}">
                <img class="mw-100 mx-auto rounded-xl" src="{{ $news->getThumbnailUrl() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                <x-news.author :author="$news->author" size="xs"/>
                <span class="text-gray-500 text-xs">. {{ $news->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('news.show', $news->slug) }}">
                    {{ $news->title }}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{ $news->getExcerpt() }}
            </p>
        </div>
    </div>
</article>