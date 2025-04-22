<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name' => 'John Doe',
            'content' => 'This is a testimonial about the amazing work done by this person. Highly recommended!',
            'designation' => 'Software Engineer',
            'company' => 'Tech Corp',
            'image' => 'https://via.placeholder.com/150',
        ]);

        Testimonial::create([
            'name' => 'Jane Smith',
            'content' => 'A highly skilled and professional individual. Delivered top-notch results every time.',
            'designation' => 'Project Manager',
            'company' => 'Web Solutions',
            'image' => 'https://via.placeholder.com/150',
        ]);
    }
}
