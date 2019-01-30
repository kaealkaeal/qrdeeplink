<?php
$id = isset($_POST['userId']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>qrdeeplink</title>
	<script src="https://d.line-scdn.net/liff/1.0/sdk.js" /></script>
</head>
<body>


<script>
liff.init(
  data => {
    // Now you can call LIFF API
    const userId = data.context.userId;
  }
);
</script>
<script>
	<?php if($id == null){?>
	liff.getProfile()
.then(profile => {
  const userId = profile.userId
  <?php 
  //$id = "U92e74f8ce3595165ba396dbef155629a";
  header("refresh: 0; url=class://scan?userId=U92e74f8ce3595165ba396dbef155629a");
  exit(0);
  ?>
})
.catch((err) => {
  console.log('error', err);
});
<?php
}
?>
	
</script>

</body>
</html>
