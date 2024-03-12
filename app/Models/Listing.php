<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus aliquid esse molestiae rem ipsa eius facere consequatur rerum! Cumque tempora maxime dicta voluptatem perferendis ad numquam blanditiis quas adipisci ea?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus aliquid esse molestiae rem ipsa eius facere consequatur rerum! Cumque tempora maxime dicta voluptatem perferendis ad numquam blanditiis quas adipisci ea?'
            ]
        ];
    }
    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] ==$id){
                return $listing;
            }
        }
    }
}
