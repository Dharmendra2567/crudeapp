@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Marksheet
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
      <form method="post" action="{{ route('posts.update', $post->id) }}">
                @csrf
 
        @method('PUT')
 
        <div class="form-group">
         <!-- <label for="title">Title:</label>!-->
         Name:
          <input type="text" class="form-control" name="name" id="post_name" value={{ $post->name }} />
        </div>
        <div class="form-group">
         <!-- <label for="price">Body:</label>!-->
         Address:
          <textarea name="address" id="post_address" class="form-control">{{ $post->address }}</textarea>
        </div>
        <div class="form-group">
          Symbol No.:
          <textarea name="symb" id="post_symb" class="form-control">{{ $post->symb }}</textarea>
        </div>

        <div class="form-group">
          School Name:
          <textarea name="sname" id="post_sname" class="form-control">{{ $post->sname }}</textarea>
        </div>

        <div class="form-group">
        English:
          <textarea name="eng" id="post_eng" class="form-control">{{ $post->eng }}</textarea>
        </div>

        <div class="form-group">
        Nepali:
          <textarea name="nep" id="post_nep" class="form-control">{{ $post->nep }}</textarea>
        </div>
        <div class="form-group">
        Physics:
          <textarea name="phy" id="post_phy" class="form-control">{{ $post->phy }}</textarea>
        </div>
        <div class="form-group">
        Chemistry:
          <textarea name="chem" id="post_chem" class="form-control">{{ $post->chem }}</textarea>
        </div>
        <div class="form-group">
        Networking:
          <textarea name="net" id="post_net" class="form-control">{{ $post->net}}</textarea>
        </div>
        <div class="form-group">
        Mathematics:
          <textarea name="math" id="post_math" class="form-control">{{ $post->math }}</textarea>
        </div>
        <div class="form-group">
        computer Programing:
          <textarea name="pro" id="post_pro" class="form-control">{{ $post->pro}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection