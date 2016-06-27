@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<h2 class="start-head">A few more details</h2>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/studentdetails') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Registration number:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="regnumber" value="{{ old('regnumber') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Campus/University</label>
							<div class="col-md-6">
								<select class="form-control" name="campus">
								<option value="Egerton">Egerton University</option>
								<option value="JKUAT">Jomo Kenyatta University</option>
								<option value="Makerere">Makerere University</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Faculty</label>
							<div class="col-md-6">
								<select class="form-control" name="faculty">
								<option value="Agriculture" >Agriculture</option>
								<option value="Engineering" >Engineering</option>
								<option value="Education" >Education</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Major/Program</label>
							<div class="col-md-6">
								<select class="form-control" name="program">
								<option value="Agribusiness">Agribusiness Management</option>
								<option value="Economics">Agricultural Economics</option>
								<option value="Horticulture">Crop amd horticulture</option>
								</select>
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<h4>Save and proceed</h4>
								</button>
							</div>
						</div>
					</form>
	</div>
</div>
@endsection