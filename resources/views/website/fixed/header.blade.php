
 @if(session()->has('message'))
 <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
 <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger d-flex justify-content-between">{{$error}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

         </div>
     @endforeach
 @endif
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <h5>Hotline </h5>
              <a href="#"><span class="mai-call text-primary"></span> +8801712190906</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> digitaldiagnostic@gmail.com</a>
            </div>
          </div>
          {{-- <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div> --}}
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Happy to</span>-See you Healthy</a>

        {{-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              
              <a  type="button" style="margin-right:13px" class="btn btn-primary" href="{{route('website.panel')}}">Home</a>
              <br>
            </li>
            <li class="nav-item">
              <a href="{{route('website.about')}}" style="margin-right:13px" class="btn btn-primary" type="button">About Us</a>
            </li>
            <br>
           
           
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle"  style="margin-right:13px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Tests
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($categories as $category)
                <a class="dropdown-item" href="{{route('website.test.list', $category->id)}}">{{$category->name}}</a>
                {{-- <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> --}}
                @endforeach
              </div>
            </div>
          </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{route('website.category.list')}}">Category</a>
            </li> --}}
            <li class="nav-item">
              <a   style="margin-right:13px"  class="btn btn-primary" href="{{route('website.appointmentform')}}">Appoinment</a>
            </li>

            <li class="nav-item">
              @if(auth()->user())
               <!--Registration Button trigger modal -->
               
                <a href="{{route('website.user.logout')}}" class="btn btn-success" style="margin-right:13px">  Logout</a>

                @else
                    <button type="button" class="btn btn-primary" style="margin-right:13px" data-toggle="modal" data-target="#registration">
                        Registration
                    </button>

                    <button type="button" class="btn btn-primary" style="margin-right:13px" data-toggle="modal" data-target="#login">
                        Login
                    </button>
                @endif



                
            </li>  
            @if(Auth::check())
            <li class="nav-item">
              <a class="btn btn-success" style="margin-right:13px" href="{{route('website.user.profile')}}">Profile</a>
            </li>
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

 

<!-- registration Modal -->
<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="{{route('website.user.registration')}}" method="post">
          @csrf
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <label for=""> Patient Name:</label>
                  <input name="patient_name" type="text" class="form-control" placeholder="Enter patient name" required>
              </div>
              <div class="form-group">
                <label for="">Gender:</label>
                <input name="gender" type="text" class="form-control" placeholder="Enter patient gender">
            </div>
            <div class="form-group">
              <label for="">Age:</label>
              <input name="age" type="number" class="form-control" placeholder="Enter patient age">
          </div>
          

              <div class="form-group">
                <label for="">Address :</label>
                <input name="address" type="text" class="form-control" placeholder="Enter patient address">
            </div>

              <div class="form-group">
                  <label for=""> Email:</label>
                  <input name="email" type="email" class="form-control" placeholder="Enter patient email">
              </div>
              <div class="form-group">
                  <label for="">Password:</label>
                  <input name="password" type="password" class="form-control" placeholder="Enter patient password">
              </div>
              <div class="form-group">
                  <label for=""> Mobile:</label>
                  <input name="mobile" type="text" class="form-control" placeholder="Enter patient mobile">
              </div>
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Registration</button>
          </div>
      </div>
      </form>
  </div>
</div>



<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <form action="{{route('website.user.login')}}" method="post">
          @csrf
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                      <label for="">Enter User Email:</label>
                      <input name="email" type="email" class="form-control" placeholder="Enter user email" required>
                  </div>
                  <div class="form-group">
                      <label for="">Enter User Password:</label>
                      <input name="password" type="password" class="form-control" placeholder="Enter user password" required>
                  </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Login</button>
              </div>
          </div>
      </form>
  </div>
</div>
