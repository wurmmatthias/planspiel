<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyKpi extends Model
{
    protected $fillable = [
        'company_id',
        'year',
        'quarter',
        'umsatz',
        'gewinn',
        'kunden',
        'auftraege',
        'angestellte',
    ];

    // Each KPI belongs to a company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
