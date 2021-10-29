<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Mohamad fidi firdaus",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Maiores saepe, architecto at cupiditate quisquam laboriosam est accusantium,
                 molestiae expedita unde officia hic enim possimus eaque quia temporibus nostrum perferendis! Suscipit, 
                 repudiandae dicta repellendus mollitia enim maxime eveniet magni facere necessitatibus rem architecto quas doloremque reprehenderit iure possimus aspernatur! Alias ab laboriosam maiores fuga cumque odit deleniti dolores vitae natus assumenda animi, 
                 inventore ad, adipisci voluptate a eius porro sit consectetur aliquid sequi officiis repudiandae quaerat voluptas vel? Veniam, quo quam?"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Mohamad Fajar",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aut aliquam voluptatibus, odit hic quod architecto maiores voluptas omnis, sint a. Iure totam dolore possimus. Esse culpa eveniet placeat magni eius dolores omnis rerum modi libero provident aspernatur nisi rem harum laudantium dolore ab iusto eum quod dolorem, iste odit cum? Odio debitis molestiae beatae perspiciatis saepe enim, quisquam aliquid maxime velit id! Accusantium porro iusto harum optio libero! Possimus sed facere ea obcaecati, in libero, voluptatum nobis odit neque quae doloribus. Magni cum, praesentium corrupti aut optio doloremque excepturi eius quod placeat quos fugiat qui suscipit consequatur libero nobis."
            ]
            ];

            public static function all()
                {
                    return collect(self::$blog_posts); 
                }

            public static function find($slug)
            {
                $posts =  static::all();
                return $posts->firstWhere('slug', $slug);
        }
            
    
        }
