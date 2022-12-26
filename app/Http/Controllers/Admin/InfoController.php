<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Info\StoreRequest;
use App\Http\Requests\Info\UpdateRequest;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    public function store(StoreRequest $request)
    {
        $this->authorize('create', Info::class);

        $data = $request->validated();
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            $data['image'] = Storage::putFile('public/users/images', $image, 'public');
            $data['image'] = str_replace('public/', '', $data['image']);
        }
        $data['user_id'] = auth()->id();
        if (array_key_exists('ph_numbers', $data)) {
            $data['ph_number'] = implode(",", $data['ph_numbers']);
        }
        $info = Info::create($data);

        if ($info) {
            return back()->with('success', 'Successfully Created!!!');
        }

        return back()->with('Something Wrong!!!');
    }

    public function update(UpdateRequest $request, $id)
    {
        $info = Info::findOrFail($id);
        $this->authorize('update', $info);

        $data = $request->validated();
        if (array_key_exists('ph_numbers', $data)) {
            $data['ph_number'] = implode(",", $data['ph_numbers']);
        }
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $image_name = time() . '.' . $image->extension();
            // $image = Image::make($request->file('photo'))
            //     ->resize(120, 120, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            $data['image'] = Storage::putFile('public/users/images', $image, 'public');
            $data['image'] = str_replace('public/', '', $data['image']);

            Storage::delete('public/'.$info->image);
        } else {
            $data['image'] = $info->image;
        }
        $info->update([
            'title' => $data['title'],
            'user_id' => auth()->id(),
            'image' => $data['image'],
            'description' => $data['description'],
            'full_name' => $data['full_name'],
            'age' => $data['age'],
            'ph_number' => $data['ph_number'],
            'address' => $data['address']
        ]);

        return back()->with('success', 'Successfully Updated!!!');
    }
}
