@extends('layouts.app')
@section('content')
<form action="{{ route('category.update',$category) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="">category Name</label>
      <input type="text" name="name" value="{{ old('name') ?? $category->name }}"  id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="float-right">
        <button name="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection
