@extends('master')
@section("content")
<div class=" custom-product">
   <div class="col-sm-4"><a href=""></a></div>

   <div class="col-sm-4">
   <div class="trending-wrapper">
      <h2>Results for the searched product</h2>
      @foreach($products as $item)
      <div class="searched-item">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="trending-img">
            <div class="">
                    <h2>{{$item['name']}}</h2>
                    <h5>{{$item['description']}}</h5>
            </div>
      </a>
    </div>
    @endforeach
    </div>
   </div>
</div>
</div>
@endsection