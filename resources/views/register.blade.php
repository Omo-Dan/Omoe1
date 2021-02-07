@extends('master')
@section("content")
<div class="container clog">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form  action="/register" method="POST">
            @csrf
            <div class="mb-3">
                    <label for="" class="form-label">User name</label>
                <input type="text" name="name" class="form-control"  placeholder="User name"id="exampleInputEmail1" aria-describedby="emailHelp">  
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" placeholder="Email "class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">  
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password"  placeholder="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection