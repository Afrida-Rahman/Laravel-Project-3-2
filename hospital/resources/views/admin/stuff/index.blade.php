@extends('layouts.app')

@section('title','Stuff')

@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

@endpush
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <a href="{{route('stuff.create')}}" class="btn btn-primary">Add new</a>
            
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All General Stuff</h4>
                  
                </div>
                <div class="card-body" style="font-size:15px">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" style="font-size:15px">
                      <thead class="text-secondary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>

                      </thead>
                      <tbody>
                       @foreach($stuffs as $key=>$stuff)
                       <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$stuff->name}}</td>
                           <td>{{$stuff->phone}}</td>
                           <td>{{$stuff->department}}</td>
                           <td>{{$stuff->created_at}}</td>
                           <td>{{$stuff->updated_at}}</td>
                           
                              
                            <td>
                                <a href="{{ route('stuff.edit',$stuff->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                  <form id="delete-form-{{ $stuff->id }}" action="{{ route('stuff.destroy',$stuff->id) }}" style="display: none;" method="POST">
                                      @csrf
                                      @method('DELETE')
                                  </form>
                                  <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $stuff->id }}').submit();
                                  }else {
                                      event.preventDefault();
                                          }"><i class="material-icons">delete</i></button>
                            </td>
                          </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#table').DataTable();
} );
</script>
@endpush