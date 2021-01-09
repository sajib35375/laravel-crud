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
        <a class="btn btn-primary" href="{{ route('teacher.index') }}">Back</a>
		<div class="card shadow">
			<div class="card-body">
				<table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{ $show->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $show->email }}</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>{{ $show->cell }}</td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td>{{ $show->username }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{ $show->age }}</td>
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
