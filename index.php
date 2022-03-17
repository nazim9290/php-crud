<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include_once "Header.php"?>


		<div class="container my-5">
			<?php
$conn = mysqli_connect("localhost", "root", "", "crude") or die("Connection failed");
$sql = "SELECT * FROM student JOIN studentclass student.sclass = studentclass.cid";
$result = mysqli_query($conn, $sql) or die("query unsuccessfull");

?>
			<table class="table table-bordered border-primary">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">ADDRESS</th>
							<th scope="col">Class</th>
							<th scope="col">Phone</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>@mdo</td>
							<td><button type="button" class="btn btn-success">Edit</button>
									<button type="button" class="btn btn-danger">Delete</button>
								</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							<td>@fat</td>
							<td><button type="button" class="btn btn-success">Edit</button>
									<button type="button" class="btn btn-danger">Delete</button>
								</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry the Bird</td>
							<td>@twitter</td>
							<td>@twitter</td>
							<td>@twitter</td>
							<td><button type="button" class="btn btn-success">Edit</button>
										<button type="button" class="btn btn-danger">Delete</button>
							</td>
						</tr>
					</tbody>
			</table>
		</div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>