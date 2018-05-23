<?php 

$hostname 	= 'localhost';
$username 	= 'root';
$password 	= '';
$dbname 	= 'blogku';

$db = mysqli_connect( $hostname , $username , $password , $dbname );

$posts_query 	= mysqli_query( $db , "SELECT posts.title, users.username FROM posts JOIN users ON users.id = posts.createdBy" );
$comments_query	= mysqli_query( $db , "SELECT comment FROM comments JOIN posts ON posts.id = comments.postId ORDER BY comments.id DESC" );

?>

<?php while( $posts = mysqli_fetch_object( $posts_query ) ) { ?>
<ul>	
	<li>post.title: <?php echo $posts->title; ?></li>
	<li>post.users.username: <?php echo $posts->username; ?></li>
	<li>
		comments:
		<ul>
			<?php while( $comments = mysqli_fetch_object( $comments_query ) ) { ?>
				<li><?php echo $comments->comment; ?></li>
			<?php } ?>
		</ul>
	</li>
</ul>
<?php } ?>