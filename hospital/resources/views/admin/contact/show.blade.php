@extends('layouts.app')

@section('title','Contact')

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
                            <h4 class="title">{{$contact->subject}}</h4>
                        </div><br><br>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-12">
                                <b> &nbsp; &nbsp; &nbsp; Name: {{ $contact->name }} </b><br>
                                    <b> &nbsp;&nbsp; &nbsp; &nbsp;Email: {{ $contact->email }} </b><br>
                                    <b> &nbsp; &nbsp; &nbsp; Message:  </b><hr>
                                     &nbsp; &nbsp; &nbsp;{{ $contact->message }}  <hr>                          
                                </div>
                            </div>
                            <a href="{{ route('contact.index') }}" class="btn btn-danger" >Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush