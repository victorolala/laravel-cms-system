<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {

        
        return [
            'user_id'=>factory(class:'App\User'),
            'title'=>$facker->sentence,
            'post_image'=>$facker->imageUrl(width:'900', height:'300'),
            'body'=>$facker->paragraph
        ];
    }
}
