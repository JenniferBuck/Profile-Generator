@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('members.index') }}" class="btn btn-primary">All members</a>
    <hr>
    <form action="{{ route('members.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for=""> Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Phone</label>
          <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Github</label>
          <input type="text" name="github" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Select Job Category</label>
          <select class="form-control" name="category_id" id="">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="">Select Team</label>
          <select class="form-control" name="team_id" id="">
            @foreach ($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="float-right">
            <button name="submit" class="btn btn-primary">save</button>
        </div>
    </form>
</div>
@endsection
