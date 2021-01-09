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



	<div class="wrap shadow">
        <a class="btn btn-primary" href="{{ route('student.index') }}">All Student</a>
        <a class="btn btn-primary" href="{{ route('teacher.create') }}">Teacher</a>
        <a class="btn btn-primary" href="{{ route('staff.create') }}">Staff</a>
		<div class="card">
			<div class="card-body">
				<h2>Create New Student</h2>
                @if(Session::has('success') )
                    <p class="alert alert-warning">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p>

                @endif
				<form action="{{ route('student.store') }}" method="POST">
                    @csrf
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control"  type="text">
                        @if( $errors->has('name') )
                            <p class="alert alert-warning">{{ $errors->first('name') }}<button class="close" data-dismiss="alert">&times;</button></p>
                            @endif
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control"   type="text">
                        @if( $errors->has('email') )
                            <p class="alert alert-warning">{{ $errors->first('email') }}<button class="close" data-dismiss="alert">&times;</button></p>
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
						<input class="btn btn-primary" type="submit" value="Add new">
                        <a class="btn btn-info" href="{{ url('/student') }}">Back</a>
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
