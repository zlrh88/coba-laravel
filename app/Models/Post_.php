<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Travis Bickle',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint animi deserunt beatae ipsam ipsum et, excepturi minus totam eius culpa, ad optio perspiciatis distinctio vitae recusandae omnis rerum aliquid doloremque.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Patrick Bateman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci aperiam ipsam dicta numquam totam molestias laboriosam, aut commodi vel perspiciatis temporibus quam et, modi laborum corrupti eligendi ullam iusto. Animi ipsa voluptatum ad, voluptas dolor culpa enim harum, maxime voluptate repellendus nesciunt. Consequatur, non perferendis sit aut minus officia, culpa adipisci eius suscipit neque obcaecati mollitia in error illo sed rem! Iure, est ex neque voluptas sit fugiat reiciendis itaque.',
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $post = [];
     
        // foreach($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //       }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
