@extends('layouts.app')
@section('breadcumbText')
Подача Справки
@endsection
@section('card')
@endsection
@section('breadcrumb')
<i class="fas fa-user"></i>
 Вид Справки
@endsection
@section('cardBody')
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <th>Название Справки</th>
                <th>Вид справки</th>
                <th>Цена</th>
                
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th></th>
                <th>Название Справки</th>
                <th>Вид справки</th>
                <th>Цена</th>
                
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td><input type="radio" id="age1" name="age" value="30"> </td>
                <td>с места учебы</td>
                <td>положение 6</td>
                <td>Бесплатно</td>
            </tr>
            
        </tbody>
    </table>
    <button type="button" class="btn btn-outline-dark" ><a href="/formspravki"> Отправить заявку</a></button>
</div>
@endsection
