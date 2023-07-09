<?php
    
    namespace Database\Factories;
    
    use App\Models\Model;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;
    
    /**
     * @extends Factory<Model>
     */
    class PostBlogFactory extends Factory
    {
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            $title = fake()->realText( 50 );
            return [
                'title' => $title,
                'slug' => Str::slug( $title ),
                'thumbnail' => fake()->imageUrl,
                'body' => fake()->realText( 5000 ),
                'active' => fake()->boolean,
                'published_at' => fake()->dateTime,
                'user_id' => 1
            ];
        }
    }
