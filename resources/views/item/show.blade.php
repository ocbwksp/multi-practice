
@extends('layouts.app')

@section('content')

<br>


<div class="container">
    <a href="/items" class="btn btn-success">Go to Item Page</a>
    <br>
    <br>
    
    <h1 style="text-transform: uppercase; background: #35424a;border: 2px solid red;
    border-radius: 7px; border-color: coral; color: white";
     class="d-flex justify-content-center ">
     <strong> Details  About : {{$item->name}}</strong> </h1>
    
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th >PVMS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->pvms}}</td>
            </tr>
        </tbody>
    
        <thead class="thead-light">
            <tr>
                <th>Item Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->name}}</td>
            </tr>
        </tbody>
    
        <thead class="thead-light">
            <tr>
                <th>Aesculap REF</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->aesculap_ref}}</td>
            </tr>
        </tbody>

        <thead class="thead-light">
            <tr>
                <th>Aesculap CAT Page</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->aesculap_cat_page}}</td>
            </tr>
        </tbody>
        <thead class="thead-light">
            <tr>
                <th>Remark</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->remark}}</td>
            </tr>
        </tbody>
        <thead class="thead-light">
            <tr>
                <th>Added By</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->added_by}}</td>
            </tr>
        </tbody>
    </table>
    <hr>
<small>This item added at {{$item->created_at}} by {{$item->id}}</small>

<hr>
{{-- if not logged in as guest ,able to see this --}}
@if(!Auth::guest())
@can('manage-users')
<a href="/items/{{$item->id}}/edit" class="btn btn-secondary">Edit</a>

{!! Form::open(['action' => ['Item\ItemController@destroy', $item->id], 'method' => 'POST','class'=>'float-right' ])!!}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('delete', ['class'=>'btn btn-danger'])}}

{!! Form::close()!!}
@endcan
@endif
</div>





@endsection

