<?php
 /*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Cinemon
| Fb Fanspage     : G-Movie Vhttps://www.facebook.com/CpaLandingPages?mibextid=ZbWKwL
| -------------------------------------------------------------------------------
*/


return [
    'tmdb_key' => '892b7c8469f251441be840cf2aeb9d74', // (optional) Replace with your own fire key
    'is_cache' => true, // false or true
    'cache_exp' => 3600, // seconds
    'default_lang' => 'en', // Available lang please check in dir /lang filename


    'max_limit_page_sitemap' => 5, // Specify the number of pages from the TMDB datasource (each page has 20 items)

    'block_id' => [], //ex: [12343, 456344, 56756, 234234]

    'split_offer' => [
        // defaults offer
        [
            'code_country' => [], // empty to all country
            'url_offer' => "https://trk.allsportspass.club/19d02b67-b631-4d84-9773-76a9fd21d936"
        ]
        // , [
        //     'code_country' => ['en', 'sg'],
        //     'url_offer' => "//www.google.com/search?q=G-Silvers+Landing+Page"
        // ]
    ],
    'theme' => [
        'primary-color' => "#00A2E9",
        'button-tab-text-color' => "#000000",
        'bg-fake' => "#00A2E9",
        'color-fake' => "#000000"
    ]
];