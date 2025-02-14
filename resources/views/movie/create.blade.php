@extends('template.master')

@section('title', 'Tambah Data Movie')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('movie.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="title">Judul Film</label>
            <input name="title" type="text" class="form-control @error('title') {{ 'is-invalid' }} @enderror" id="title"  placeholder="Judul Film" value="{{ old('title')  }}">
          </div>
          @error('title')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="year">Tahun</label>
            <input name="year" type="number" class="form-control @error('year') {{ 'is-invalid' }} @enderror" id="year"  placeholder="Tahun Rilis" value="{{ old('year')  }}">
          </div>
          @error('year')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <div class="form-group">
            <label for="summary">Ringkasan</label>
            <textarea name="summary" class="form-control @error('summary') is-invalid @enderror" id="summary" placeholder="Ringkasan Film">{{ old('summary') }}</textarea>
            </div>
            @error('summary')
                <span id="summary-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
            <div class="form-group">
              <label for="genre">Genre</label>
              <select name="genre_id" id="genre" class="form-control @error('genre') is-invalid @enderror">
                  <option value="" disabled selected>Select</option>
                  @foreach($genres as $genre)
                      <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                  @endforeach
              </select>
              @error('genre')
                  <span id="genre-error" class="error invalid-feedback">{{ $message }}</span>
              @enderror
          </div>          
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center mb-5">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection