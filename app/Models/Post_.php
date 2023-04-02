<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug"=> "judul-post-pertama",
            "author"=> "M ibnu hakim",
            "body"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ad tempore blanditiis distinctio. Fuga iusto explicabo, expedita non ratione delectus soluta unde omnis ab vel officia. Fugiat, sunt! Aperiam at veritatis a eum deleniti laboriosam molestias labore, temporibus voluptate corporis magni ea error dolor, eos beatae veniam hic sit. Optio laudantium dolore incidunt odio illo, iusto quidem, beatae adipisci deserunt cum quae animi provident, ad assumenda! Temporibus sequi ad culpa, accusantium facere assumenda vel sunt blanditiis id distinctio, ea sit."
        ],
        [
            "title" => "Post kedua",
            "slug"=> "post-kedua",
            "author"=> "Keyna",
            "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non porro recusandae rerum consectetur quos accusantium alias ut, repudiandae, esse deleniti veniam aliquid in. Ad, officia soluta animi nulla at doloribus fuga voluptatem! Deserunt laudantium incidunt sunt labore sequi laboriosam, perspiciatis non, officiis voluptas quam maiores natus alias ullam quaerat tempore vel fuga reiciendis possimus quia. Modi ducimus laborum ab ea cumque nisi hic quisquam, ex ut. Ea quam consectetur, laudantium alias quae nam non, rem repellat numquam tenetur ex, officiis commodi? Amet ullam ut quidem sunt magni commodi omnis voluptatum!"
        ],
    ];

    public static function all ()
{
    return collect (self::$blog_posts);

}

    public static function find($slug)

{ 
    $posts = static::all();
    return $posts ->firstwhere('slug', $slug);
}

}
