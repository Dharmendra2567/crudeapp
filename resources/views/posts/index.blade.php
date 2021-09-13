@extends('layouts.app')
 
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
 
  <div class="card uper">
 
  <div class="card-header">
    <a class="btn btn-primary" href="{{ route('posts.create') }}"> Create</a>
   </div>
 
  <div class="card-body">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
     <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Address</td>
          <td>Symbol No.</td>
          <td>School Nae</td>
          <td colspan="3">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->address}}</td>
            
            <td>{{$post->symb}}</td>
            <td>{{$post->sname}}</td>
           <!--<td>{{$post->dob}}</td>
            <td>{{$post->eng}}</td>
            <td>{{$post->nep}}</td>
            <td>{{$post->phy}}</td>
            <td>{{$post->chem}}</td>
            <td>{{$post->net}}</td>
            <td>{{$post->math}}</td>
            <td>{{$post->pro}}</td>!-->
            <td><a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Report</a></td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
</div>
  
@endsection