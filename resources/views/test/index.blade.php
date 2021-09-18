<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>test upload storage s3 aws</title>
	</head>
<body>
	<div class="container">
		<form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="file" class="form-control">
			<button type="submit" class="btn btn-primary">upload</button>
		</form>
	</div>
	<img src="{{ $imageUrl }}" alt="">
	{{ $imageUrl }}
</body>
</html>