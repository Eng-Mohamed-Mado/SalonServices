<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class TwoFactorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('auth.verify-otp');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Get User Send Code
        $user = auth()->user();
        // Check Request == Code In Database
        if($request->code == $user->code)
        {
            // Run Function Reset Code Is Successfully
            $user->resetCode();
            // Status Successfully
            return redirect()->route('dashboard');
        }
        // Status Error
        return redirect()->back()->withErrors(['code'=>'Error Code OTP']);



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
