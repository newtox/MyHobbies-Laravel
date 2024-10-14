<?php

namespace Database\Seeders;

use App\Models\Hobby;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Random\RandomException;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws RandomException
     */
    public function run(): void
    {
        User::factory()->count(500)->create()->each(function ($user) {
            Hobby::factory()->count(random_int(1, 10))->create(['user_id' => $user->id])->each(function ($hobby) use ($user) {
                $tag_ids = range(1, 8);
                shuffle($tag_ids);

                // Method to insert a user with only one tag for each hobby.
                if ($hobby->id) {
                    DB::table('hobby_tag')->insert([
                       'hobby_id' => $hobby->id,
                       'tag_id' => $tag_ids[0],
                       'created_at' => now(),
                       'updated_at' => now(),
                    ]);
                }

                // Method to insert a user with different amount of tags for each hobby.
/*                $relation = array_slice($tag_ids, 0, random_int(0, 8));

                foreach ($relation as $tagId) {
                    if ($hobby->id) {
                        DB::table('hobby_tag')->insert([
                            'hobby_id' => $hobby->id,
                            'tag_id' => $tagId,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }*/
            });
        });

    }
}
