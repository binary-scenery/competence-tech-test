<?php

namespace App\Actions\Listing ;

use App\Http\Requests\CreateListingRequest;
use App\Models\Listing;
use App\Models\User;

class CreateListingAction {

    public function __invoke(User $user, CreateListingRequest $request) : Listing
    {  
        $data = $request->validated();
        $data['user_id'] = $user->id;
        return Listing::firstOrCreate($data);
    }

}