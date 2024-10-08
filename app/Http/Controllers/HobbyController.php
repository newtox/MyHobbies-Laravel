<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use App\Http\Requests\StoreHobbyRequest;
use App\Http\Requests\UpdateHobbyRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
        $hobbies = Hobby::all();
        return view('hobby.index')->with('hobbies', $hobbies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHobbyRequest $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'min:3', 'max:255'],
                'beschreibung' => ['required', 'string', 'min:5', 'max:255'],
            ]
        );

        $hobby = new Hobby(
            [
                'name' => $request->get('name'),
                'beschreibung' => $request->get('beschreibung')
            ]
        );

        $hobby->save();

        return $this->index()->with([
            'hobby_created' => 'Das Hobby <b>' . $hobby->name . '</b> wurde erfolgreich erstellt.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hobby $hobby): View|Factory|Application
    {
        return view('hobby.show')->with('hobby', $hobby);
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
    public function update(UpdateHobbyRequest $request, Hobby $hobby)
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

        return $this->index()->with([
            'hobby_created' => 'Das Hobby <b>' . $request->name . '</b> wurde erfolgreich bearbeitet.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hobby $hobby)
    {
        $old_name = $hobby->name;

        $hobby->delete();

        return $this->index()->with([
            'hobby_created' => 'Das Hobby <b>' . $old_name . '</b> wurde erfolgreich gelöscht.'
        ]);
    }
}
