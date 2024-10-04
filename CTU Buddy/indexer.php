<!DOCTYPE html>
<html>
<head>
<title>CTU-Buddy</title>
<link rel="stylesheet" href="disc.css">
  
</head>
<body>
<div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="CTUTimetable.html">Timetable</a></li>
                    <li><a href="index.php">Discussion</a></li>
                    <li><a href="CTUAboutUs.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>  
</div>            
<div class="upload-form">


<form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data" onsubmit="showSpinner()">
  <h1>Select a File to Upload</h1>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</div>
</form>
 
 
 
</body>
</html>