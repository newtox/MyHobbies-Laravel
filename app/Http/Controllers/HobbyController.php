<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Http\Requests\StoreHobbyRequest;
use App\Http\Requests\UpdateHobbyRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
        // $hobbies = Hobby::all();
        // $hobbies = Hobby::query()->paginate(10);
        $hobbies = Hobby::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('hobby.index')->with('hobbies', $hobbies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHobbyRequest $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'min:3', 'max:255', 'regex:/^[\w\s\-]+$/'],
                'beschreibung' => ['required', 'string', 'min:5', 'max:255', 'regex:/^[\w\s\-]+$/'],
            ]
        );

        $hobby = new Hobby(
            [
                'name' => $request->get('name'),
                'beschreibung' => $request->get('beschreibung'),
                'user_id' => auth()->id()
            ]
        );

        $hobby->save();

        return redirect()->route('hobby.index')->with([
            'create_update_delete' => 'Das Hobby <b>' . $hobby->name . '</b> wurde erfolgreich erstellt.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hobby $hobby): View|Factory|Application
    {
        $allTags = Tag::all();
        $usedTags = $hobby->tags;
        $availableTags = $allTags->diff($usedTags);

        $create_update_delete = Session::get('create_update_delete');

        return view('hobby.show')->with([
            'hobby' => $hobby,
            'create_update_delete' => $create_update_delete,
            'usedTags' => $usedTags,
            'availableTags' => $availableTags,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hobby $hobby): View|Factory|Application
    {
        return view('hobby.edit')->with('hobby', $hobby);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHobbyRequest $request, Hobby $hobby): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'min:3', 'max:255'],
                'beschreibung' => ['required', 'string', 'min:5', 'max:255'],
            ]
        );

        $hobby->update([
            'name' => $request->get('name'),
            'beschreibung' => $request->get('beschreibung')
        ]);

        return redirect()->route('hobby.index')->with([
            'create_update_delete' => 'Das Hobby <b>' . $request->name . '</b> wurde erfolgreich bearbeitet.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hobby $hobby): RedirectResponse
    {
        $old_name = $hobby->name;

        $hobby->delete();

        return redirect()->route('hobby.index')->with([
            'create_update_delete' => 'Das Hobby <b>' . $old_name . '</b> wurde erfolgreich gelöscht.'
        ]);
    }
}
