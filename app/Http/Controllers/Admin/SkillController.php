<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\StoreRequest;
use App\Http\Requests\Skill\UpdateRequest;
use App\Models\Skill;
use App\Models\Social;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Skill::class);
        $icons = Social::whereNull('url')->get();

        return view('admin.skills.create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->authorize('create', Skill::class);

        $data = $request->validated();

        foreach ($data['skills'] as $key => $value) {
            $value['user_id'] = auth()->id();
            Skill::create($value);
        }

        return redirect(route('dashboard.profile'))->with('success', 'Successfully Created!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        $this->authorize('update', $skill);

        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $skill = Skill::findOrFail($id);
        $this->authorize('update', $skill);

        $skill->fill($data)->save();

        return redirect(route('dashboard.profile'))->with('success', 'Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $this->authorize('delete', $skill);

        $skill->delete();

        return back()->with('success', 'Skill deleted!!!');
    }
}
