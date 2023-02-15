<?php

namespace Database\Seeders;

use App\Models\FAQs;
use Illuminate\Database\Seeder;

class FAQsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            (object)[
                'question' => 'Is your dough gluten-free?',
                'response' => 'Yes, our dough contains no flour and is gluten-free, providing a delicious and safe alternative for those with gluten sensitivities.'
            ],
            (object)[
                'question' => 'Is your dough vegan?',
                'response' => 'Yes, our dough is vegan, as it does not contain any animal products. it a perfect choice for those following a plant-based diet.'
            ],
            (object)[
                'question' => 'Does your dough contain any preservatives or artificial ingredients?',
                'response' => 'No, our dough does not contain any preservatives or artificial ingredients. It’s purely natural.'
            ],
            (object)[
                'question' => 'How does the texture of your dough compare to other doughs?',
                'response' => 'Our dough is smoothly milled allowing for great taste and for all the nutrients to be easily absorbed.'
            ],
            (object)[
                'question' => 'What is the shelf life of your dough?',
                'response' => 'The shelf life of this dough product is 6 months. It is recommended to consume or store it within this period to ensure its freshness and quality.'
            ],
            (object)[
                'question' => 'Does the company offer delivery services?',
                'response' => 'Yes, the company offer delivery services, depending on the location and availability.'
            ],
            (object)[
                'question' => 'Does the company offer catering services for events and parties?',
                'response' => 'Yes, the company offer catering services for events and parties, including the provision of corn and corn+cassava dishes for a large group of guests.'
            ],
            (object)[
                'question' => 'Does the company have a loyalty program or rewards system for repeat customers?',
                'response' => 'Yes, the company have a loyalty program or rewards system to incentivize repeat purchases and reward customer loyalty.'
            ],
            (object)[
                'question' => 'Does the company offer bulk or wholesale options for their products?',
                'response' => 'Yes, the company offer bulk or wholesale options for their products to accommodate customers who wish to purchase larger quantities for events, restaurants, or other purposes.'
            ]
        ];

        foreach ($faqs as $faq) {
            $new_faq = new FAQs();
            $new_faq->question = $faq->question;
            $new_faq->response = $faq->response;
            $new_faq->save();
        }
    }
}
