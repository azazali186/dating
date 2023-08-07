@extends('admin.layout.main')
@push('title')
Company
@endpush
@section('main-section')
<?php $pagename = 'all-seller-list'  ?>
  


             <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{route('save.user')}}" method="POST" > 
    	@csrf
      <div class="row">
          
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Personal Information</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <input  type="hidden" name="id" value="<?php if(isset($user['id']) && !empty($user['id'])){
            	echo $user['id']; } ?>">

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text"  class="form-control" value="<?php if(isset($user['name']) && !empty($user['name'])){
            	echo $user['name']; }  ?>" name="name" onkeyup="Validatename()" id="name"   placeholder="Enter your name" pattern="[A-Z a-z]{3,}" required >
				<span id="namewarning" style="color: red"></span> 
              </div>
             
              
              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" class="form-control" value="<?php if(isset($user['email']) && !empty($user['email'])){
            	echo $user['email']; } ?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email" placeholder="Email Address" >
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Marital Status</label>
                 <select name="matrital_status" class="form-control">
                                            <option value="Single" <?php if(isset($user['matrital_status']) && $user['matrital_status']=='Single'){?> selected <?php } ?> >Single</option>
                                            <option value="Married" <?php  if(isset($user['matrital_status']) && $user['matrital_status']=='Married'){?> selected <?php } ?>>Married</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Looking For</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" name="lookingfor"   value="men" <?php if(isset($user['lookingfor']) && $user['lookingfor']=='men'){echo "checked"; } ?> > Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="lookingfor"   value="women" <?php if(isset($user['lookingfor']) && $user['lookingfor']=='women'){ echo "checked"; } ?> > Female
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Mobile</label>
                <input type="text"  class="form-control" value="<?php if(isset($user['mobile']) && !empty($user['mobile'])){
            	echo $user['mobile']; }  ?>" name="mobile" placeholder="Enter mobile number" onkeyup="Validatemobile()" id ="mobile"  pattern="[0-9]{10,}" title="mobile number must be a valid formate" required >
				<span id="sp" style="color:red"></span>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender"  value="men" <?php if(isset($user['gender']) && $user['gender'] == 'men'){ echo "checked";  } ?> > Male
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender"   value="women" <?php if(isset($user['gender']) && $user['gender'] == 'women'){ echo "checked"; } ?>> Female
              </div>
             

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Address Details</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputProjectLeader">Address</label>
                <input type="text"  class="form-control" value="<?php if(isset($user['city']) && !empty($user['city'])){
                echo $user['city'];} ?>" name="city" id="currentaddress" onkeyup="Validatecurrentaddress()"  placeholder="Current Address" required >
				<span id="currentaddresswarning" style="color: red"></span> 
              
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">City</label>
                <input type="text"  class="form-control" value="<?php if(isset($user['city']) && !empty($user['id'])){
            	echo $user['city']; }  ?>"  name="city" id="city" onkeyup="Validatecity()"  pattern="[A-Z a-z]{3,}" placeholder="Enter City" required >
				<span id="citywarning" style="color: red"></span> 
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
      
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection