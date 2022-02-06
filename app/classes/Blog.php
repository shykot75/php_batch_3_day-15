<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlog(){
        return [
            0=> [
                'title'         => 'A new Blog-1',
                'description'   => 'Blog Description',
                'author'        => 'Shykot',
                'image'         => 'a1.jpg'
            ],

            1=> [
                'title'         => 'A new Blog-2',
                'description'   => 'Blog Description',
                'author'        => 'Tarok',
                'image'         => 'a2.jpg'
            ],
            2=> [
                'title'         => 'A new Blog-3',
                'description'   => 'Blog Description',
                'author'        => 'Oronno',
                'image'         => 'a3.jpg'
            ]
        ];
    }
}