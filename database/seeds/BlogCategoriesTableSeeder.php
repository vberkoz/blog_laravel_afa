<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = [
            'Without category',
            'Finance',
            'Sports',
            'Business',
            'WordPress',
            'Food',
            'Writing',
            'Cars',
            'Music',
            'Games',
            'Movies',
            'Books',
            'Fitness',
            'Mom',
            'Travel',
            'Current Events',
            'Entertainment',
            'Fashion',
            'Lifestyle',
            'DIY',
            'Politics',
            'Parenting',
            'Pets'
        ];
        $categories[] = [
            'title'     => $cName[0],
            'slug'      => str_slug($cName[0]),
            'parent_id' => 0
        ];

        for ($i = 1; $i <= 22; $i++) {
            $parentId = ($i > 4) ? rand(1, 4) : 1;

            $categories[] = [
                'title'     => $cName[$i],
                'slug'      => str_slug($cName[$i]),
                'parent_id' => $parentId
            ];
        }

        \DB::table('blog_categories')->insert($categories);
    }
}
