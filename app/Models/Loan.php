<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'tbl_loans';

    protected $fillable = [
        'lender',
        'student_meat',
        'id_book',
        'loan_days',
        'returned',
        'date_loan',
        'returned_on',
        'active',
    ];

    protected $casts = [
        'returned' => 'boolean',
        'active' => 'boolean',
        'date_loan' => 'date',
        'returned_on' => 'date',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book', 'id');
    }
}
