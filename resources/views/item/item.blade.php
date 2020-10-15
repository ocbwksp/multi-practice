
@extends('layouts.app')

@section('content')
<br>
{{-- <h1 style="text-transform: uppercase; background: #35424a;border: 2px solid red;
border-radius: 7px; border-color: coral; color: white";
 class="d-flex justify-content-center ">
 <strong> This is Item Page</strong> </h1> --}}
<br>
{{-- @if(!Auth::guest())
<h1>added by  {{ Auth::user()->name }}</h1>
@endif --}}


@if(!Auth::guest())
<div  >
  <a href="items/create" class="btn btn-secondary float-right">Add New Item</a>
</div>
@endif

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




    @if(count($items) >0)
        
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
              <thead class="thead-dark">
                <tr >
                  <th><strong>Ser No</strong></th>
                  <th><strong>PVMS</strong></th>
                  <th><strong>Name</strong></th>
                  <th><strong>Aesculap REF</strong></th>
                  <th><strong>Aesculap CAT Page</strong></th>
                  <th><strong>Remark</strong></th>
                  {{-- <th><strong>Added By </strong></th> --}}
                  
                  <th><strong>View Item</strong></th>
                </tr>
            </thead>
            @foreach ($items as $item)
              <tbody>
                <tr>
                  <th>{{$loop->iteration}}</th>
                  <th>{{$item->pvms}}</th>
                  <th>{{$item->name}}</th>
                  <th>{{$item->aesculap_ref}}</th>
                  <th>{{$item->aesculap_cat_page}}</th>
                  <th>{{$item->remark}}</th>
                  {{-- <th>{{$item->added_by}}</th> --}}
                  
                  
                  {{-- <th><h4><a href="/posts/{{$post->id}}">Open {{$post->title}}</a></h4></th> --}}
                  <th><a href="/items/{{$item->id}}" class="btn btn-primary">View Item</a></th> 
                </tr>
              </tbody>
            @endforeach
            </table>
            {{ $items->links() }}
          </div>
    @else 

    <p>No Item Found</p>
    
    @endif

    
 
@endsection


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>