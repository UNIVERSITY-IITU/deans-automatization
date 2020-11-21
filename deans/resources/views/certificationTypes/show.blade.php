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
                <h2>  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('certificationTypes.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{ $certificationTypes->name }}
            </div>
        </div>
     
    </div>
@endsection
@section('addButton')
@endsection