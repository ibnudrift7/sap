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
                        'name_category'=>'packaging',
                        'picture'=>['product1.jpg','product1.jpg','product1.jpg'],
                        'desc'=>'',
                        'lists' => [
                                        [
                                            'names'=>'preform',
                                            'picture'=>['product1.jpg','product1.jpg'],
                                            'info'=>'<p>Our PET preform infrastructure and machineries are one of the broadest in the industry and our large manufacturing footprint allows us to provide excellent service to our customers.</p>',
                                        ],
                                   ],
                    ]
                ],

        return $data,
    }