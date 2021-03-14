@extends('menu')

@section('title')
    Login
@endsection


@section('content')
<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-4 col-md-3">
            <form class="form-container">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">                    
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
              
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
        </section>
    </section>
</section>
@endsection