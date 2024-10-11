<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
        $tags = Tag::all();
        return view('tag.index')->with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return view('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string'],
                'style' => ['required', 'string'],
            ]
        );

        $tag = new Tag(
            [
                'name' => $request->get('name'),
                'style' => $request->get('style'),
            ]
        );

        $tag->save();

        return redirect()->route('tag.index')->with([
            'create_update_delete' => 'Das Tag <b>' . $tag->name . '</b> wurde erfolgreich erstellt.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag): View|Factory|Application
    {
        return view('tag.edit')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $request->validate(
            [
                'name' => ['required', 'string'],
                'style' => ['required', 'string'],
            ]
        );

        $tag->update([
            'name' => $request->get('name'),
            'style' => $request->get('style')
        ]);

        return redirect()->route('tag.index')->with([
            'create_update_delete' => 'Das Tag <b>' . $request->name . '</b> wurde erfolgreich bearbeitet.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $old_name = $tag->name;

        $tag->delete();

        return redirect()->route('tag.index')->with([
            'create_update_delete' => 'Das Tag <b>' . $old_name . '</b> wurde erfolgreich gelöscht.'
        ]);
    }
}
