<?php

namespace Database\Factories;

use App\Models\Like;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    protected $model = Like::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'likeable_id' => Post::factory(),
            'likeable_type' => Post::class,
        ];
    }
}
