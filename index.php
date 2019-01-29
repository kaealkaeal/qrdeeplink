<?php
$id = isset($_GET['userId']);
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
	liff.getProfile()
.then(profile => {
  const userId = profile.userId
  <?php 
  header("refresh: 2; url=class://scan?userId=".$id);
  exit(0);
  ?>
})
.catch((err) => {
  console.log('error', err);
});


</script>

</body>
</html>
