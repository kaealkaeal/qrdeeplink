<!DOCTYPE html>
<html>
<head>
	<title>qrdeeplink</title>
	<script src="https://d.line-scdn.net/liff/1.0/sdk.js" /></script>
</head>
<body>
<script type="text/javascript">
	window.location="https://qrdeeplink.herokuapp.com/index.php?userId="+userid;
</script>
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
  const userid = profile.userId
})
.catch((err) => {
  console.log('error', err);
});
</script>

</body>
</html>
