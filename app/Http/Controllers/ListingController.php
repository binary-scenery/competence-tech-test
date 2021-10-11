<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexListingRequest;
use App\Actions\Listing\IndexListingsAction;
use Illuminate\View\View ;

class ListingController extends Controller
{
    public function index(IndexListingRequest $request, IndexListingsAction $indexListingAction) : View
    {
        $data['listings'] = $indexListingAction($request);
        return view('listing.index', $data);
    }
}
