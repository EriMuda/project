<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row["title"]; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            color: #333;
        }
        .book-details {
            margin-top: 20px;
            display: none; /* Initially hidden */
        }
        .cover-photo img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            cursor: pointer; /* Add pointer cursor for interaction */
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $row["title"]; ?></h1>
        <div class="book-details">
            <p><strong>Author:</strong> <?php echo $row["author"]; ?></p>
            <p><strong>Rating:</strong> <?php echo $row["rating"]; ?></p>
            <p><strong>Number of Pages:</strong> <?php echo $row["num_pages"]; ?></p>
        </div>
        <div class="cover-photo" onclick="toggleBookDetails()"> <!-- Add onclick event -->
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row["cover_photo"]); ?>" alt="Cover Photo">
        </div>
        <a href="index.php" class="button">Back to Book List</a>
    </div>

    
</body>
</html>
