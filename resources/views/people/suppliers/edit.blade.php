
@extends('layouts.admin')

@section('content')
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Supplier</span>
    <h3 class="page-title">Edit Supplier</h3>
  </div>
</div>

<!-- End Page Header -->

<div class="row mb-3">
	<div class="col">
	  <a href="{{route('people.suppliers.index')}}" class="mb-2 btn btn-info mr-2"><i class="fa fa-arrow-left pr-2" aria-hidden="true"></i> Manage Supplier</a>
	</div>
</div>

<div class="col-lg-12 mb-4">
	<div class="card card-small">
 		<form id="supplierForm" action="{{route('people.suppliers.update', $supplier->id)}}" method="post">
 			@csrf
			<div class="row p-3 pt-4">
		        <div class="col-sm-12 col-md-6">
		            <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Name</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
		                </div>
		                <input type="text" class="form-control" placeholder="Supplier Name" aria-label="Supplier Name" aria-describedby="basic-addon1" name="name" value="{{$supplier->name}}"> </div>
		            </div>
		            <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Phone</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
		                </div>
		                <input type="text" class="form-control" placeholder="Supplier Phone" aria-label="Supplier Phone" aria-describedby="basic-addon1" name="phone" value="{{$supplier->phone}}"> </div>
		            </div>
		            <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Email</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
		                </div>
		                <input type="email" class="form-control" placeholder="Supplier Email" aria-label="Supplier Email" aria-describedby="basic-addon1" name="email" value="{{$supplier->email}}"> </div>
		            </div>
		            <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Company</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
		                </div>
		                <input type="text" class="form-control" placeholder="Supplier Company" aria-label="Supplier Company" aria-describedby="basic-addon1" name="company" value="{{$supplier->company}}"> </div>
		            </div>
		        </div>
		        <div class="col-sm-12 col-md-6">
					<div class="form-group">
						<div class="input-group mb-3">
			                <div class="input-group-prepend">
			                  <span class="input-group-text" id="basic-addon1"><strong>Status</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
			                </div>
							<select name="status" id="inputState" class="form-control"  aria-label="status" aria-describedby="basic-addon1" >
							  <option value="1" {{$supplier->status == 1 ? 'selected' : ''}}>Active</option>
							  <option value="0" {{$supplier->status == 0 ? 'selected' : ''}}>Inactive</option>
						    </select>
						</div>
					</div>
		            <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Address</strong>  <i class="fa fa-asterisk custom-star text-danger" data-placement ="top" aria-hidden="true"></i></span>
		                </div>
		                <input type="text" class="form-control" placeholder="Supplier Address" aria-label="Supplier Address" aria-describedby="basic-addon1" name="address" value="{{$supplier->address}}"> </div>
		            </div>
		             <div class="form-group">
		              <div class="input-group mb-3">
		                <div class="input-group-prepend">
		                  <span class="input-group-text" id="basic-addon1"><strong>Supplier Details</strong></span>
		                </div>
		                <textarea class="form-control" placeholder="Supplier Details" aria-label="Supplier Details" aria-describedby="basic-addon1" name="details">{{$supplier->details}}</textarea></div>
		            </div>
		            <button type="submit" class="mb-2 btn btn-primary mr-2 float-right">Update</button>
		        </div>
	      	</div>
      	</form>
	</div>
</div>
@endsection

@section('script')
<!-- Validation js for forms-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
	$(document).ready(function() {

		 $('#supplierForm').validate({ // initialize the plugin
            rules: {

                name: {
                    required: true,
                    maxlength: 30
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    maxlength: 11,
                    minlength:11
                },
                company: {
                	required: true
                },
                address: {
                	required: true,
                	maxlength: 60
                },
                status: {
                	required: true
                }

            },
            messages: {

            }
        });

	});
</script>
@endsection

