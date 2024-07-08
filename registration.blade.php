<!-- used inherit to used or extends layout in content -->
@extends('task.layout') <!-- extends layout file from ' layout.blade.php ' -->
@section('title_name')
Registration
@endsection

@section('content')
<div class="container-fluid bg-transparent p-3 w-50 mt-5">
<div class="row">
<div class="col-md-3">
</div>

<div class="col-md-7">
<h5 class="text-center text-dark mt-5">Add User </h5>
<hr class="w-25 mx-auto border border-1 border-dark">

</div>
</div>
</div>    


<!-- contact here -->

<div class="modal-dialog">
    
<div class="modal-content p-4">
@if(session('msg'))
{
    <span class="alert alert-success" >{{ session('msg') }}</span>
}
@endif
<form method="post">
    @csrf
<div class="input-group  mx-auto mt-4 ">
<span class="input-group-text"><i class="bi bi-inbox"></i></span>
<input type="text" name="name" placeholder="Name *" class="form-control">
</div>
<div class="input-group  mx-auto mt-4 ">
<span class="input-group-text"><i class="bi bi-inbox"></i></span>
<input type="text" name="email" placeholder="Email *" class="form-control">
</div>

<div class="input-group  mx-auto mt-3">
<input type="submit" name="contact" value="Add User" class="btn btn-danger bg-danger ms-3">

</div>


</form>




</div>
</div>
</div>



@endsection