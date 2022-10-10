<?php
include "db.php"; 
if(isset($_SESSION['users234']) && isset($_SESSION['usersname']) ){
}else{
  echo '<script> window.location.href = "index.php"; </script>';

}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
if(isset($_GET['videoid'])){
$vid=$_GET['videoid'];

}

?>

<body>
	<div style="padding:50.63% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/<?php echo $vid ?>?h=4532c7bb71&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="21 June.mp4"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
</body>
</html>
