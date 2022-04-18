<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'personProfile_id',
        'title',
        'where',
        'endDate',
        'typeTecnilogy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'personProfile_id' => 'integer',
        'endDate' => 'date',
    ];

    public function personProfile()
    {
        return $this->belongsTo(PersonProfile::class);
    }

}
