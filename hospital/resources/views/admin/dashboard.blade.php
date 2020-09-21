@extends('layouts.app')

@section('title','Dashboard')

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

@endpush
@section('content')

      <div class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">account_balance</i>
                    </div>
                    <p class="card-category">Departments / Doctors</p>
                    <h3 class="card-title">{{$departmentCount}}/{{$doctorCount}}
                    </h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons text-danger">people</i>
                      <a href="#pablo">Total Departments & Doctors</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">slideshow</i>
                    </div>
                    <p class="card-category">Slider Count</p>
                    <h3 class="card-title">{{$sliderCount}}</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">slideshow</i><a href="{{ route('slider.index')}}"> Get more details..</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">chrome_reader_mode</i>
                    </div>
                    <p class="card-category">Appoinments</p>
                    <h3 class="card-title">{{$reservations->count() }}</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">chrome_reader_mode</i> Not Confirmed Appoinments..
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">message</i>
                    </div>
                    <p class="card-category">Contacts</p>
                    <h3 class="card-title">{{ $contactCount}}</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">message</i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Reservations</h4>
                        </div><br><br><br>
                        <div class="card-content table-responsive">
                            <table id="table"  class="table table-striped table-bordered" style="font-size:15px" width="100%" >
                                <thead class="text-primary">
                                <th>ID &nbsp;</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Doctor Name</th>
                                <th>Time and Date</th>
                                <th>Doctor Fee</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->doctor_name }}</td>
                                            <td>{{ $reservation->date_and_time }}</td>
                                            
                                            <th>
                                                @if($reservation->doc_fee == true)
                                                    <span class="label label-info">Confirmed</span>
                                                @else
                                                    <span class="label label-danger">not Confirmed yet</span>
                                                @endif

                                            </th>
                                            <td>
                                             

                                                @if($reservation->doc_fee == false)
                                                    <form id="doc_fee-form-{{ $reservation->id }}" 
                                                    action="{{ route('reservation.doc_fee',$reservation->id) }}"
                                                     style="display: none;" method="POST">
                                                        @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-sm" 
                                                    onclick="if(confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('doc_fee-form-{{ $reservation->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="material-icons">done</i></button>
                                                @endif
                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destory',$reservation->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $reservation->id }}').submit();
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