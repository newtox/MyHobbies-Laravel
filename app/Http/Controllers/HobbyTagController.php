<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class HobbyTagController extends Controller
{
    public function getFilteredHobbies($tag_id)
    {
        // echo "Filtern nach tag Id: " . $tag_id;
        $tag = new Tag();

        $filter = $tag::query()->findOrFail($tag_id);

        $filteredHobbies = $filter->filteredHobbies()->paginate(10);

        return view('hobby.filteredByTag')->with(
            [
                'hobbies' => $filteredHobbies,
                'tag' => $filter,
            ]
        );
    }
}
