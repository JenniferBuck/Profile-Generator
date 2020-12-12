@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
     @if($category->member->count())
     @foreach ($category->member as $member)
     <div class="col-md-4">
      <div class="card">
          <div class="card-header">
              <div class="col-md-flex text-center">
                  <h4 class="font-weight-bold">{{ $member->name }}</h4>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/>
                    </svg> {{ $member->team->name }}
              </div>
          </div>
          <div class="card-body">
              <ul class="list-group">
                  <li class="list-group-item ">ID:{{ $member->id }}</li>
                  <li class="list-group-item">Email:<a href="{{ $member->email }}">{{ $member->email }}</a></li>
                  <li class="list-group-item disabled">Office number:{{ $member->phone }}</li>
              </ul>
          </div>

      </div>
    </div>
     @endforeach
     @else
     <p>No member added in this job category<a href="{{ route('members.create') }}" class="btn btn-primary">Add first member</a></p>
     @endif
    </div>
</div>
@endsection
