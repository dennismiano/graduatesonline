@extends('app')

@section('content')
<div class="container">
		<img class="pencilicon" src="{{ asset('/img/pencil-icon.png') }}">
		<p class="regis">Supervisor Registration</p>
		<p class="fillform">Kindly Fill in the form below...</p>
	<div class="form-bg">
		<h4 class="personal-details">Personal Details</h4>
			<form action="#" method="post" role="form">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						<label for="phone">Phone Number</label>
						<input type="text" id="phone" name="phone_number" class="form-control full-stretch" placeholder="+254">
						</div>
						
						<div class="form-group">
						<label for="phone">Cell Number</label>
						<input type="text" id="phone" name="cell_number" class="form-control full-stretch" placeholder="+254">
						</div>
						
						<div class="form-group">
						<label for="idpp">National ID/Passport</label>
						<input type="text" id="idpp" name="id_no" class="form-control full-stretch" placeholder="ID/Passport No.">
						</div>
						
						<div class="form-group">
						<label for="country">Residence Country</label>
						<select class="form-control full-stretch" name="r_country" id="country">
						<option>Kenya</option>
						<option>Tanzania</option>
						<option>Uganda</option>
						<option>Other</option>
						</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						<label for="address">Physical Address(Town/City)</label>
						<textarea type="text" id="address" name="address" class="form-control full-stretch" placeholder="Enter your address(Postal and town)"></textarea>
						</div>
						
						<div class="form-group">
						<label for="university">Current University</label>
						<select class="form-control full-stretch" name="r_country" id="country">
						<option>Egerton University</option>
						<option>JKUAT University</option>
						<option>Makerere University</option>
						</select>
						</div>
						
						<div class="form-group">
						<label for="department">Current Deapartment</label>
						<select class="form-control full-stretch" name="department" id="department">
						<option>Agriculture</option>
						<option>Crop & Horticulture</option>
						<option>Soils</option>
						</select>
						</div>
						
						<div class="form-group">
						<label for="experience">Work experience(When did you start?)</label>
						<select class="form-control full-stretch" name="experience" id="experience">
						<option>1970</option>
						<option>1971</option>
						<option>1972</option>
						<option>1973</option>
						</select>
						</div>
						
					</div>
				</div>	
					<div class="row">
						<h4 class="personal-details">Education & Training</h4>
						<div class="col-md-6">
							<div class="form-group">
							<label for="education">Level of Education</label>
							<select class="form-control full-stretch" name="education" id="education">
							<option>Technical/Vocational Certification</option>
							<option>Diploma</option>
							<option>Bachelors</option>
							<option>Masters</option>
							<option>PHD</option>
							</div>
							
							<div class="form-group">
							<label for="inputfile">Upload supporting documents</label>
							<input type="file" id="inputfile" class="full-stretch">
							<input type="file" id="inputfile" class="full-stretch">
							<input type="file" id="inputfile" class="full-stretch">
							</div>
							
							<div class="form-group">
							<label for="institution_attended">Institution Attended</label>
							<input type="text" id="institution_attended" name="institution_attended" class="form-control full-stretch" placeholder="What institution did you attend">
							</div>
							
							<div class="form-group">
							<label for="institution_attended">Institution Country</label>
							<input type="text" id="institution_country" name="institution_country" class="form-control full-stretch" placeholder="Where is the institution located?">
							</div>
							
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							<label for="completion">Year of completion</label>
							<select class="form-control full-stretch" name="completion" id="completion">
							<option>1970</option>
							<option>1971</option>
							<option>1972</option>
							<option>1973</option>
							</select>
							</div>
							
							<div class="form-group">
							<label for="thesis">Name of your thesis</label>
							<input type="text" id="thesis" name="thesis" class="form-control full-stretch" placeholder="Name of your thesis">
							</div>
							
							<div class="form-group">
							<label for="inputfile">Upload Your thesis</label>
							<input type="file" id="inputfile" class="full-stretch">
							<input type="file" id="inputfile" class="full-stretch">
							<input type="file" id="inputfile" class="full-stretch">
							</div>
							
							<div class="form-group">
							<label for="address">Additional Description</label>
							<textarea type="text" id="address" name="address" class="form-control full-stretch" placeholder="Additional information not captured above"></textarea>
							</div>
							
						</div>
					</div>
					
					<div class="row">
							<h4 class="personal-details">Publications</h4>
						<div class="col-md-6">
							<div class="form-group">
							<label for="completion">Type of publication</label>
							<select class="form-control full-stretch" name="completion" id="completion">
							<option>Journal Articles</option>
							<option>Research reports</option>
							<option>Conference proceedings</option>
							<option>Presentations</option>
							<option>Software Publications</option>
							<option>Others</option>
							</select>
							</div>
							
							<div class="form-group">
							<label for="pub_title">Title of your publication</label>
							<input type="text" id="pub_title" name="pub_title" class="form-control full-stretch" placeholder="Title of your publication">
							</div>
							
							<div class="form-group">
							<label for="pub_year">Year of publication</label>
							<select class="form-control full-stretch" name="pub_year" id="pub_year">
							<option>1970</option>
							<option>1971</option>
							<option>1972</option>
							<option>1973</option>
							</select>
							</div>
						</div>
					</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
	</div>
</div>
@endsection
