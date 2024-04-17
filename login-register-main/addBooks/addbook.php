<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="upload.php" enctype="multipart/form-data" method="POST">
    <input type="text" placeholder="Enter Title" name="title">
    <input type="text" placeholder="Enter Author:" name="author">
    <input type="text" placeholder="Enter Rating:" min="0" max="5" name="rating">
    <input type="text" placeholder="Enter Number of Pages:" name="num_pages">
    <input type="file" name="cover_photo" />
    <input type="submit" name="submit" value="Upload Data in Database" />
</form>

</body>
</html>