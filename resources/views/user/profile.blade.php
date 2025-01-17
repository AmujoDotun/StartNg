@extends('layouts.user-dashboard')

@section('content')
<br><br><br>

<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
        @if($user->profile_pic)
        <img src="/storage/profile_pictures/{{$user->profile_pic}}"  name="aboutme" width="140" height="140" class="img-circle">
        @else
        <img src="/storage/profile_pictures/noimage.jpg"  name="aboutme" width="140" height="140" class="img-circle">
        @endif
        </a>
        <h3>{{$user->first_name}} {{$user->last_name}}</h3>
        <em>click my face for more</em>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{$user->username}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    @if($user->profile_pic)
                    <img src="/storage/profile_pictures/{{$user->profile_pic}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @else
                    <img src="/storage/profile_pictures/noimage.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @endif
                    <h3 class="media-heading">{{$user->first_name}} {{$user->last_name}}</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Username: {{$user->username}}</li>
                        <li class="list-group-item">Email: {{$user->email}}</li>
                        <li class="list-group-item">Phone: {{$user->phone}}</li>
                        <li class="list-group-item">Status: {{$user->status}}</li>
                    </ul>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>{{$user->about}}</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about {{$user->username}}</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="span3 well">
        <center><h3 class="media-heading">Edit Profile</h3></center>
        <center>
        <form class="user-form" method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="username"><strong>User Name</strong></label></div>
                        <input type="text" class="form-control" id="username"  placeholder="Username" name="username" value="{{$user->username}}">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <div><label for="email"><strong>Email Address</strong></label></div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}">
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="fname"><strong>First Name</strong></label></div>
                        <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name" value="{{$user->first_name}}">
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <div><label for="lname"><strong>Last Name</strong></label></div>
                        <input type="text" class="form-control" name="last_name" id="lname" placeholder="Last Name" value="{{$user->last_name}}">
                        </div>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Phone</strong></label> </div>
                        <input type="number" class="form-control" name="phone" class="phone" id="phone" placeholder="Phone Number" value="{{$user->phone}}">
                    </div>
                </div>
                        <div class="col-md-4">
                    <div class="form-group">
                        <div> <label for="address"><strong>Status</strong></label> </div>
                        <input type="text" class="form-control" name="status" class="about" id="status" placeholder="Status" value="{{$user->status}}">
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <div><label for="about"><strong>About Me</strong></label> </div>
                        <textarea name="about"  class="form-control"id="about" class="about" cols="30" rows="5" placeholder="About Me">{{$user->about}}</textarea>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-8">
                        <div> <label for="address"><strong>Profile Picture</strong></label> </div>
                        <input type="file" class="form-control" name="profile_pic"><br>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                 <div class="col-md-8">
                    <div class="form-group">
                <button class="but">UPDATE PROFILE</button>
            </div>
        </div>
    </div>
            
        </form>
    </div>
</div>
</center>
<br>
</main>
@endsection
