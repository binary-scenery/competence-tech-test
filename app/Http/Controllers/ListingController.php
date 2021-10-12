<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexListingRequest;
use App\Actions\Listing\IndexListingsAction;
use App\Http\Requests\CreateListingRequest;
use App\Actions\Listing\CreateListingAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View ;

class ListingController extends Controller
{
    public function index(IndexListingRequest $request, IndexListingsAction $indexListingAction) : View
    {
        $data['listings'] = $indexListingAction($request);
        return view('listing.index', $data);
    }

    public function create() : View
    {
        return view('listing.create');
    }

    public function store(CreateListingRequest $request, CreateListingAction $createListingAction) : RedirectResponse
    {
        $createListingAction(auth()->user(), $request);
        return redirect()->route('listings.index');
    }
}
