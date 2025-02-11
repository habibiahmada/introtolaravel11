@extends('template.master')

@section('title', 'Tambah Data Cast')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Nama Pemeran</label>
                <input name="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" id="name"  placeholder="nama Pemeran" value="{{ @old('name') }}">
              </div>
              @error('name')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="age">Umur</label>
                <input name="age" type="number" class="form-control @error('age') {{ 'is-invalid' }} @enderror" id="age"  placeholder="Umur Pemeran" value="{{ @old('age')}}">
              </div>
              @error('age')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="bio">Biografi Pemeran</label>
                <textarea name="bio" id="bio" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" cols="30" rows="5" placeholder="Biografi Pemeran">{{ @old('bio') }}</textarea>
              </div>
              @error('bio')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
