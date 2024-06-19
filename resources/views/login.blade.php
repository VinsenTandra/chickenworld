<!DOCTYPE html>
<html lang="en">
@include("layout.header", ["title" => "Login"])

<style>

.login-background{
    background-image: url('assets/img/background-image.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<body>
    <div class="d-flex h-screen">
        <div class="col-lg-7 login-background p-0"></div>
        <div class="col-lg-5 d-flex flex-wrap align-items-center p-0">
            <div class="card-body">
                <h1 class="text-center font-weight-light my-4">Login</h1>
                <form action="{{ route('login-auth') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="small mb-1" for="inputUsername">Email</label>
                        <input name="email" class="form-control py-4" id="inputUsername" type="text" placeholder="Enter email address" required />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" required />
                    </div>

                    @if ($errors->has('message'))
                        {{ $errors->first() }}
                    @endif
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <input type="submit" name="login" class="col-12 btn btn-primary" value="Login">
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include("layout.script")
</body>
</html>
