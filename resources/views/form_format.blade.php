@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Format Create Form') }}</div>

                <div class="card-body">
<form method="post" action="{{ route('create_format_post') }}">
        @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Format Title</label>
    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  </div>
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Custom Query</label>
    <textarea name="custom_query"class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-info">Show Result</button>
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
