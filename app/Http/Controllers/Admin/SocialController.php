<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social\StoreRequest;
use App\Http\Requests\Social\UpdateRequest;
use App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.socials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons = Social::whereNull('url')->get();
        $this->authorize('create', Social::class);

        return view('admin.socials.create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->authorize('create', Social::class);

        $data = $request->validated();
        foreach ($data['socials'] as $key => $value) {
            if (array_key_exists('logo', $value)) {
                $value['user_id'] = auth()->id();
                Social::create($value);
            } else {
                $icon = Social::whereNull('url')->where('title', $value['title'])->firstOrFail();
                $value['logo'] = $icon->logo;
                $value['user_id'] = auth()->id();
                Social::create($value);
            }
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
        $social = Social::findOrFail($id);
        $this->authorize('update', $social);

        $icons = Social::whereNull('url')->get();

        return view('admin.socials.edit', compact('social', 'icons'));
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
        $social = Social::findOrFail($id);
        $this->authorize('update', $social);

        $data = $request->validated();
        if (array_key_exists('logo', $data) === null) {
            $icon = Social::whereNull('url')->where('title', $data['title'])->firstOrFail();
            $data['logo'] = $icon->logo;
        }

        $social->fill($data)->save();

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
        $social = Social::findOrFail($id);
        $this->authorize('delete', $social);

        $social->delete();

        return back()->with('success', 'Skill deleted!!!');
    }
}
