@extends('layouts.app')

@section('title') Edit Expense @endsection
@section('head') Edit Expense @endsection

@section('content')

    <form method="POST" action="{{ route('expenses.update', $expense->id) }}" class="bg-white p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$expense->date}}" required>
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{$expense->category}}" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$expense->description}}" required>
      </div>

      <div class="mb-3">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="{{$expense->amount}}" required>
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="Paid" selected>Paid</option>
          <option value="Pending">Pending</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
    </form>


@endsection
