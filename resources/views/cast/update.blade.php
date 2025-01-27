@extends('template.master')

@section('title', 'Edit Data Genre')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="name">Nama Pemeran</label>
            <input name="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"  placeholder="nama Pemeran" value="{{ $cast->name  }}">
            <label for="age">Umur</label>
            <input name="age" type="number" class="form-control @error('age') {{ 'is-invalid' }} @enderror" id="age"  placeholder="Umur" value="{{ $cast->age  }}">
            <label for="bio">Bio</label><br><br>
            <textarea name="bio" class="resize-x" id="bio" cols="50" rows="10" >{{ $cast->bio  }}</textarea>
          </div>
          @error('name')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <a href="{{ route('cast.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection