<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        $ExpensesFromDB = Expense::all();

        return view('expenses.index', ['expenses' => $ExpensesFromDB]);
    }

    public function show($ExpenseID)
    {
        $singleExpenseFromDB = Expense::find($ExpenseID);

        return view('expenses.show', ['expense' => $singleExpenseFromDB]);
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store()
    {
        //validate the data
        request()->validate([
            'date' => 'required|date',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        $data = request()->all();

        $date = request('date');
        $category = request('category');
        $description = request('description');
        $amount = request('amount');

        Expense::create([
            'date' => $date,
            'category' => $category,
            'description' => $description,
            'amount' => $amount,
        ]);

        return to_route('expenses.index');
    }

    public function edit(Expense $expense)
    {

        return view('expenses.edit', ['expense' => $expense]);
    }

    public function update($ExpenseID)
    {

        $date = request()->date;
        $category = request()->category;
        $description = request()->description;
        $amount = request()->amount;

        $singleExpenseFromDB = Expense::findOrFail($ExpenseID);
        $singleExpenseFromDB->update([
            'date' => $date,
            'category' => $category,
            'description' => $description,
            'amount' => $amount,
        ]);

        return to_route('expenses.show', $ExpenseID);
    }

    public function destroy($ExpenseID)
    {
        //1- delete the post from the database.
        $expense = Expense::findOrFail($ExpenseID);
        $expense->delete();

        return to_route('expenses.index');
    }

}
