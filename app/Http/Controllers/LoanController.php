<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeBooks = Book::where('active', true)->get();

        $books = $activeBooks->filter(function ($book) {
            $activeLoansCount = Loan::where('id_book', $book->id)
                                    ->where('returned', false)
                                    ->count();
            return $book->quantity > $activeLoansCount;
        });
        return view('loans.create', ['books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lender' => 'required|string',
            'student_meat' => 'required|string',
            'id_book' => 'required|exists:tbl_books,id',
            'loan_days' => 'required|integer',
        ]);

        Loan::create($request->all());

        return redirect()->route('loans.index')
            ->with('success', 'Loan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        return view('loans.edit', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'lender' => 'required|string',
            'student_meat' => 'required|string',
            'id_book' => 'required|exists:tbl_books,id',
            'loan_days' => 'required|integer',
            'returned' => 'boolean',
            'active' => 'boolean',
        ]);

        $loan->update($request->all());

        return redirect()->route('loans.index')
            ->with('success', 'Loan updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')
            ->with('success', 'Loan deleted successfully.');
    }
}
