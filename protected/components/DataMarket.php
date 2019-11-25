<?php
/*
 * sort order
 * By Deory Pandu
 */
class DataMarket {

    public static function nex_resource($names=array())
    {
        
        $data = [
                    [
                        'name_category'=>'Beverage',
                        'picture'=>['ill-beverage.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Water',
                                            'picture'=>['water.jpg'],
                                            'info'=>'<p>A cornerstone of the beverage market, we’ll work with you to create lightweight and sustainable packaging solutions to keep shipping costs low and consumer satisfaction high.</p>',
                                        ],
                                        [
                                            'names'=>'Carbonates & Juices',
                                            'picture'=>['carbonated.jpg'],
                                            'info'=>'<p>Our design and manufacturing expertise allows us to constantly create new, innovative, and eye-catching packaging solutions that will set your product apart from the competition.</p>',
                                        ],
                                        [
                                            'names'=>'Coffee & Tea',
                                            'picture'=>['tea-coffee.jpg'],
                                            'info'=>'<p>We have a variety of packaging capabilities in RTD tea and coffee, from traditional bottle and pouch packaging to k-cups.</p>',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Healthcare',
                        'picture'=>['ill-healthcare.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Pharmaceutical',
                                            'picture'=>['pharmaceutical.jpg'],
                                            'info'=>'<p>We are proud to be a global leader in packaging. Our pharmaceutical packaging expertise spans the full range of drug delivery routes. From child-resistant and senior-friendly closures to user-independent droppers, we can also develop custom packaging solutions to fit your specific needs.</p>',
                                        ],
                                        [
                                            'names'=>'Surgical Needs',
                                            'picture'=>['surgical.jpg'],
                                            'info'=>'<p>Our surgical product offerings are second to none and offer manufacturers the ability to address the highest levels of infection prevention, including AAMI 4 level. Our solutions for the surgical suite include: adhesive tapes, films, breathable and non-breathable laminations, and absorbent and barrier nonwoven fabrics.</p>',
                                        ],
                                        [
                                            'names'=>'Disinfecting Wipes',
                                            'picture'=>['disinfecting-wipes.jpg'],
                                            'info'=>'<p>The increasing rate of hospital acquired infections is a worry to us all. We are fighting back with a wipes product range that supports disinfectants and their required contact times with supporting materials that medical professionals can trust.</p>',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Household',
                        'picture'=>['ill-households.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Laundry',
                                            'picture'=>['laundry.jpg'],
                                            'info'=>'',
                                        ],
                                        [
                                            'names'=>'Cleaning Products',
                                            'picture'=>['cleaning-products.jpg'],
                                            'info'=>'',
                                        ],
                                        [
                                            'names'=>'Gardening',
                                            'picture'=>['gardening.jpg'],
                                            'info'=>'',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Agriculture',
                        'picture'=>['ill-agriculture.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Greenhouse Film',
                                            'picture'=>['greenhouse.jpg'],
                                            'info'=>'<p>Surya Sukses Group can help produce an effective and efficient greener green house with plastic green house wrap that is economics and bring lower environment impact.</p>',
                                        ],
                                        [
                                            'names'=>'Mulch Film',
                                            'picture'=>['munch-film.jpg'],
                                            'info'=>'<p>Agriculture technology are now vast and way more advanced as time goes by. A field with plastic mulch film coverage will help plants grow protected and healthy. </p>',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Industrial',
                        'picture'=>['ill-industrial.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Industrial Wipes',
                                            'picture'=>['industrial-wipes.jpg'],
                                            'info'=>'<p>Our spunbond product solutions support general purpose industrial cleaning needs and specialized tasks in every stage of the automotive and other technical manufacturing process. </p>',
                                        ],
                                        [
                                            'names'=>'Industrial protectors & cover',
                                            'picture'=>['industrial-protector-covers.jpg'],
                                            'info'=>'<p>Our spunbond polypropylene fabrics can be applied in many automotive and other machinery manufacturing components, such as product covers or packaging / bag, secondary carpet backing, headliners, acoustic scrims, and adhesive layers. </p>',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Filtration',
                        'picture'=>['ill-filtration.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Air Filtration',
                                            'picture'=>['air-filtration.jpg'],
                                            'info'=>'<p>Surya Sukses Group’s meltblown materials serve a wide variety of air applications from room air purifier to facemasks to cabin air filtration. </p>',
                                        ],
                                        [
                                            'names'=>'Liquid Filtration',
                                            'picture'=>['liquid-filtration.jpg'],
                                            'info'=>'<p>Surya Sukses Group’s spunbond materials are suitable for filter manufacturers factory for their high strength, uniformity, and cleanliness in pleated filter cartridges.  The polypropylene materials allows for a wide range of temperature and chemical compatibility.</p>',
                                        ]
                                   ],
                    ],
                    [
                        'name_category'=>'Building & Construction',
                        'picture'=>['ill-building.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'Geo Textiles',
                                            'picture'=>['geotextile.jpg'],
                                            'info'=>'<p>Surya Sukses Group’s geotextile products will help solve problems for construction and landscaping professionals. It is economic but very useful. Geotextile made from polypropylene spundbond will bring stabilization, landscaping, ground and grass reinforcement, and erosion control.</p>',
                                        ],
                                        [
                                            'names'=>'Building wraps and roofing under layer',
                                            'picture'=>['building-wraps.jpg'],
                                            'info'=>'<p>Surya Sukses Group’s spunbond materials can be used as an insulation for  energy efficient building, and it can serve as roofing underlay too. Our product is resistant to climate and weather, and it does not stretch or warp</p>',
                                        ]
                                   ],
                    ],
                ];

        return $data;
    }

}
