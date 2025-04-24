@extends('admin.layouts.layout')

@section('content')

 
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Hi, {{$user->name}}</h2>
        <p class="section-lead">
          Change information about yourself on this page.
        </p>

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-12">
            
            <div class="card">
              <form method="post" class="needs-validation" action="{{ route('profile.update') }}" novalidate="">
                @csrf
                @method('PATCH')
                
                <div class="card-header">
                  <h4>Profile Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name', $user->name)}}">
                        @if ($errors->has('name'))
                            <code>{{$errors->first('name')}}</code>
                        @endif
                      </div>
                      
                      <div class="form-group col-md-6 col-12">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="name" value="{{old('email', $user->email)}}">
                        @if ($errors->has('email'))
                            <code>{{$errors->first('email')}}</code>
                        @endif
                      </div>
                    </div>
            
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            
            <div class="card">
              <form method="post" class="needs-validation" action="{{ route('password.update') }}" novalidate="">
                @csrf
                @method('put')
                
                <div class="card-header">
                  <h4>Password</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Current Password</label>
                        <input type="password" class="form-control" name="current_password" id="update_password_current_password">
                        @if ($errors->updatePassword->has('current_password'))
                            <code>{{$errors->updatePassword->first('current_password')}}</code>
                        @endif
                      </div>
                      
                      <div class="form-group col-12">
                        <label>New Password</label>
                        <input type="password" class="form-control" name="password" id="update_password_password">
                        @if ($errors->updatePassword->has('password'))
                            <code>{{$errors->updatePassword->first('password')}}</code>
                        @endif
                      </div>

                      <div class="form-group col-12">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="update_password_password_confirmation">
                        @if ($errors->updatePassword->has('password_confirmation'))
                            <code>{{$errors->updatePassword->first('password_confirmation')}}</code>
                        @endif

                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

          </div>
          </div>
        </div>
    </section>
  

@endsection