<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
      body{
        background-color: transparent;
      }
    .mapouter{position:relative;text-align:right;width:100%;height:400px;}
    .gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}
    .gmap_iframe {height:400px!important;}
    
    #cd{
      width: 10px;
    height: 10px;
    border-radius: 100%;
    }
    .parallax {
  /* The image used */
  background-image: url('http://localhost/ci/assets/images/s1.jpg');

  /* Full height */
  height:900px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

    </style>
    <title>Document</title>
</head>  
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <img src="http://localhost/ci/assets/images/img.webp" alt="" width="30" height="30">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/ci_crud/index.php/welcome/index">Display <span class="sr-only">(current)</span></a>
      </li>
    </ul>
       <button type="button" class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModal">
 Add records
</button>

  </div>
</nav>