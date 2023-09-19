<?php

namespace App\Models;

use App\Models\niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class module extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelles',
        'durre',
        'montant',
        'id_niveau'

    ];

    public function niveau(){
      return $this->BelongsTo(niveau::class);
    }
}
