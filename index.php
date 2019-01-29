<?php
$id = ($_POST["userId"]); 
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

})
.catch((err) => {
  console.log('error', err);
});
</script>
<meta http-equiv="refresh" content="2; URL='class://scan?userId=<?php $id ?>'" />
</body>
</html>
