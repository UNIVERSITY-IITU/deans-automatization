@extends('layouts.appAdmin')
@section('breadcumbText')
Список запросов
@endsection
@section('card')

@endsection
@section('addButton')
<div class="container-fluid">   
    <div class="float-right">
        <a class="btn btn-danger" href=""><i class="fa fa-times"></i> Отклонить все</a>
    </div> 
    <div class="float-right">
        <a class="btn btn-success" href=""><i class="fa fa-check"></i> Разрешить все</a>
    </div>
</div>
@endsection
@section('cardBody')
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">ФИО</th>
        <th scope="col">Группа</th>
        <th scope="col">Курс</th>
        <th scope="col">Запрос</th>
        <th scope="col">Действие</th>
    </tr>
    </thead>
    <tbody>
    
        <tr>
            <th scope="row">1</th>
            <td>Паленшиев Тугенше</td>
            <td>CSSE-1806K</td>
            <td>3</td>
            <td>Приложение 7</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-check"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Ақжол Бақатай</td>
            <td>CSSE-1802K</td>
            <td>3</td>
            <td>С место требование</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-check"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Ақжол Бақатай</td>
            <td>CSSE-1802K</td>
            <td>3</td>
            <td>Военкомат</td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-success" data-toggle="modal" data-target="#"><i class="fa fa-check"></i></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>


    </tbody>
</table>
@endsection
