@extends('layouts.app')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Principal</th>
            <th class="th-sm">Board</th>
            <th class="th-sm">Medium</th>
            <th class="th-sm">Foundation Year</th>
            <th class="th-sm">Created By</th>
            <th class="th-sm">Last Updated By</th>
            <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($schools as $school)
        <tr>
            <td>{{ $school->school_name }}</td>
            <td>{{ $school->principal }}</td>
            <td>{{ $school->board->name }}</td>
            <td>{{ $school->medium }}</td>
            <td>{{ $school->foundation_year }}</td>
            <td>{{ $school->creator->full_name }}</td>
            <td>{{ $school->updator->full_name }}</td>
            <td>
                <a href="{{ route('edit-school', ['id' => $school->id]) }}">Edit School</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection