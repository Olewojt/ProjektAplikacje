<?php

namespace App\Observers;

use App\Models\Company;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     */
    public function created(Company $company): void
    {
        if ( count($company->reviews) != 0 ){
            $rating = $company->reviews()->avg('rating');
            $company->average_rating = $rating;
            $company->saveQuietly();
        }
    }

    /**
     * Handle the Company "updated" event.
     */
    public function updated(Company $company): void
    {
        if ( count($company->reviews) != 0 ){
            $rating = $company->reviews()->avg('rating');
            $company->average_rating = $rating;
            $company->saveQuietly();
        }
    } 
}