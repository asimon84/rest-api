<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Record extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'string',
        'text',
        'json',
        'boolean',
        'integer',
        'float',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'string' => 'string',
            'text' => 'string',
            'json' => 'string',
            'boolean' => 'boolean',
            'integer' => 'integer',
            'float' => 'float',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    /**
     * @param int $days
     *
     * @return array
     */
    public static function getRecordsByDays(int $days = 10): array
    {
        $output = DB::table('records')
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as count')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dates = $output->pluck('date')->toArray();
        $counts = $output->pluck('count')->toArray();

        array_unshift($dates, 'date');
        array_unshift($counts, 'records');

        return [$dates, $counts];
    }
}
