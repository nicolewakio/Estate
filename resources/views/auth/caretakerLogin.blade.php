@extends('auth.template')
    @section('content')
    <form method="POST" action="{{route('login')}}">
        @csrf
        <img src="{{asset('images/smart1.jpeg')}}" style="border-radius: 150px; width:200px;height:200px;" >
                <div class="login-title"><p>SMART ESTATE</p></div>
                    
                    <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('name') is-invalid @enderror" placeholder="Email address">
                                @error('email')
                                    <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                                @error('password')
                                    <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                            <a id="register-link" href="/caretakerRegister"><small>Joining us today?</small></a>

    </form>
    @endsection