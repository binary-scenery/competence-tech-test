<?php

namespace App\Actions\Listing ;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Listing;

class IndexListingsAction {

    public function __invoke()
    {
        return Listing::paginate(25);
    }

}