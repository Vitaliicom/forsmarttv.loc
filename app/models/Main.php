<?php


namespace app\models;


class Main extends Model
{
    public static function getAll()
    {
//        $post = \R::dispense('posts');
//        $post->title = 'My holiday3';
//        echo $id = \R::store($post);
       return \R::findAll('posts');
//        $items = \R::store($items);
//        debug($items);
//        debug(\R::wipe('posts'));
    }

}