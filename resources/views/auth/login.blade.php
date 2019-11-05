@extends('layouts.auth')

@section('content')
<div class="container" id="login">
    <div class="main-card mb-3 card">
        <div class="card-body" style="padding:0px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/background/bg-login.png" width="300" height="100%"/>
                </div>
                <div class="col-md-8" id="login-form">
                    <div class="container" id="text-login">
                        <h3><strong>Welcome Back!</strong></h3>
                        <p>Please, login with your username and password</p>
                    </div>
                    @if(session()->get( 'response_fail' ) != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('response_fail') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleEmail" class="">Username</label>
                            <input name="admin_username" id="admin_username" placeholder="Username" type="text" class="form-control-sm form-control" required>
                        </div>
                        <div class="position-relative form-group "><label for="examplePassword" class="">Password</label>
                            <input name="admin_password" id="admin_password" placeholder="Password" type="password" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p style="text-align:center;">Copyright © 2019 <strong>Kiara Bali Harum.</strong> All rights reserved.</p>
</div>
@endsection
