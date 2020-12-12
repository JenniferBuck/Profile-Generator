@extends('layouts.app')
@section('content')
<div class="container">
<a class="btn btn-primary" href="{{ route('members.create') }}">Add member</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Github</th>
            <th>Office Number</th>
            <th>Category</th>
            <th>Team</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
      @foreach ($members as $key=>$member)
      <tr>
        <td scope="row">{{ $key+1 }}</td>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->github }}</td>
        <td>{{ $member->phone }}</td>
        <td>{{ $member->category->name }}</td>
        <td>{{ $member->team->name }}</td>
        <td class="d-flex justify-content-between">
             <a href="{{ route('members.edit',$member) }}" class="btn btn-primary">edit</a>
             <form action="{{ route('members.delete',$member) }}" method="POST">
              @csrf
              <button name="submit" class="btn btn-primary">delete</button>
            </form>
        </td>
    </tr>

      @endforeach
    </tbody>
</table>
</div>
@endsection
