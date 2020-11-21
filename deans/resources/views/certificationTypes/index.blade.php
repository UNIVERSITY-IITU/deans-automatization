@extends('layouts.appAdmin')
@section('breadcumbText')
Faqs
@endsection
@section('card')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection

@section('cardBody')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Название</th>
        
        <th scope="col">Действии</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($certificationTypes as $c)
            <tr>
            <td>{{ $c->certification_type_id}}</td>
                <td>{{ $c->name}}</td>


                <td>
                    <form action="{{ route('certificationTypes.destroy', $c->certification_type_id) }}" method="POST">

                        <a href="{{ route('certificationTypes.show', $c->certification_type_id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('certificationTypes.edit',$c->certification_type_id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
{{-- {!! $faqs->links() !!} --}}
@endsection
@section('addButton')
<div class="container-fluid">    
    <div class="float-right">
        <a class="btn btn-success" href="{{ route('certificationTypes.create') }}" title="add new faq"> <i class="fas fa-plus-circle"></i>
        </a>
    </div>
</div>
@endsection