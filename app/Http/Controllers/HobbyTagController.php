<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

class HobbyTagController extends Controller
{
    public function getFilteredHobbies($tag_id): View|Factory|Application
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

    public function attachTag($hobby_id, $tag_id): RedirectResponse
    {
        $hobby = Hobby::query()->find($hobby_id);
        $hobby->tags()->attach($tag_id);

        $tag = Tag::query()->find($tag_id);

        return back()->with([
            'create_update_delete' => 'Das Tag <b>' . $tag->name . '</b> wurde erfolgreich hinzugefügt.'
        ]);
    }

    public function detachTag($hobby_id, $tag_id): RedirectResponse
    {
        $hobby = Hobby::query()->find($hobby_id);
        $hobby->tags()->detach($tag_id);

        $tag = Tag::query()->find($tag_id);

        return back()->with([
            'create_update_delete' => 'Das Tag <b>' . $tag->name . '</b> wurde erfolgreich entfernt.'
        ]);
    }
}
