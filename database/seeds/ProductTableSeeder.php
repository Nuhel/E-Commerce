<?php
use Illuminate\Database\Seeder;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'ImagePath' => 'img01.jpg',
            'title' => 'mobile',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 50,
            'category_id' => 1,
            'type' => 'S',
            'subcategory_id' => 1,
            'stock' => 'In Stock',
            'review' => 4
        ]);
        $product->save();

         $product = new \App\Product([
            'ImagePath' => 'img09.jpg',
            'title' => 'mobile',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 60,
            'category_id' => 2,
            'type' => 'S',
            'subcategory_id' => 1,
            'stock' => 'In Stock',
            'review' => 5
        ]);
        $product->save();

         $product = new \App\Product([
            'ImagePath' => 'img05.jpg',
            'title' => 'mobile',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 100,
            'category_id' => 3,
            'type' => 'S',
            'subcategory_id' => 2,
            'stock' => 'Out of Stock',
            'review' => 3
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img02.jpg',
            'title' => 'watch',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 60,
            'category_id' => 1,
            'type' => 'H',
            'subcategory_id' => 1,
            'stock' => 'In Stock',
            'review' => 5
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'img03.jpg',
            'title' => 'laptop',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 20,
            'category_id' => 1,
            'type' => 'H',
            'subcategory_id' => 1,
            'stock' => 'Out of Stock',
            'review' => 1
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'img04.jpg',
            'title' => 'computer',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 20,
            'category_id' => 1,
            'type' => 'save',
            'subcategory_id' => 1,
            'stock' => 'In Stock',
            'review' => 4
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img05.jpg',
            'title' => 'books',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release',
            'price' => 20,
            'category_id' => 1,
            'type' => 'save',
            'subcategory_id' => 1,
            'stock' => 'In Stock',
            'review' => 5
        ]);
        $product->save();

         $blog = new \App\Blog([
            'image' => 'img05.jpg',
            'title' => 'Exiting offer',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release'
        ]);
        $blog->save();

         $blog = new \App\Blog([
            'image' => 'img01.jpg',
            'title' => 'New Exiting offer',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release'
        ]);
        $blog->save();


         $blog = new \App\Blog([
            'image' => 'img03.jpg',
            'title' => 'New Exiting offer',
            'description' => 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release'
        ]);
        $blog->save();



         $admin = new \App\Admin([
            'email' => 'muhon@gmail.com',
            'password' => '$2y$10$9rjzLMRmRAxD7XWPMtSX/eZNpvUBNaTdBhy6S5633lULAgLyxvNWe',
        ]);
        $admin->save();


    }
}