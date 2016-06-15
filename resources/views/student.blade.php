@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="complete-notify">

				<h4><?php echo Session::get('personal')?></h4>
				<h4><?php echo Session::get('academic')?></h4>
				<h4><?php echo Session::get('education')?></h4>

		</div>
	</div>	
		
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h2 class="start-head">Student Registration</h2>
			
		<p class="sdetails">Please fill in the details below. Required details are indicated by an asterisk</p>
			<div class="panel panel-default panelshadow" id="pdetails">
				<div class="panel-heading"><h3 class="headinpanel">*Personal Details</h3></div>
				<div class="panel-body">
			<div id="postDataHere"></div>
					<form class="form-horizontal" id="studentPersonalDetails" role="form" method="POST" action="#">
						<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
						
						
						<div class="form-group" id="divPhone">
							<label class="col-md-4 control-label">*Phone Number</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sphonenumber" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						
						<div class="form-group" id="divIdnumber">
							<label class="col-md-4 control-label">National ID/Passport</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sidpp" name="idnumber" value="{{ old('idnumber') }}">
							</div>
						</div>
						
						<div class="form-group" id="divGender">
							<label class="col-md-4 control-label">Gender</label>
							<div class="col-md-6">
								<select name="gender" id="sgender" class="form-control">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>

						<div class="form-group" id="divBirthdate">
							<label class="col-md-4 control-label">Date of Birth</label>
							<div class="col-md-6">
								<input type="text" id="datepicker" class="form-control"/>
							</div>
						</div>

						<div class="form-group" id="divNationality">
							<label class="col-md-4 control-label">Nationality</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="snationality" id="snationality" placeholder="country name">
							</div>
						</div>

						<div class="form-group" id="divResidence">
							<label class="col-md-4 control-label">Current Residence</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sresidence" name="residence">
							</div>
						</div>
						
						<div class="form-group" id="divPostalcode">
							<label class="col-md-4 control-label">Postal Code</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="spcode" name="postalcode">
							</div>
						</div>
						
						<div class="form-group" id="divPostaltown">
							<label class="col-md-4 control-label">Postal Town/City</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sptown" name="postaltown">
							</div>
						</div>
						
						<div class="form-group" id="divReligion">
							<label class="col-md-4 control-label">Religion</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sreligion" name="religion">
							</div>
						</div>
						
						<div class="form-group" id="divNextkin">
							<label class="col-md-4 control-label">Next of Kin: Full name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="nextkin" name="religion">
							</div>
						</div>
						
						<div class="form-group" id="divNextkinnumber">
							<label class="col-md-4 control-label">Next of Kin:Phone number</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="nextkinnumber" name="religion">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary saveBtn" id="savePersonalDetails">
									<h4>Save Details</h4>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="panel panel-default panelshadow" id="adetails">
				<div class="panel-heading"><h3 class="headinpanel">Academic Details</h3></div>
				<div class="panel-body">

					<form class="form-horizontal" id="studentPersonalDetails" role="form" method="POST" action="#">
						<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Campus Choice</label>
							<div class="col-md-6">
								<select name="university" id="university" class="form-control">
									<option value="egerton">Egerton University</option>
									<option value="jkuat">Jomo Kenyatta University</option>
									<option value="makerere">Makerere university</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">department</label>
							<div class="col-md-6">
								<select name="department" id="department" class="form-control">
									<option value="agriculture">Agriculture</option>
									<option value="education">Education</option>
									<option value="engineering">Engineering</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Major/Program</label>
							<div class="col-md-6">
								<select name="deptprogram" id="program" class="form-control">
									<option value="chs">Crops and Horticulture</option>
									<option value="agec">Agricultural Economics</option>
									<option value="agbm">Agribusiness Management</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Study Mode</label>
							<div class="col-md-6">
								<select name="studentstudymode" id="studymomde" class="form-control">
									<option value="full">Full time</option>
									<option value="part">Part time</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Sponsor Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sponsorname" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Sponsor Email</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="sponsoremail" name="idnumber" value="{{ old('idnumber') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sponsor Telephone</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="sponsortelephone" id="snationality" placeholder="country name">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sponsor Postal Code</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" id="sponsoraddress" name="residence">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Sponsor Postal Town</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" id="sponsortown" name="residence">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary saveBtn" id="saveAcademicDetails">
									<h4>Save Details</h4>
								</button>
							</div>
						</div>
						
					</form>
				</div>
			</div>
			
		<div class="panel panel-default panelshadow" id="edetails">
				<div class="panel-heading"><h3 class="headinpanel">Education Background</h3></div>
				<div class="panel-body">
					<form class="form-horizontal" id="studentPersonalDetails" role="form" method="POST" action="#" enctype="multipart/form-data">
						<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Secondary school attended</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="secondary" value="{{ old('phone') }}">
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-4 control-label">Grade attained</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="secondarygrade" name="idnumber" value="{{ old('idnumber') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Please attach evidence(File must be pdf, doc, docx)</label>
							<div class="col-md-6">
								<input type="file" class="form-control" id="secondarycert" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Post secondary institution attended</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="postsec" name="idnumber" value="{{ old('idnumber') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Grade attained</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="postsecgrade" name="idnumber" value="{{ old('idnumber') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Please attach evidence(File must be pdf, doc, docx)</label>
							<div class="col-md-6">
								<input type="file" class="form-control" id="postseccert" name="phone" value="{{ old('phone') }}">
							</div>
						</div>
						
						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary saveBtn" id="saveEDetails">
									<h4>Save Details</h4>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<div class="row complete-registration">
				<form class="complete-btn" action="reg_cont" method="GET">
					<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
						<button type="submit"  class="button-complete">Complete Your Registration</button>
				</form>
			</div>
	
		</div>
	</div>
	
	
</div>

@endsection
