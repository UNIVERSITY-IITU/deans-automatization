@extends('layouts.appAdmin')
@section('breadcumbText')
Certification Type
@endsection
@section('card')

@endsection
@section('cardBody')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Certification Type</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('certificationTypes.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<<<<<<< Updated upstream:deans/resources/views/certificationTypes/create.blade.php
    <form action="{{ route('certificationTypes.store') }}" method="POST" >
=======
    <form action="/cerfType" method="POST" >
>>>>>>> Stashed changes:deans/resources/views/cerfType/create.blade.php
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
        
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
@section('addButton')
@endsection