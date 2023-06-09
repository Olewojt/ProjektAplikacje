<?php

namespace App\Observers;

use App\Models\Review;
use App\Models\Company;

class ReviewObserver
{
    /**
     * Handle the Review "created" event.
     */
    public function created(Review $review): void
    {
        $company = Company::find($review->company->id);
        if ( count($company->reviews) != 0 ){
            $rating = $company->reviews()->avg('rating');
            $company->average_rating = $rating;
            $company->saveQuietly();
        }
    }
}
