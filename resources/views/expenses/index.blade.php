@extends('layouts.app')

@section('title') Index @endsection
@section('head') Online Expense Tracker @endsection

@section('content')


    <div class="mb-4">
      <a href="{{ route('expenses.create') }}" class="btn btn-success">Add New Expense</a>
    </div>

    <table class="table table-striped table-bordered bg-white">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Category</th>
          <th>Description</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>

        @foreach ($expenses as $expense)

        <tr>
          <td>{{$expense->id}}</td>
          <td>{{$expense->date}}</td>
          <td>{{$expense->category}}</td>
          <td>{{$expense->description}}</td>
          <td>{{$expense->amount}}</td>
          <td><span class="badge bg-success">Paid</span></td>
          <td>
            <a href="{{ route('expenses.show', $expense['id']) }}" class="btn btn-info">Show</a>
            <a href="{{ route('expenses.edit', $expense['id']) }}" class="btn btn-primary">Edit</a>

            <form style="display: inline" method="POST" action="{{ route('expenses.destroy', $expense['id']) }}">
                @csrf
                @method('DELETE')
                {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

          </td>
        </tr>

        @endforeach

      </tbody>
    </table>


@endsection
