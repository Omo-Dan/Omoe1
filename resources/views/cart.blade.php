@extends('master')
@section("content")
<div class=" custom-product">
   <div class="col-sm-10">
     <div class="trending-wrapper">
      <h2>All items in cart</h2>
      <a  class="btn btn-success" href="order">Order now</a> <br><br>
      @foreach($products as $item)
      <div class="row searched-item list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                   <img src="{{$item->gallery}}" class="trending-img">
                </a>
            </div>
            <div class="col-sm-3">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
            </div>
            <div class="col-sm-3">
                <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Delete Item</a>
            </div>
    </div>
    @endforeach
    </div>
   </div>
</div>
</div>
@endsection