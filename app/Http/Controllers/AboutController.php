<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;


class AboutController extends Controller
{
     /* 
     * Display a listing of the resource(about).
     */
     public function index()
     {
         $aboutInfo = About::where('userId', auth()->id())->get();
         $user = auth()->user();
         return view('user-dashboard.about', compact('aboutInfo', 'user'));
     }
 
     /* 
     *  Show the form for creating a new resource(about).
     */
     public function create()
     {
         return view('user-dashboard.add-about');
     }
 
    /* 
     *  Store a newly created resource(about) in storage.
     */
     public function store(Request $request)
     {
        $userId = auth()->id();
        $filename = null; 

        // Store the file
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($file);
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename);
        }

        About::create([
            'userId' => $userId,
            'profile' => $request->input('profile'),
            'phone' => $request->input('phone'),
            'image' => $filename,
            'about' => $request->input('about'),
            'address' => $request->input('address'),
            'xId' => $request->input('twitterId'),
            'facebookId' => $request->input('facebookId'),
            'linkedInId' => $request->input('linkedInId'),
            'githubId' => $request->input('githubId'),
        ]);
 
        //  About::create($request->all());
         return redirect()->route('about.index')->with('success', 'Record created successfully.');
     }

     
    /* 
     *  Update a newly created resource(about) in storage.
     */
    public function update(Request $request, $id)
    {
        // Step 4: Find the record to update
        $about = About::findOrFail($id);
        // Handle file upload (optional)
        $filename = null; 

        // Store the file
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads', $filename);
        } else {
            $filename = $about->image; // Retain the old image if no new one is uploaded
        }

        // Step 5: Update the record
        $about->update([
            'profile' => $request->profile,
            'phone' => $request->phone,
            'image' => $filename, 
            'about' => $request->about, 
            'address' => $request->address, 
            'xId' => $request->xId, 
            'facebookId' => $request->facebookId, 
            'instagramId' => $request->instagramId, 
            'linkedInId' => $request->linkedInId, 
            'githubId' => $request->githubId, 
        ]);

        // Step 6: Return a response
        return response()->json([
            'message' => 'About updated successfully!',
            'about' => $about
        ], 200);    
    }
}
