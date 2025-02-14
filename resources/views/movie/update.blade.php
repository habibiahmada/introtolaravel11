@extends('template.master')

@section('title', 'Edit Data Movie')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('movie.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="title">Judul Film</label>
            <input name="title" type="text" class="form-control @error('title') {{ 'is-invalid' }} @enderror" id="title"  placeholder="nama Pemeran" value="{{ $movie->title  }}">
            <label for="year">Tahun</label>
            <input name="year" type="number" class="form-control @error('year') {{ 'is-invalid' }} @enderror" id="year"  placeholder="Tahun" value="{{ $movie->year  }}">
            <label for="genre_id">Genre</label>
            <select name="genre_id" class="form-control @error('genre_id') {{ 'is-invalid' }} @enderror">
              @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id?'selected' : '' }}>{{ $genre->name }}</option>
              @endforeach
            </select>
            <label for="summary">Ringkasan</label><br><br>
            <textarea name="summary" class="resize-x" id="summary" cols="50" rows="10" >{{ $movie->summary  }}</textarea>
          </div>
          @error('title')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('year')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('summary')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <a href="{{ route('movie.index') }}" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection