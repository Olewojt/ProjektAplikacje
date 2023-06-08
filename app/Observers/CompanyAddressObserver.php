<?php

namespace App\Observers;

use App\Models\CompanyAddress;
use App\Models\Company;

class CompanyAddressObserver
{
    /**
     * Handle the CompanyAddress "updated" event.
     */
    public function updated(CompanyAddress $companyAddress): void
    {
        $company = Company::find($companyAddress->company->id);
        if ( count($company->reviews) != 0 ){
            $rating = $company->reviews()->avg('rating');
            $company->average_rating = $rating;
            $company->saveQuietly();
        }
    }
}
