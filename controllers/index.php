<?php
        // $books = [
        //     [
        //         'name' => 'Do Androids Dream of Electric Sheep',
        //         'author' => 'Philip K. Dick',
        //         'releaseYear' => 1968,
        //         'purchaseUrl' => 'http://example.com'
        //     ],
        //     [
        //         'name' => 'Project Hail Mary',
        //         'author' => 'Andy Weir',
        //         'releaseYear' => 2021,
        //         'purchaseUrl' => 'http://example.com'
        //     ]
        //     ];
        //     function filter($items, $fn){
        //         $filteredItems = [];
        //         foreach($items as $item){
        //             if($fn($item)){
        //                 $filteredItems[] = $item;
        //             }
        //         }
        //         return $filteredItems;
        //     }
        //     $filteredBooks = filter($books, function($book){
        //         return $book['releaseYear'] >= 1950;
        //     });


$heading = 'Home';

// echo basename($_SERVER['SCRIPT_NAME']);

require "views/index.view.php";
    