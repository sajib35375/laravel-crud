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
		<div class="card">
			<div class="card-body">
				<table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{ $stu->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $stu->email }}</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>{{ $stu->cell }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{ $stu->username }}</td>
                    </tr>
                </table>
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
