@extends('layouts.app')

@section('content')
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
        <tr>
            <th class="th-sm">Name</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Position</th>
            <th class="th-sm">Phone</th>
            <th class="th-sm">Role</th>
            <th class="th-sm"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->position }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('edit-user-profile', ['id' => $user->id]) }}">Edit Profile</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection