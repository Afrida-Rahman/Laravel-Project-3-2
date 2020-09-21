@extends('layouts.app')

@section('title','Stuff')

@push('css')
  

@endpush
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            @include('layouts.partial.msg')

             
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Stuff</h4>
                  
                </div>
                <div class="card-body" style="font-size:15px">
                <form method="POST" action="{{route('stuff.update', $stuff->id)}}" >
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $stuff->name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="text" class="form-control" name="phone" value="{{ $stuff->phone }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <input type="text" class="form-control" name="department" value="{{ $stuff->department }}">
                        </div>
                      </div>
                    </div>
                    <br> <br> 
                    <a href="{{route('stuff.index')}}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection

@push('scripts')

@endpush