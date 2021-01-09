<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap ">
        <a class="btn btn-primary" href="{{ route('teacher.index') }}">All Teacher</a>
        <a class="btn btn-primary" href="{{ route('student.create') }}">Student</a>
        <a class="btn btn-primary" href="{{ route('staff.create') }}">Staff</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Add Teacher</h2>
                @if( Session::has('success') )
                    <p class="alert alert-success">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p>
                @endif
				<form action="{{ route('teacher.store') }}" method="POST">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
                        @if( $errors->has('name') )
                            <p class="alert alert-danger">{{ $errors->first('name') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
                        @if( $errors->has('email') )
                            <p class="alert alert-danger">{{ $errors->first('email') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
                        @if( $errors->has('cell') )
                            <p class="alert alert-danger">{{ $errors->first('cell') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
                        @if( $errors->has('username') )
                            <p class="alert alert-danger">{{ $errors->first('username') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
                    <div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
                        @if( $errors->has('age') )
                            <p class="alert alert-danger">{{ $errors->first('age') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
                        @if( $errors->has('password') )
                            <p class="alert alert-danger">{{ $errors->first('password') }}<button class="close" data-dismiss="alert">&times;</button></p>

                        @endif
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
