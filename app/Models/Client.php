<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'school',
        'level',
        'objetives',
        'parent_guardian_name',
        'parent_guardian_email',
        'parent_guardian_phone',
        'user_id',
        'location_id',
    ];


    /**
     * Get the user record associated with the client
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
