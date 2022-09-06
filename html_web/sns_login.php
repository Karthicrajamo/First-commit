<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.btnn:hover {
			background-color: #383a3b7d;
		}

		.bg-dark {
			background-color: #fff !important;
		}

		.btnn {
			position: absolute;
			top: 35%;
			left: 50%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			background-color: #939191ad;
			color: white;
			font-size: 16px;
			padding: 12px 24px;
			border: none;
			cursor: pointer;
			border-radius: 5px;
			text-align: center;
		}
	</style>
</head>

<body>
	<header class="p-3 bg-dark text-white" style="border-bottom:ridge;text-shadow: 2px 2px 4px #000000;height: 80px;">
		<div class="container">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
					<svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
						<use xlink:href="#bootstrap"></use>
					</svg>
				</a>

				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li><a href="#" class="nav-link px-2 text-secondary"><img src="./images/sns.png"
								style="height : 45;margin-left: -60px;"></a></li>
					<li><a href="#" class="nav-link px-2 text-white"><img src="./images/images.gif"
								style="height: 30;margin-left: 160;"></a></li>
					<li><a href="#" class="nav-link px-2 text-white"><img src="./images/frnd.png"
								style="height: 40;margin-left: 40; margin-top: -5px;"></a></li>
					<li><a href="#" class="nav-link px-2 text-white"><img src="./images/plus.png"
								style="height : 30; margin-left: 80;"></a></li>
					<li><a href="#" class="nav-link px-2 text-white"><img src="./images/like.png"
								style="height : 30; margin-left: 80;"></a></li>
					<li><a href="#" class="nav-link px-2 text-white"><img src="./images/setting.png"
								style="height : 30; margin-left: 40;"></a></li>
				</ul>

				<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
					<input type="search" class="form-control form-control-dark"
						style="height: 30px;margin-top: -15px; width: 120px;" placeholder="Search..."
						aria-label="🔍Search">
				</form>


			</div>
		</div>
	</header><br>
	<h6 style="margin-left: 450px;">Create Posts</h6>
	<div class="bd-example" style="margin-left:450;margin-top:50">
		<div class="card"
			style="width: 25rem;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: -35px;">
			<div class="dropdown text-end" style="margin: 10px;">

				<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"
					style="float: left;">
				</a>
				<h6 style="float: left;margin-left:10px; margin-top:5px;">Karthic</h6>
				<h6 style="margin-right:5px">...</h6>
			</div>

			<img src="./images/dp.jpg" style="filter:blur(1px)">
			<button class="btnn"
				style="float:center;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: 20px;">Browse
				Gallary</button>

			<div class="card-body">
				<img src=" https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"
					style="float: left;">
				<h6 style="margin-top:5px; margin-left:50px; margin-bottom:25px;font-size: 12;">
					Add Commands here...
				</h6>

				<hr>

				<button type="button" class="btn btn-primary"
					style="border-left-width: 115.3px;border-right-width: 115.3px;">Post Your Photo</button>
			</div>
		</div>
	</div>
</body>