@extends('index')

@section('content')
<style type="text/css">
  .btn-circle.btn-xl {
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 18px;
    line-height: 1.33;
}
</style>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <br><br><br>
    
    <div id="generate">
      <h5 class="text-center">Click Here</h5>
      <p class="text-center">
      <small class="text-warning mr-1">
        <i style="text-align: center;" class="fas fa-arrow-down"></i>
      </small>
      </p>
      <div class="d-flex justify-content-center">
         <div class="row">
           <div class="col-sm-12">
            <a href="generate"><button type="button" class="btn btn-block btn-outline-warning btn-lg btn-circle btn-xl"><span>Generate Schedule</span>
          </button></a>
           </div>
         </div>
      </div>
    </div>
    <br><br>


    
@endsection