<?php
include_once 'libs/load.php';
class success
{
    public function conn()
    {
        $this->conn=database::con();
        return $this->conn;
    }
}

$obj=new success();
$o=$obj->conn();
$sql="SELECT `image` FROM `images` WHERE `id`=1";
$result=$o->query($sql);
if ($result->num_rows==1) {
    $row=$result->fetch_assoc();
    // print_r($row);
    $n=base64_encode($row['image']);
} else {
    throw new Exception('Fetch Error');
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>Album example · Bootstrap v5.1</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



	<!-- Bootstrap core CSS -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


</head>

<body>


	<div class="sticky-top">
		<header class="p-3 mb-3 border-bottom" style="
    background-color: darkseagreen;
">
			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
						<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
							<use xlink:href="#bootstrap"></use>
						</svg>
					</a>

					<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
						<li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
						<li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
						<li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
						<li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
					</ul>

					<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
						<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
					</form>

					<div class="dropdown text-end">
						<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
							data-bs-toggle="dropdown" aria-expanded="false">
							<img src="<?php echo base64_encode($row['image']);?>"
								alt="mdo" width="32" height="32" class="rounded-circle">
						</a>
						<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
							<li><a class="dropdown-item" href="#">New project...</a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Profile</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Sign out</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
	</div>

	<main>

		<img
			src="<?php echo base64_encode($row['image'])?>">
		<section class="py-5 text-center container">
			<div class="row py-lg-5">
				<div class="col-lg-6 col-md-8 mx-auto">
					<h1 class="fw-light">Album example</h1>
					<p class="lead text-muted">Something short and leading about the collection below—its contents, the
						creator,
						etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
					<p>
						<a href="#" class="btn btn-primary my-2">Main call to action</a>
						<a href="#" class="btn btn-secondary my-2">Secondary action</a>
					</p>
				</div>
			</div>
		</section>

		<div class="album py-5 bg-light">
			<div class="container">

				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
								preserveAspectRatio="xMidYMid slice" focusable="false">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
									fill="#eceeef" dy=".3em">Thumbnail</text>
							</svg>

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional
									content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
										<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
									</div>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<footer class="text-muted py-5">
		<div class="container">
			<p class="float-end mb-1">
				<a href="#">Back to top</a>
			</p>
			<p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
			<p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
					href="../getting-started/introduction/">getting started guide</a>.</p>
		</div>
	</footer>


	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>




</body>

</html>