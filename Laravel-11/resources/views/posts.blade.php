<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Ini adalah halaman homepage</h3>
    @foreach ($posts as $post)
        <article class="py-8  max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight text-gray-900 font-bold">{{ $post['title'] }}</h2>
            <div class="text-base text-gray-50">
                <a href="#">{{ $post['author'] }}</a> | 1 January 2024
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
            <a href="posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
