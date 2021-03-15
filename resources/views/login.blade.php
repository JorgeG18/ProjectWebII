@extends('menu')

@section('title')
    Login
@endsection


@section('content')
<div class="card " style="justify-content: center; align-Items: center; height: 548px; margin-top:100px ">
    <article class="card-body" style="width:600px; ">
        <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
        <hr>
        <form>
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input name="email" class="form-control" placeholder="Email or login" type="email" value={{old('name')}}>
            {!! $errors->first('name', '<small>:message</small><br>') !!}
        </div> <!-- input-group.// -->
        </div> <!-- form-group// -->
        <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
             </div>
            <input name="password" class="form-control" placeholder="******" type="password" value={{old('name')}}>
            {!! $errors->first('name', '<small>:message</small><br>') !!}
        </div> <!-- input-group.// -->
        </div> <!-- form-group// -->
        <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
        </div> <!-- form-group// -->
        <p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
        </form>
    </article>
    </div> <!-- card.// -->
@endsection