@props(['posts'])

<section class="grid grid-cols-6">
    @foreach ($posts as $post)
        <x-post-card
            :post="$post"
            class="{{ $loop->iteration > 2 ? 'col-span-2' : 'col-span-3' }}"
        />
    @endforeach
</section>
