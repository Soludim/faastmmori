<?php

namespace Database\Seeders;

use App\Models\News;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $news = [
            (object)[
                'title' => 'US Ambassador visits Sahel Grains Factory',
                'cover_image' => 'news/news-ci-1.jpg',
                'body' => '<p>US Ambassador to Ghana Visits Sahel Grains Factory at Techniman</p>
                <p>The US Ambassador to Ghana, Virginia E. Palmer visited Sahel Grains Factory at Techniman on 25th April 2017, expressing interest in exploring potential business opportunities between the US and Ghana. Here are some of the highlights from the ambassador&apos;s visit:</p>
                <p><br></p>
                <h3>Documentary Viewing</h3>
                <p>The visit began with a screening of a short documentary that showcased the production process of your corn dough products. The ambassador and his delegation were impressed by the attention to detail and the high level of quality control that goes into the production of your products.</p>
                <p><br></p>
                <h3>Meeting with CEO</h3>
                <p>After the documentary, the ambassador and his delegation had the opportunity to meet with the CEO of the company and discuss the potential for increased trade partnerships between the US and Ghana. The ambassador expressed his admiration for the company&apos;s commitment to quality and the positive impact it has on the local community.</p>
                <p><br></p>
                <h3>Factory Tour</h3>
                <p>The visit concluded with a tour of the production facility, where the ambassador was able to see firsthand the entire production process, from sourcing raw materials to packaging finished products. He was particularly impressed by the level of cleanliness and organization in the factory, as well as the use of modern technology to ensure the highest level of quality.</p>
                <p>Overall, the ambassador&apos;s visit highlights the growing interest in Ghanaian agricultural products and the potential for increased trade partnerships between the US and Ghana. His positive comments about our products serve as a testament to the quality and authenticity of your brand.</p>
                <p><br></p>'
            ],

            (object)[
                'title' => 'Faastmmori now on Shoprite!',
                'cover_image' => 'news/news-ci-2.jpg',
                'body' => '<p>Customers at Shoprite can now enjoy the delicious taste of our high-quality packaged corn dough products for their traditional Ghanaian corn-meal porridge, Koko, and corn+cassava dough for the traditional Ghanaian dish Banku, as they have been added to the store&apos;s shelves. Here&apos;s what you need to know about this exciting news:</p>
                <p><br></p>
                <p><strong>Increased Access</strong></p>
                <p>With the addition of faastmmori products to Shoprite&apos;s inventory, customers now have increased access to these authentic and delicious products. This also provides an opportunity to introduce our brand to a wider audience, potentially leading to increased sales and brand recognition.</p>
                <p><br></p>
                <p><strong>High-Quality Standards</strong></p>
                <p>Shoprite is known for its commitment to high-quality products, and faastmmori products are no exception. The store&apos;s strict standards ensure that customers are receiving only the best products, which aligns perfectly with your own commitment to quality and authenticity.</p>
                <p><br></p>
                <p><strong>More Convenience</strong></p>
                <p>Having them available at Shoprite provides added convenience for customers who already love our products. They can now easily purchase our products while doing their regular grocery shopping, eliminating the need to go to a separate store or market.</p>
                <p><br></p>
                <p>Overall, this is great news for faastmmori and corn dough lovers. With increased access, high-quality standards, and added convenience, the availability of your products at Shoprite is sure to be a success.</p>'
            ]
        ];

        foreach ($news as $new) {
            $post = new News();
            $post->title = $new->title;
            $post->cover_image = $new->cover_image;
            $post->body = $new->body;
            $post->save();
        }
    }
}
