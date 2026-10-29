<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    private static $programs = [
        [
            'title' => 'aaa',
            'code' => 'PRJ-001',
            'course' => 'Programming',
        ],
        [
            'title' => 'Accounting',
            'code' => 'PRJ-002',
            'course' => 'Accounting',
        ],
        [
            'title' => 'Student Management',
            'code' => 'PRJ-003',
            'course' => 'Information Systems',
        ],
        [
            'title' => 'POS Restaurant',
            'code' => 'PRJ-004',
            'course' => 'Software Development',
        ],
        [
            'title' => 'Pet Shop',
            'code' => 'PRJ-005',
            'course' => 'Software Development',
        ],
    ];

    public static function allData(): array
    {
        return self::$programs;
    }
}
