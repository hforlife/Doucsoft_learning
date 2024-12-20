<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Intervention extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'intervention_type_id',
        'factory_id',
        'time',
        'agent_id',
        'data',
    ];

    public function intervention_type()
    {
        return $this->belongsTo(Intervention_Type::class, 'intervention_type_id');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }
}
