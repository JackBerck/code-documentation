<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/welcome', function () {
    return view('welcome', ['title' => 'Welcome Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        1 => ['id' => 1, 'title' => 'Post 1', 'author' => 'John Doe', 'body' => 'This is the first post. It provides an introduction to the blog and sets the stage for future content. The post discusses various topics and gives readers a glimpse of what to expect.', 'slug' => 'post-1'],
        2 => ['id' => 2, 'title' => 'Post 2', 'author' => 'Jane Doe', 'body' => 'This is the second post. It delves deeper into the subject matter, offering insights and detailed analysis. The post aims to engage readers with thought-provoking content and encourages them to share their opinions.', 'slug' => 'post-2'],
        3 => ['id' => 3, 'title' => 'Post 3', 'author' => 'John Doe', 'body' => 'This is the third post. It explores new perspectives and presents innovative ideas. The post is designed to inspire readers and motivate them to think outside the box.', 'slug' => 'post-3'],
        4 => ['id' => 4, 'title' => 'Post 4', 'author' => 'Jane Doe', 'body' => 'This is the fourth post. It summarizes the key points discussed in previous posts and provides a comprehensive overview. The post also includes a call to action, urging readers to stay tuned for more updates.', 'slug' => 'post-4'],
    ]]);
});

Route::get('posts/{slug}', function ($slug) {
    $posts = [
        1 => ['id' => 1, 'title' => 'Post 1', 'author' => 'John Doe', 'body' => 'This is the first post. It provides an introduction to the blog and sets the stage for future content. The post discusses various topics and gives readers a glimpse of what to expect.', 'slug' => 'post-1'],
        2 => ['id' => 2, 'title' => 'Post 2', 'author' => 'Jane Doe', 'body' => 'This is the second post. It delves deeper into the subject matter, offering insights and detailed analysis. The post aims to engage readers with thought-provoking content and encourages them to share their opinions.', 'slug' => 'post-2'],
        3 => ['id' => 3, 'title' => 'Post 3', 'author' => 'John Doe', 'body' => 'This is the third post. It explores new perspectives and presents innovative ideas. The post is designed to inspire readers and motivate them to think outside the box.', 'slug' => 'post-3'],
        4 => ['id' => 4, 'title' => 'Post 4', 'author' => 'Jane Doe', 'body' => 'This is the fourth post. It summarizes the key points discussed in previous posts and provides a comprehensive overview. The post also includes a call to action, urging readers to stay tuned for more updates.', 'slug' => 'post-4'],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
