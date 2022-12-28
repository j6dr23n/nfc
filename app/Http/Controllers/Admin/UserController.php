<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('info')->latest()->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);

        return view('admin.users.create');
    }

    public function bulk_create()
    {
        $this->authorize('create', User::class);

        return view('admin.users.bulk_create');
    }

    public function bulk_create_store(Request $request)
    {
        $this->authorize('create', User::class);

        $status = User::factory()->count($request->total)->create();

        return back()->with('success', 'Successfully Created!!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->authorize('create', User::class);

        $data = $request->validated();
        DB::beginTransaction();

        try {
            User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);
            DB::commit();
        } catch(Exception $e) {
            DB::rollback();

            return back()->with('error', 'Something Wrong!!!');
        }

        return back()->with('success', 'Successfully Created!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('info')->findOrFail($id);
        $this->authorize('update', $user);

        return view('admin.users.edit', compact('user'));
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
        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($request->password !== null) {
            $data = $request->validate([
                'username' => 'required|string',
                'email' => 'required|email',
                'current_password' => 'nullable|min:6',
                'password' => 'nullable|confirmed|min:6',
            ]);
        }
        $user = User::findOrFail($id);
        $this->authorize('update', $user);

        if (! array_key_exists('current_password', $data)) {
            $user->update([
                'username' => $data['username'],
                'email' => $data['email'],
            ]);

            return back()->with('success', 'Account Updated!!!');
        }

        if (array_key_exists('current_password', $data) && Hash::check($data['current_password'], $user->password)) {
            $user->update([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);
        } else {
            return back()->with('error', 'Password does not match!!!');
        }

        return back()->with('success', 'Account Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('delete', $user);

        $user->delete();

        return back()->with('success', 'Successfully Deleted!!!');
    }
}
