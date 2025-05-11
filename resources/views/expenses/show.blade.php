@extends('layouts.app')

@section('title') Expense Details @endsection
@section('head') Expense Details @endsection

@section('content')


    <div class="card">
      <div class="card-header">
        <strong>Expense ID:</strong> {{$expense->id}}
      </div>
      <div class="card-body">
        <p><strong>Date:</strong> {{ $expense->date }}</p>
        <p><strong>Category:</strong> {{ $expense->category }}</p>
        <p><strong>Description:</strong> {{ $expense->description }} </p>
        <p><strong>Amount:</strong> {{ $expense->amount }}</p>
        <p><strong>Status:</strong> <span class="badge bg-success">Paid</span></p>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Back to List</a>
        <div>
          <button class="btn btn-primary me-2">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>


@endsection
