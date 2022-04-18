<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id',
        'hireDate',
        'deparment_id',
        'activeState',
        'workFor',
        'fireDate',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'person_id' => 'integer',
        'hireDate' => 'date',
        'deparment_id' => 'integer',
        'activeState' => 'boolean',
        'fireDate' => 'date',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function deparment()
    {
        return $this->belongsTo(Deparment::class);
    }

    public function personProfile()
    {
        return $this->belongsTo(PersonProfile::class);
    }

}
