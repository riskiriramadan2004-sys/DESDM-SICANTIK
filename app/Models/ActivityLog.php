<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    protected $fillable = [
        'user_id',
        'module',
        'action',
        'description',
        'subject_type',
        'subject_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mencatat aktivitas sistem.
     */
    public static function record(
        string $module,
        string $action,
        string $description,
        ?string $subjectType = null,
        ?int $subjectId = null
    ): self {
        return self::create([
            'user_id'      => auth()->id(),
            'module'       => $module,
            'action'       => $action,
            'description'  => $description,
            'subject_type' => $subjectType,
            'subject_id'   => $subjectId,
        ]);
    }
}