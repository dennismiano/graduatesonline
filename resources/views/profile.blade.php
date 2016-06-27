@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
					<p class="headingname">Hello {{Auth::user()->first_name}},</p>
					<p class="welcome-text">Welcome to Graduates online.</p>
					<p class="setaccount_text">Let us set up an account for you,</p>
					<p class="specify">But before we continue, please let us know who you are...</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<div class="form-container">
				<img class="profile-icons" src="{{ asset('/img/student-icon.png') }}">
				<p class="category-head">STUDENT</p>
				<p class="category-details">Our student program allows students to undertake RTC training virtually online. Students can interact and exchange academic documents with their supervisor and complete other RTC activities online. Get notifications for defence dates and any upcoming deadline on RTC activities. And whats more, an access to a live forum with mentors, graduates alumni and prospective employers.</p>
					<form class="fbutton" action="registration" method="post">
						<input type="hidden" name="user_group" value="{{1}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="button-style" type="submit">Join as student</button>
					</form>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="form-container">
				<img class="profile-icons" src="{{ asset('/img/supervisor-icon.png') }}">
				<p class="category-head">SUPERVISOR</p>
				<p class="category-details">This section is strictly for approved lecturers from recognised universities. 
Supervision has been made easy, get notifications for new allocations, new submission as soon as they happen. Review students submissions, and make your comments in real time. Become part of a bigger academic community with access to a live forum with students and stakeholders.</p>
					<form class="fbutton" action="registration" method="post">
						<input type="hidden" name="user_group" value="{{2}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="button-style" type="submit">Join  as Supervisor</button>
					</form>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="form-container">
				<img class="profile-icons" src="{{ asset('/img/mentor-icon.png') }}">
				<p class="category-head">MENTOR</p>
				<p class="category-details">Mentors help add value to graduate education. They assist students transition from being just learners to suitable candidates in the market. Graduate alumni, practising professionals from the agriculturals sector, researchers, university lectures and other staff all meet in a live forum to shape graduates, respond directly to their questions and offer assistance where necessary.</p>
					<form class="fbutton" action="registration" method="post">
						<input type="hidden" name="user_group" value="{{3}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="button-style" type="submit">Join as Mentor</button>
					</form>
			</div>
		</div>
	</div>
</div>
@endsection
