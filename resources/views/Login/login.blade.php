<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/logodanone.jpg') }}">

    <title>Remidi | </title>

    <!-- Bootstrap -->
    <link href="{{asset ('assets2/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('assets2/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('assets2/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset ('assets2/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset ('assets2/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <h1>Login Form</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                <a class="reset_pass" href="{{route('password.request')}}"><b>Lost Your Password?</b></a>
              </div>
              <div>
                  <button type="submit" class="btn btn-primary">Log In</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Dont Have Account?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-github-alt"></i> Remidi Ridho!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <h1>Create Account</h1>
                  <div>
                      <input type="text" name="name" class="form-control" placeholder="Username" required="" />
                  </div>
                  <div>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                  </div>
                  <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                  </div>
                  <div>
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required="" />
                  </div>
                  <div>
                      <button type="submit" class="btn btn-primary">Register & Login</button>
                  </div>

                  <div class="clearfix"></div>

                  <div class="separator">
                    <p class="change_link">Have Account?
                      <a href="#signin" class="to_register">Login</a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                      <h1><i class="fa  fa-github-alt"></i> Danone Project!</h1>
                      <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                  </div>
                </form>
              </section>
            </div>
          </div>
         </div>
        </div>
      </body>
    </html>


