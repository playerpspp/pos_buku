@include('head')

<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-content">
                    <div class="login-form">
                        <h4>Login</h4>
                        @if($errors->any())
                        {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}
                        @endif
                        <form autocomplete="off" action="/actlogin" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Username :</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            </div>
                           
                          <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Log In</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@include('foot')