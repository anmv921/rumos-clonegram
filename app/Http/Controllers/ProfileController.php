<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("")
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view("profile.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        // dd($request);

        // unlink();

        $data = request()->validate([
            "description" => ["required", "max:255"],
            "website" => ["required", "max:255", "url"],
            "picture" => ["image"]
        ]);

        $imagePath = auth()->user()->profile->picture;

        if(!empty($data["picture"])) {
            $imagePath = "/storage/" . request("picture")->store("profiles", "public");
        }

        auth()->user()->profile()->update([
            "description" => $data["description"],
            "website" => $data["website"],
            "picture" => $imagePath
        ]);

        return redirect( route("home") );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
