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
                <p><br></p>
                <div style="float: left; width: 50%; padding: 5px">
                <img src="https://lh3.googleusercontent.com/2GlyAXOrbhLpERW5_b1WKrzjXRiCz8T4Dl9CKY2F-b6NQhB6wVMqG-bpfKHNfHzTvRQ=w2400" alt="" style="width:100%; border-radius:3px">
                </div>
                <div style="float: left; width: 50%; padding: 5px">
                <img src="https://lh6.googleusercontent.com/iAUIvg6YAzVT7bOzq63HOQIROmhCnjiFbssLT5eJePFd04FzmyI0XTLK0l2sMECtcA8=w2400" alt="" style="width:100%; border-radius:3px">
                </div>
                <div style="float: left; width: 50%; padding: 5px">
                <img src="https://lh6.googleusercontent.com/lFYvafInCIAQLvBWNROv7_FU21eqBQ8Z0g30djiqgNUuVV4IfTmDlHcwWaEixTd3vN4=w2400" alt="" style="width:100%; border-radius:3px">
                </div>'
            ],

            (object)[
                'title' => 'Faastmmori now on ShopRite!',
                'cover_image' => 'news/news-ci-2.jpg',
                'body' => '<p>Customers at ShopRite can now enjoy the delicious taste of our high-quality packaged corn dough products for their traditional Ghanaian corn-meal porridge, Koko, and corn+cassava dough for the traditional Ghanaian dish Banku, as they have been added to the store&apos;s shelves. Here&apos;s what you need to know about this exciting news:</p>
                <p><br></p>
                <h3>Increased Access</h3>
                <p>With the addition of faastmmori products to ShopRite&apos;s inventory, customers now have increased access to these authentic and delicious products. This also provides an opportunity to introduce our brand to a wider audience, potentially leading to increased sales and brand recognition.</p>
                <p><br></p>
                <h3>High-Quality Standards</h3>
                <p>ShopRite is known for its commitment to high-quality products, and faastmmori products are no exception. The store&apos;s strict standards ensure that customers are receiving only the best products, which aligns perfectly with your own commitment to quality and authenticity.</p>
                <p><br></p>
                <h3>More Convenience</h3>
                <p>Having them available at ShopRite provides added convenience for customers who already love our products. They can now easily purchase our products while doing their regular grocery shopping, eliminating the need to go to a separate store or market.</p>
                <p><br></p>
                <p>Overall, this is great news for faastmmori and corn dough lovers. With increased access, high-quality standards, and added convenience, the availability of your products at ShopRite is sure to be a success.</p>
                <div style="float: left; width: 50%; padding: 5px">
                <img src="https://lh5.googleusercontent.com/irbZVY48Eajeb3SEARDnqQloxpWO_646yCfuKlxSAqhKDi0xwafNdIKVF6pWtBl_0Ks=w2400" alt="" style="width:100%; border-radius:3px">
                </div>
                <div style="float: left; width: 50%; padding: 5px">
                <img src="https://lh6.googleusercontent.com/zdkAVBz8TS9siWKVzyUqiAymenkpinWNy-x1pNM-BdyF3dAlXMSz1Uts51SkfBN3VnA=w2400" alt="" style="width:100%; border-radius:3px">
                </div>'
            ],
            (object)[
                'title' => 'The Elephant in the Room — The Case for Maize',
                'cover_image' => 'news/news-ci-3.jpg',
                'body' => '<q>Ghana, our beloved country, is free forever.</q><br/>

                <p>
                    These words, spoken by our first president at the dawn of our independence, have echoed in the hearts of every
                    Ghanaian for the sixty-two years that we have been a free and independent state. As memorable as these words
                    have been, they also beg the emotional and difficult question of what it means to be free—as a country, and as
                    citizens.</p><br/>
                <p>
                    Just as a country can only be as strong as its citizens, a citizen can only be as free as her economic
                    circumstances allow. And for a lot of our fellow citizens, there is nothing more indicative of our economic
                    freedom than the single activity—maize farming—more than a million Ghanaians engage in it and it supplies the
                    highest percentage of our annual calorie intake. For the income it provides to millions of our fellow citizens,
                    and the energy it provides us to go about our daily lives, maize is the elephant in the room.</p><br/>
                <p>
                    Getting past the awkwardness of maize farming as an indicator of our economic freedom, we arrive at many
                    observations resembling and relevant to our broader country. And getting a handle on
                    improving the productivity of maize farming portends fundamental and sustainable ideas for improving our broader
                    economy.</p><br/>
                <p>
                    Would you be surprised to learn that Ghana has more maize farmers than the United States, yet matches less than
                    one percent of their maize output? Some dismiss this comparison with the easy answer that many of our maize
                    farmers are casual and subsistent, without acknowledging that the subsistence nature of our maize farming is
                    symptomatic of our broader problems. Our farmers are not casual and subsistence by choice—they are as a matter
                    of urgent necessity.</p><br/>
                <p>
                    For the past nine years, I have been involved in the primary and secondary processing of maize, with an approach
                    reflective of my analytical background in management consulting and engineering.</p><br/>
                <p>
                    The starting point of any analysis of the maize sector is to admit that the 15% year-to-year increase in total
                    production in 2017 is a strong positive and substantially attributable to the Planting for Food and Jobs program
                    of the present government. Despite this important achievement, significant work remains.</p><br/>
                <p>
                    A crop budget analysis of a typical Ghanaian and American maize farm shows that our productivity deficit is not
                    an accident of history, but the result of a deliberate choice of misguided policies spanning decades.</p><br/>
                <p>
                    With a proliferation of poor seeds (mostly grains masqueraded as seeds) in part because of a lax regulatory
                    environment for local seeds, we shouldn’t be surprised when our farmers often take a dim view on seeds and
                    invest less than 10% of what an American farmer does in seeds.</p><br/>
                <p> The benefits of good seeds are so overwhelming that we need not spare any effort in driving awareness and
                    adoption of improved seed technologies. Demonstration fields for improved seeds should proliferate in our farming
                    communities, and if possible, improved seeds should be made mandatory for all beneficiaries of the government
                    subsidy program for agricultural inputs.</p><br/>
                <p>The difficulties of our seed market are further compounded for farmers by a frustrating certification process for
                    imported improved seeds. Because our seed companies often lack the substantial resources needed for rigorous
                    seed research and development, we should leverage the expertise and resources of capable
                    international seed companies as much as possible.</p><br/>
                <p> For most economic activities to be sustainable, scale is a decisive factor. With average farm sizes of about 5
                    acres, less than 2% of American farms, most Ghanaian farms are too small to be economically viable. This is
                    where the preponderance of labor in our crop budget is a direct inhibitor to our economic growth—there is only
                    so much we can do with our manpower. The heart of any farm mechanization is the tractor, and the recent
                    government policy to ease the requirements for tractor operator licenses is a huge relief to many young people
                    eager to earn a living as operators. To lower the total cost of tractors, all fees, duties, and tariffs
                    associated with the importation of tractors should be eliminated. To ensure equitable access to tractor
                    services, misguided and chauvinistic practices that give preference to tractor services for men over women, who
                    are more than half of all smallholder farmers, should be discouraged. As important as mechanization and seeds
                    are, they are insufficient for the total transformation of the maize sector. An integrated and comprehensive
                    farm-to-table approach is needed to truly unlock the enormous potential of maize to better our lives.</p><br/>
                <p> Over the past three years, in partnership with the USAID Ghana Mission on Improving the Productivity and Income
                    of Maize Farmers in the SADA Zone, I have had the opportunity to test out a comprehensive integrated value chain
                    approach, and the results, though provisional, are encouraging. In partnership with USAID/Ghana, Sahel
                    Grains, a wholly Ghanaian company has trained more than five thousand farmers in good agronomic practices and
                    provided the full suite of upstream on-field mechanized services to many of them. The farmers have increased
                    their farm sizes by 25.2%; we have improved gender access to mechanization by having tractors solely dedicated
                    to women farmers; yields and incomes of the farmers have increased by 3.3% and 12.4% respectively.</p><br/>
                <p>
                    To make these gains enduring and sustainable, we have learned that it helps to provide market access with firm
                    demand backstops linked to quality. Maize is familiar to all Ghanaians, but what is not nearly as familiar is
                    that the maize in our open market does not meet the health and safety standards set by our accredited regulatory
                    agencies. Aflatoxin is a substance present in maize that promotes the formation of cancer cells. It is so toxic
                    that roasting maize at 180 degrees Celsius is unable to totally eliminate it. It is the most persistent grain
                    quality problem in our country. We have worked with our partner farmers on appropriate practices to reduce the
                    incidence of aflatoxin, and have additionally invested in very modern primary processing equipment to further
                    sort and clean the maize to meet the highest quality standards anywhere in the world. Because market access
                    requires storage, the USAID-Sahel Grains partnership is putting up one of the largest grain silo installations
                    in the country.</p><br/>
                <p> The results of our grain quality program have been so spectacular that it meets the highest and most stringent
                    aflatoxin parameters in the world—the European standard. Nestle, a European company, uses this stringent
                    standard in all its grain-based products, and we are happy to count them as a customer of our maize. By working
                    together and adopting a comprehensive value chain approach, we have reduced the need for Nestle to import maize
                    and substituted that with our own locally produced maize. Because we want the health benefits of aflatoxin-free
                    maize to reach as many Ghanaians as possible, we are using this same high-quality maize to produce our local
                    traditional fermented corn dough that is used in the preparation of koko and banku.</p><br/>
                <p>
                    In addition to the benefits of the aflatoxin-free maize, we have included additional health benefits in using
                    treated water for all aspects of our milling operation and using food-grade attrition plates to reduce the
                    incidence of broken metal particles in our food. Crucial to infant nutrition, the smooth-milled nature of the
                    dough doesn’t require sieving to achieve the smoothness of the prepared koko, allowing access to all the available
                    nutrients in the maize.</p><br/>
                <p> It is heartening to see the great enthusiasm with which Ghanaians are welcoming the new emphasis on health and
                    safety in our traditional foods, with ShopRite, MaxMart, and Opoku Trading (Kumasi), and other leading
                    supermarkets stocking it. Our country’s leading restaurant for and West African foods, The Buka Restaurant, has
                    also adopted it as their dough for the preparation of the banku that they serve their customers.</p><br/>
                <p>It is helpful to recall the jubilation that greeted the discovery of commercial quantities of oil in Ghana about
                    a decade ago. The annual output gap of maize given our current acreage under cultivation is about USD 1.7
                    billion–contributing three times what we get from oil to our hard currency position. There is something
                    powerful and profoundly beneficial to our country, and it is right in our face – the elephant in the room. The
                    question is whether we can pursue it with the same zeal and energy as we pursued oil exploration.</p><br/>
                <div style="float: left; max-width: 50%; padding: 5px">
                    <img src="https://lh5.googleusercontent.com/IZkF7GSUqzmvvwUvI_BH1Vksw-XSdFlgob5wMxD6kBH13xhlFS6MBoOzfV2TkeqayIE=w2400"
                        alt="" style="width:100%; border-radius:3px">
                    <p style="font-size:10px">USAID/Ghana Mission Director visiting Sahel Grains</p><br/>
                </div>
                <div style="float: left; max-width: 50%; padding: 5px">
                    <img src="https://lh3.googleusercontent.com/5Z4qH5RVmRpECYzIJGFYt8g7_SP8jgZFBKvqvvI3rDnZxrVju-HG1JSdHMPNRYXvCB0=w2400"
                        alt="" style="width:100%; border-radius:3px">
                </div>'
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
