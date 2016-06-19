@extends('layouts.master')

@section('content')
<div class="container">
    <div class="panel panel-success">
      <!-- Default panel contents -->
      <div class="panel-heading">List of Game of Thrones Characters</div>

      <!-- Table -->
      <table class="table">
          <tr>
              <th>Character</th>
              <th>Real Name</th>
          </tr>
          @foreach($characters as $key => $value)
            <tr>
              <td>{{ $key }}</td><td>{{ $value }}</td>
            </tr>
          @endforeach
      </table>
    </div>
    <button class="btn btn-info">Please login to see more >></button>
</div>
@stop
