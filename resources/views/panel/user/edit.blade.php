@extends('panel.layouts.app')

@section('content')



<div class="pagetitle">
  <h1>Edit User</h1>

  </div>

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User</h5>

              
              <form action="" method="post">
              {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-12 col-form-label">Name</label>
                  <div class="col-sm-12">
                    <input type="text" name="name" value="{{ $getRecord->name }}" required class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-12 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" name="email" value="{{  $getRecord->name}}" readonly  class="form-control">
                   
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-12 col-form-label">Password</label>
                  <div class="col-sm-12">
                    <input type="text" name="password" class="form-control">
                    (Do you want to change password please add. Otherwise leave)
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-12 col-form-label">Role</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="role_id" required>
                        <option  value="">Select</option>
                        @foreach($getRole as $value)
                        <option {{ ( $getRecord->role_id == $value->id) ?  'selected': '' }} value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

          
                <div class="row mb-3">
                  <div class="col-sm-12" >
                    <button type="submit" class="btn btn-primary">Update </button>
                  </div>
                </div>

              </form>   

            </div>
          </div>

        </div>

     
    </section>





@endsection
  