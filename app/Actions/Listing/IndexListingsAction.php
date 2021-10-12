<?php

namespace App\Actions\Listing ;

use App\Http\Requests\IndexListingRequest;
use App\Models\Listing;
use Illuminate\Pagination\LengthAwarePaginator;

class IndexListingsAction {

    private $query ;

    public function __construct(){
        $this->query = Listing::query();
    }

    public function __invoke(IndexListingRequest $request) : LengthAwarePaginator
    {
        $this->filterByTerm($request);
        return $this->query->orderBy('created_at', 'DESC')->paginate(5);
    }

    private function filterByTerm(IndexListingRequest $request) : void
    {
        if(!$request->has('term')) {
            return ;
        }
        $term = $request->validated()['term'];
        $this->query->where('title', 'LIKE', '%'.$term.'%');
    }
    
}