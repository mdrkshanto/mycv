<?php

namespace App\Http\Controllers;

use App\Models\UserBasic;
use App\Models\UserSML;
use Illuminate\Http\Request;

class UserBasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backEnd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userBasic = new UserBasic();
        $userBasic->userId = $request->userId;
        $userBasic->fullName = $request->fullName;
        $userBasic->dob = $request->dob;
        $userBasic->country = $request->country;
        $userBasic->phone = $request->phone;
        $userBasic->status = $request->status;
        $userBasic->save();


        foreach ($request->medias as $medias) {
            $userSml = new UserSML();
            $userSml->userBasicId = $userBasic->id;
            $userSml->mediaName = $medias["name"];
            $userSml->mediaLinks = $medias["link"];
            $userSml->save();
        }
        // return $request->data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("backEnd");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view("backEnd");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
