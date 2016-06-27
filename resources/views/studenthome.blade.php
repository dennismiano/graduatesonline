@extends('app')

@section('content')

<div class="container-fluid main-space">
	<div class="container">
		<div class="col-md-3">
			<div class="profile-details">
				<img class="profile-pic" src="{{ asset('/img/avatar.png') }}"/>
				<p class="user-name"><b>{{ Auth::user()->first_name}}&nbsp{{Auth::user()->last_name}}</b></p>
				<p class="user-type">Student</p>
			</div>
				<img class="change-icon" src="{{ asset('/img/change-icon.png') }}"/>
				<p>Change profile picture</p>
				<img class="change-icon" src="{{ asset('/img/edit-profile.png') }}"/>
				<p>Edit profile</p>
				
				<h4 class="rtc-head"><b>RTC TRACKING</b></h4>
				<img class="change-icon" src="{{ asset('/img/rtcprogress-icon.png') }}"/>
				<p>View RTC progress</p>
				<img class="change-icon" src="{{ asset('/img/message-icon.png') }}"/>
				<p>Messages</p>
				<img class="change-icon" src="{{ asset('/img/myfiles-icon.png') }}"/>
				<p>My Files</p>
				<img class="change-icon" src="{{ asset('/img/received-icon.png') }}"/>
				<p>Received Files</p>
				
		</div>
		
		<div class="col-md-7">
			<div class="question-post">
				<h5><b>Whats your question?</b></h5>
				<form>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<textarea class="form-control postarea" rows="4"></textarea>
					<button type="submit" class="form-control post-btn">Post Question</button>
				</form>
			</div>
		</div>
		
		<div class="col-md-2">
			<p>Adverts</p>
		</div>
	</div>
</div>
@endsection