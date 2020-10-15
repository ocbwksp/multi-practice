
@extends('layouts.app')

@section('content')
<h1>Edit Item</h1>

{!! Form::open(['action' => ['Item\ItemController@update', $item->id], 'method' => 'POST']) !!}

    <div>
        {{Form::label('pvms', 'PVMS')}}
        {{Form::text('pvms', $item->pvms , ['class'=> 'form-control', 'placeholder' => 'Select PVMS' ])}}
    </div>

    <div>
        {{Form::label('name', 'name')}}
        {{Form::text('name', $item->name , ['class'=> 'form-control', 'placeholder' => 'Item Name' ])}}
    </div>

    <div>
        {{Form::label('aesculap_ref', 'Aesculap Ref')}}
        {{Form::text('aesculap_ref', $item->aesculap_ref , ['class'=> 'form-control', 'placeholder' => 'Description of the Item' ])}}
    </div>

    <div>
        {{Form::label('aesculap_cat_page', 'Aesculap Cat Page')}}
        {{Form::text('aesculap_cat_page', $item->aesculap_cat_page , ['class'=> 'form-control', 'placeholder' => 'Location of the Item' ])}}
    </div>

    <div>
        {{Form::label('remark', 'Remark')}}
        {{Form::text('remark', $item->remark , ['class'=> 'form-control', 'placeholder' => 'Status of the Item' ])}}
    </div>

    <div>
        {{Form::label('added_by', 'Added_by')}}
        {{Form::text('added_by', $item->added_by , ['class'=> 'form-control', 'placeholder' => 'Added By' ])}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',  ['class'=> 'form-control btn btn-primary' ])}}
    
{!! Form::close() !!}

@endsection

