@extends('layouts.app')
@section('content')

<div class="container mt-3">
    <table class="table border table-striped">
        <thead class="bg-dark text-white">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Type</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($destinationList as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->address }}</td>
                    <td>{{ $list->type }}</td>
                    <td>{{ $list->rating }}</td>

                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="container">
          {{ $destinationList->links() }}
      </div>
</div>




@endsection
