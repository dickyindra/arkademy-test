<?php 

$hostname 	= 'localhost';
$username 	= 'root';
$password 	= '';
$dbname 	= 'blogku';

$db = mysqli_connect( $hostname , $username , $password , $dbname );

$posts_query 	= mysqli_query( $db , "SELECT posts.id, posts.title, users.username, posts.content FROM posts JOIN users ON users.id = posts.createdBy" );

?>

<!DOCTYPE html>
<html>
<head>
	<title>Twitter Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body class="bg-light"> 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">Navbar</a>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main class="container mt-5">
		<?php while( $posts = mysqli_fetch_object( $posts_query ) ) { ?>
		<article class="card">
			<div class="card-body">
				<h1 class="h5"><?php echo ucwords( $posts->title ); ?></h1>
				<span class="text-muted">dibuat oleh <?php echo $posts->username; ?></span>
				<p><?php echo $posts->content; ?></p>

				<h4 class="h6">Comments</h4>
				<?php

				$postId = $posts->id;

				$comments_query	= mysqli_query( $db , "SELECT comment FROM comments JOIN posts ON posts.id = comments.postId WHERE posts.id = $postId ORDER BY comments.id DESC" );

				while( $comments = mysqli_fetch_object( $comments_query ) ) {
				?>
				<div class="media mt-1">
					<img class="mr-3" src="http://via.placeholder.com/64x64" alt="Generic placeholder image">
					<div class="media-body">
						<p><?php echo $comments->comment; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</article>
		<?php } ?>
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>