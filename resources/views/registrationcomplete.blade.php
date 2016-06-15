@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="reg-succesiful">Registration succesiful</h2>
			<p class="headingname">Congratulations {{Auth::user()->first_name}},</p>
			<p class="succesiful-text">Your registration to Graduates Online was succesiful, the information you entered has been succesifully submitted awaiting confirmation. An email notification will be sent to you when the process is complete. Please note that the Graduate School reserves the right to accept to accept or decline your application and such decision is not subject to your approval</p>
			<h3 class="status">Account waiting approval</h3>
		</div>
	</div>
</div>


@endsection