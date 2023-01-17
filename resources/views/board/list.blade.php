@extends('layouts.app')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($boards as $board)
        <tr>
            <td>{{ $board->name }}</td>
            <td>
                <a href="{{ route('delete-board', ['id' => $board->id]) }}">Delete Board</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection