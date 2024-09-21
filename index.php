<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6e06b4a713.js" crossorigin="anonymous"></script>
    <title>Pos</title>
    <style>
    body {
    font-family: Arial, sans-serif; /* Default font */
    font-size: 16px; /* Body text size */
    font-weight: 400; /* Normal weight */
}

.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main main main'
    'menu footer footer footer footer footer';
    grid-template-rows: 90px 1fr ;
    grid-template-columns: 280px 1fr; 
  height: 100vh;
  background-color: white;
 
}

.grid-container > div {
  background-color: whitesmoke;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
  border: 1px solid gray;
}
.grid-container > .item1 {
    height: 90px;
    background-color: #ADD8E6;
  }
  .grid-container > .item2 {
   background-color: #87CEEB;
   margin: 10px 3px;
   border-radius: 5px;

  }
  .grid-container > .item3 {
    height: auto;
   margin: 10px;
   border-radius: 5px;
   background-color: #F0F0F0;
  }

.header_layOut{
    display: flex;
    justify-content: space-between;
    align-items; center;
    padding: 0px 5px ;
}
.img-header{
    display: flex;
    align-items: center;
}
.img-header h4 {
    font-size: 1.25em; 
    font-weight: 600; 
    margin: 0; 
}
.img-header img {
    height: 50px;
    width: 60px; 
    margin-right: 10px; 
}
.grid-container > .item2 ul{
    list-style: none;
    padding: 0; 
    margin: 0;
}
.grid-container > .item2 li {
    padding: 5px 0; 
    border-bottom: 1px solid darkgray; 
    overflow: hidden; 
    white-space: nowrap; 
    text-overflow: ellipsis;
}
.grid-container > .item2 a {
    text-decoration: none; 
    color: black; 
    display: block; 
    width: 100%;
    font-size: 16px; 
    text-align: left; 
    padding: 5px; 
}
.grid-container > .item2 a:hover {
    background-color: #b0e0e6; 
}
</style>
</head>
<body>

<div class="grid-container">
<?php include './includes/header.php'; ?>
<?php include './includes/sidebar.php'; ?>
<div class="item3">Main</div>  

</div>

</body>
</html>