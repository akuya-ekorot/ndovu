<x-layout>
    <x-featured-post-card :post="$posts->splice(0,1)" />
    <div class="lg:grid lg:grid-cols-2">
        <x-post-card :posts="$posts->splice(0,2)" />
    </div>
    <div class="lg:grid lg:grid-cols-3">
        <x-post-card :posts="$posts->splice(0,3)" />
    </div>
</x-layout>
