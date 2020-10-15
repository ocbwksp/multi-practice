
@extends('layouts.app')

@section('content')
<h1>This is Item Page</h1>
<div  >
  <a href="items/create" class="btn btn-secondary float-right">Add New Item</a>
</div>

<div class="col-md-6" >
    <form action="/search" method="GET">
        <div class="input-group">
            <input type="search" name='search' class="form-control">
            <span class="form-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
               
            </span>
            <br>
            
        </div>
       
    </form>

  

</div>


<br>


    @if(count($item) >0)
        
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
              <thead>
                <tr >
                  <th><strong>Ser No</strong></th>
                  <th><strong>PVMS</strong></th>
                  <th><strong>Name</strong></th>
                  <th><strong>Aesculap REF</strong></th>
                  <th><strong>Aesculap CAT Page</strong></th>
                  <th><strong>Remark</strong></th>
                  <th><strong>Added By </strong></th>
                  <th><strong>View Item</strong></th>
                </tr>
            </thead>
            @foreach ($item as $item)
              <tbody>
                <tr>
                  <th>{{$loop->iteration}}</th>
                  <th>{{$item->pvms}}</th>
                  <th>{{$item->name}}</th>
                  <th>{{$item->aesculap_ref}}</th>
                  <th>{{$item->aesculap_cat_page}}</th>
                  <th>{{$item->remark}}</th>
                  <th>{{$item->added_by}}</th>
                  
                  {{-- <th><h4><a href="/posts/{{$post->id}}">Open {{$post->title}}</a></h4></th> --}}
                  <th><a href="/items/{{$item->id}}" class="btn btn-primary">View Item</a></th> 
                </tr>
              </tbody>
            @endforeach
            </table>
          </div>
    @else 

    <p>No Item Found</p>
    
    @endif
 
@endsection

