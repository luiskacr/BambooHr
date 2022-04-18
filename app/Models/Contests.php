<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contests extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jobOffers_id',
        'person_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jobOffers_id' => 'integer',
        'person_id' => 'integer',
    ];

    public function jobOffers()
    {
        return $this->belongsTo(JobOffers::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}
