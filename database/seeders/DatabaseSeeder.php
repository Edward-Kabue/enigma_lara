<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //avoid errors when reseeding
        //Only needed when migrations are not refreshed
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        post::factory(5)->create();
//        $user = User::factory()->create();
//       $Personal = Category::create([
//            'name' =>'Personal',
//            'slug'=>'personal'
//        ]);
//        $Family = Category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//        $work=Category::create([
//            'name'=>'work',
//            'slug'=>'work'
//        ]);
//        Post::create([
//            'user_id'=> $user->id,
//            'category_id'=> $Family->id,
//            'title'=>'work',
//            'slug'=>'first-post',
//            'excerpt'=>'work',
//            'body'=>'lorem ipsim dolor sit emet , consrcyirtr t, rtnront inonnininju vininon omeonioifonsf pjonsfinofne '
//
//        ]);
//        Post::create([
//            'user_id'=> $user->id,
//            'category_id'=> $work->id,
//            'title'=>'Daniels',
//            'slug'=>'second-post',
//            'excerpt'=>'work kaxi kazi',
//            'body'=>'lorem ipsim dolor sit emet , consrcyirtr t, rtnront inonnininju vininon omeonioifonsf pjonsfinofne '
//
//        ]);
//        Post::create([
//            'user_id'=> $user->id,
//            'category_id'=> $Personal->id,
//            'title'=>'Jack',
//            'slug'=>'third-post',
//            'excerpt'=>'work piga luk',
//            'body'=>'lorem ipsim dolor sit emet , consrcyirtr t, rtnront inonnininju vininon omeonioifonsf pjonsfinofne '
//
//        ]);
    }

}
