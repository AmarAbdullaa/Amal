<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rules and Regulations</title>
    <style>
        /* styles.css */

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    color: #333;
}

.container {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.sidebar {
    width: 200px;
    background-color: #e9eef5;
    padding: 20px;
    border-radius: 10px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 20px;
}

.sidebar ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.sidebar ul li a.active {
    background-color: #d0dae8;
    padding: 10px;
    border-radius: 5px;
}

.main-content {
    flex-grow: 1;
    margin-left: 220px;
    padding: 20px;
    background-color: #D8BFD8 ;
    border-radius: 10px;
    height:100vh;
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

.subtext {
    color: #6c757d;
    margin-bottom: 20px;
}

.download-section, .upload-section {
    margin-bottom: 30px;
}

h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.btn {
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-grey {
    background-color: #e2e6ea;
    color: #333;
    margin-right: 10px;
}

.btn-blue {
    background-color: #007bff;
    color: #fff;
}

.file-input {
    display: inline-block;
    width: calc(100% - 90px);
    padding: 10px;
    font-size: 14px;
    margin-top: 10px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
   
   border: 4px solid white;
}

.btn-upload {
    background-color: #007bff;
    color: #fff;
    margin: 30px;
    margin-left: 01px;
}


    </style>
</head>
<body>

<?php include  'nav.php'; ?>
    
        <main class="main-content">
            <h1>Rules and Regulations</h1>
            <p class="subtext">Upload and update your club's rules and regulations</p>
            
            <section class="download-section">
                <h2>Download current rules and regulations</h2>
                <button class="btn btn-blue">Download PDF</button>
            </section>

            <section class="upload-section">
                <h2>Upload new rules and regulations</h2>
                <label for="upload-file">Upload PDF file</label>
                <input type="file" id="upload-file" class="file-input">
                <button class="btn btn-upload">Upload</button>
            </section>
        </main>

        
    </div>
</body>
</html>