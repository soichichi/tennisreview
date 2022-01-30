<?php

namespace App\Http\Controllers;

use App\Review;
use App\Http\Requests\ReviewRequest; 
use App\Maker;

class ReviewController extends Controller
{
    //
    public function maker(Review $review)
    {
        return view('reviews/maker');
    }
    public function index(Maker $maker)
    {
        return view('makers/index')->with(['reviews' => $maker->getByMaker()]);  
    }
    
    public function show(Review $review)
    {
        return view('reviews/show')->with(['review' => $review]);
    }
    public function create(Maker $maker)
    {
        return view('reviews/create')->with(['makers' => $maker->get()]);
    }
    public function store(ReviewRequest $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews');
    }
}
