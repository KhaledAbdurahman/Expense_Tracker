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
          <a href="{{route('expenses.edit', $expense['id'])}}" class="btn btn-primary me-2">Edit</a>

            <form style="display: inline" method="POST" action="{{ route('expenses.destroy', $expense['id']) }}">
                @csrf
                @method('DELETE')
                {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
      </div>
    </div>


@endsection
