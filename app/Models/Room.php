<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['floor_number', 'house_id', 'type', 'size'];
    // The $fillable array protects against mass-assignment vulnerabilities by specifying
    // which attributes should be mass-assignable.
    protected $casts = [
        'size' => 'integer',
        'floor_number' => 'integer',
    ];
    // The $casts array is used to cast attributes to native types. This ensures that
    // when you access these attributes, they are automatically returned in the specified type.

    /**
     * Define an inverse one-to-many relationship.
     *
     * @return BelongsTo
     */
    public function house()
    {
        return $this->belongsTo(House::class);
        // This method defines an inverse relationship with the House model.
        // It indicates that each Room belongs to one House.
    }
}
