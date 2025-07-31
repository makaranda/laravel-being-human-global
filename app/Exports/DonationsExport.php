<?php

namespace App\Exports;

use App\Models\Donation;
use Maatwebsite\Excel\Concerns\FromCollection;

class DonationsExport implements FromCollection
{
    /**
     * Return a collection of donations to export
     */
    public function collection()
    {
        // You can customize this query as needed, e.g., filtering by date
        return Donation::all();
    }
}
