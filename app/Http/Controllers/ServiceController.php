<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /* 
     * Display a listing of the resource(service).
     */
    public function index()
    {
        // $aboutInfo = About::where('userId', auth()->id())->get();
        // $user = auth()->user();
        return view('user-dashboard.service');
    }

    /* 
    *  Show the form for creating a new resource(service).
    */
    public function create()
    {
        return view('user-dashboard.add-service');
    }
}
