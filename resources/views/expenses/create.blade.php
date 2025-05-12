@extends('layouts.app')

@section('title') Create @endsection
@section('head') Online Expense Tracker @endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('expenses.store') }}" class="row g-3 mb-4">
    @csrf

    <div class="col-md-2">
      <input type="date" class="form-control" name="date" required>
    </div>

    <div class="col-md-2">
      <input type="text" class="form-control" name="category" placeholder="Category" required>
    </div>

    <div class="col-md-3">
      <input type="text" class="form-control" name="description" placeholder="Description" required>
    </div>

    <div class="col-md-2">
      <input type="number" step="0.01" class="form-control" name="amount" placeholder="Amount" required>
    </div>

    <div class="col-md-2">
      <select class="form-select" name="status" required>
        <option value="Paid">Paid</option>
        <option value="Pending">Pending</option>
      </select>
    </div>

    <div class="col-md-1 d-grid">
      <button type="submit" class="btn btn-success">Add</button>
    </div>

  </form>



  @endsection
