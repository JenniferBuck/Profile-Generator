@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12">
        <h4 class="font-weight-bold text-center">{{ $team->name }}</h4>
       </div>
    </div>
    <hr>
    <div class="row">
       @foreach ($team->member as $member)
       <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="col-md-flex text-center">
                    <h4 class="font-weight-bold">{{ $member->name }}</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/>
                      </svg> {{ $member->category->name }}
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">ID:{{ $member->id }}</li>
                    <li class="list-group-item">Email:<a href="{{ $member->email }}">{{ $member->email }}</a></li>
                    <li class="list-group-item disabled">Office number:{{ $member->phone }}</li>
                </ul>
            </div>

        </div>
      </div>
       @endforeach
       {{-- @foreach ($team->member as $member)
       <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-blue">
                <div class="col-md-flex text-center">
                    <h4 class="font-weight-bold">{{ $member->name }}</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 0-4 0 2 2 0 0 0 4 0z"/>
                      </svg>
                    {{ $member->category->name }}
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">ID:{{ $member->id }}</li>
                    <li class="list-group-item">Email:<a href="{{ $member->email }}">{{ $member->email }}</a></li>
                    <li class="list-group-item disabled">Github:<a href="{{ $member->github }}">{{ $member->github }}</a></li>
                </ul>
            </div>

        </div>
      </div>
       @endforeach
       @foreach ($team->member as $member)
       <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="col-md-flex text-center">
                    <h4 class="font-weight-bold">{{ $member->name }}</h4>
                    <img src="https://www.flaticon.com/svg/static/icons/svg/67/67902.svg" style="width:10px">
                    {{ $member->category->name }}
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">ID:{{ $member->id }}</li>
                    <li class="list-group-item">Email:<a href="{{ $member->email }}">{{ $member->email }}</a></li>
                    <li class="list-group-item disabled">Github:<a href="{{ $member->github }}">{{ $member->github }}</a></li>
                </ul>
            </div>

        </div>
      </div>
       @endforeach --}}



    </div>
</div>
@endsection
