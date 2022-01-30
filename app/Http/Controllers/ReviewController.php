<?php

namespace App\Http\Controllers;

use App\Review;
use App\Http\Requests\ReviewRequest;
use App\Maker;

class ReviewController extends Controller
{
    //
    public function maker()
    {
        return view('reviews/maker');
    }
    
    public function index(Review $review)
    {
        return view('reviews/index')->with(['reviews' => $review->getPaginateByLimit()]);  
    }
    /*
 * 引数の$reviewはid=1のreviewインスタンス
 */
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
    
    public function edit(Review $review, Maker $maker)
    {
        return view('reviews/edit')->with(['review' => $review, 'makers' => $maker->get()]);
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $review->fill($input_review)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews');
    }
}
