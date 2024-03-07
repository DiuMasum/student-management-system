@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit page</div>
        <div class="card-body">

            <form action="{{ url('/batches/' .$batches->id) }}" method="POST">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $batches->id }}" id="id" />
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{ $batches->name }}" class="form-control"><br>
            <label>course</label><br>
            <input type="text" name="address" id="address" value="{{ $batches->course->name }}" class="form-control"><br>
            <label>Start Date</label><br>
            <input type="text" name="mobile" id="mobile" value="{{ $batches->start_date }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection