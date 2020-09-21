@extends('layouts.app')

@section('title','Department')

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
                  <h4 class="card-title ">Add Department</h4>
                  
                </div>
                <div class="card-body" style="font-size:15px">
                <form method="POST" action="{{route('department.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                    </div>
                    
                    <br> <br> 
                    <a href="{{route('department.index')}}" class="btn btn-danger">Back</a>
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