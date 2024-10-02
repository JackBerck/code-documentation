<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8  max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-50">
            <a href="#">{{ $post['author'] }}</a> | 1 January 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">Back to posts more
            &laquo;</a>
    </article>
</x-layout>
