<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Sport' => 'primary',
            'Entspannung' => 'secondary',
            'Fun' => 'warning',
            'Natur' => 'success',
            'Inspiration' => 'light',
            'Freunde' => 'info',
            'Liebe' => 'danger',
            'Interesse' => 'dark'
        ];

        foreach ($tags as $tag => $style) {
            $tag = new Tag(
                [
                    'name' => $tag,
                    'style' => $style
                ]
            );

            $tag->save();
        }
    }
}
