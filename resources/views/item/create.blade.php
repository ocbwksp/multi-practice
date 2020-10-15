
@extends('layouts.app')

@section('content')
<h1>Add a new Item to the Inventory</h1>

{!! Form::open(['action' => 'Item\ItemController@store', 'method' => 'POST']) !!}

    <div >
        {{form::label('pvms', 'PVMS')}}
        
        {{form::text('pvms', '' , ['class'=> 'form-control', 'placeholder' => 'PVMS' ])}}
    </div>

    <div>
        {{form::label('name', 'Name')}}
        {{form::text('name', '' , ['class'=> 'form-control', 'placeholder' => 'name' ])}}
    </div>

    <div >
        {{form::label('aesculap_ref', 'Aesculap Ref')}}
        {{form::text('aesculap_ref', '' , ['class'=> 'form-control', 'placeholder' => 'Aesculap Ref' ])}}
    </div>

    <div >
        {{form::label('aesculap_cat_page', 'Aesculap Cat Page')}}
        {{form::text('aesculap_cat_page', '' , ['class'=> 'form-control', 'placeholder' => 'Aesculap Cat Page' ])}}
    </div>

    <div >
        {{form::label('remark', 'Remark')}}
        {{form::text('remark', '' , ['class'=> 'form-control', 'placeholder' => 'Remark' ])}}
    </div>

    <div >
        {{form::label('added_by', 'Added_by')}}
        {{form::text('added_by', '' , ['class'=> 'form-control', 'placeholder' => 'added_by' ])}}
    </div>
    
    
    {{form::submit('Submit',  ['class'=> 'btn btn-primary' ])}}
    
{!! Form::close() !!}

@endsection

