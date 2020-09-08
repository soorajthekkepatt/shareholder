@extends('layouts.adminapp')

@section('content')
<section class="content">
<form method='post' action='/saveshareholders'>
{{ csrf_field() }}
<label for="exampleInputFile">Add Shareholder</label>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputFile">Name :</label>
                <input type="text" name="sharehold_name"  class="form-control" placeholder="First Name" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Email :</label>
                <input type="text" name="sharholdemail"  class="form-control" placeholder="Email" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Mobile :</label>
                <input type="text" name="sharehold_mob"  class="form-control" placeholder="Mobile" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Country :</label>
                <input type="text" name="sharehold_country"  class="form-control" placeholder="Country" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Area :</label>
                <input type="text" name="sharehold_area"  class="form-control" placeholder="Area" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Unit :</label>
                <input type="text" name="sharehold_unit"  class="form-control" placeholder="Unit" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Emirates :</label>
                <input type="text" name="sharehold_emirates"  class="form-control" placeholder="Emirates" >
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Address :</label>
                <textarea class="form-control" rows="5" id="comment" name="sharehold_add" placeholder="Address"></textarea>
              </div>

            </div>
            <input type='submit' name='submit' value='Create' class="btn btn-primary">
          </form>

</section>
@endsection
