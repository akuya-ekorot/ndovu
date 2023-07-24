@props(['posts']);

<x-layout>
    @if ($posts->count())

        <x-featured-post-card :post="$posts[0]" />

        @if ($posts->count() > 1)

            <x-post-grid :posts="$posts->skip(1)" />

        @endif

    @endif
</x-layout>
