@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.store') }}">
          <div class="form-group">
              @csrf
             <!-- <label for="title">Title:</label>  !-->
             Name:
              <input type="text" class="form-control" name="name"  id="name" />
          </div>
          <div class="form-group">
              <!--<label for="price">Body:</label>!-->
              Address:
              <input type="text" name="address" id="address" class="form-control" />
              
          </div>

          <div class="form-group">
              <!--<label for="price">Body:</label>!-->
              Symbol No.: 
              <input type="text" name="symb" id="symb" class="form-control"/>
          </div>
          <div class="form-group">
              <!--<label for="price">Body:</label>!-->
              School Name: 
              <input type="text" name="sname" id="sname" class="form-control"/>
          </div>

          
          <div class="form-group">
              Date of Birth:
              <input type="text" name="dob" id="dob" class="form-control"/>
          </div>

          <div class="form-group">
              English:
              <input type="text" name="eng" id="eng" class="form-control"/>
          </div>

          <div class="form-group">
              Nepali:
              <input type="text" name="nep" id="nep" class="form-control"/>
          </div>

          <div class="form-group">
              Physics:
              <input type="text" name="phy" id="phy" class="form-control"/>
          </div>

          <div class="form-group">
              Chemistry:
              <input type="text" name="chem" id="chem" class="form-control"/>
          </div>

          <div class="form-group">
              Networking:
              <input type="text" name="net" id="net" class="form-control"/>
          </div>

          <div class="form-group">
              Mathematics:
              <input type="text" name="math" id="math" class="form-control"/>
          </div>

          <div class="form-group">
             Computer Programing:
              <input type="text" name="pro" id="pro" class="form-control"/>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Clear</button>
      </form>
  </div>
</div>
@endsection