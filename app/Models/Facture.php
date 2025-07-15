<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_complet',
        'date',
        'n_facture',
        'monture',
        'qté_monture',
        'prix_ttc_monture',
        'od_og',
        'qté_od',
        'prix_ttc_od',
        'qté_og',
        'prix_ttc_og',
        'description_od',
        'description_og',
    ];
}
