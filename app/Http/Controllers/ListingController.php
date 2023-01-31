<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ListingController extends Controller
{
    public function index(){
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }

    public function create(){
        return view('listings.create');
    }


    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'make' => 'required',
            'model' => 'required',
            'date' => 'required',
            'price' => 'required',
            'note' => 'required'
        ]);

        Listing::create($formFields);
        return redirect('/');
    }

    public function edit(Listing $listing){
        return view('listings.edit', ['listing' =>$listing]);
    }

    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'make' => 'required',
            'model' => 'required',
            'date' => 'required',
            'price' => 'required',
            'note' => 'required'
        ]);

        $listing->update($formFields);
        return redirect('/');
    }

    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/');
    }


}
