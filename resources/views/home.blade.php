@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('members.index') }}" class="btn btn-primary">All Members</a>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4 class="font-weight-bold text-center">Teams</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $key=>$team)
                    <tr>
                        <td scope="row">{{ $key+1 }}</td>
                        <td><a href="{{ route('team.show',$team) }}">{{ $team->name }}</a></td>
                        <td class="d-flex justify-content-between">
                           <a href="{{ route('team.edit',$team) }}" class="btn btn-primary">Edit</a>
                           <a href="{{ route('team.show',$team) }}" class="btn btn-primary">Details</a>
                           <form action="{{ route('team.delete',$team) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button name="submit" class="btn btn-primary">delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-bold text-center">Add A Team</h4>
             <form action="{{ route('team.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="">Team Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="float-right">
                  <button name="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
           <h4 class="font-weight-bold text-center">Job categories</h4>
           <table class="table">
               <thead>
                   <tr>
                       <th>#</th>
                       <th>Name</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($categories as $key=>$category)
                   <tr>
                    <td scope="row">{{ $key+1 }}</td>
                    <td><a href="{{ route('category.show',$category->name) }}">{{ $category->name }}</a></td>
                    <td class="d-flex justify-content-between">
                        <a href="{{ route('category.edit',$category) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('category.delete',$category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button name="submit" class="btn btn-primary">delete</button>
                     </form>
                     </td>
                </tr>
                   @endforeach

               </tbody>
           </table>
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-bold text-center">Add A Job Category</h4>
              <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Category Name</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="float-right">
                    <button name="submit" class="btn btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
