@extends('layouts.app')
@section('content')
<form action="{{ route('team.update',$team) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="">Team Name</label>
      <input type="text" name="name" value="{{ old('name') ?? $team->name }}"  id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="float-right">
        <button name="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection
