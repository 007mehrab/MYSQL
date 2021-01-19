<?php include("includes/header.php");?>
<body>

<?php include('includes/nav.php');?>
  
<div class="container-fluid text-center">    
  <div class="row content">

    <?php include('includes/left_sidebar.php');?>

    <div class="col-sm-8 text-left"> 
      <h1 class="text-danger text-center"><? echo "Hi! &#128525 " . $_SESSION['fullname'] . " "?><br> Welcome to Home Page</h1><hr>


      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, sunt ea quae similique, officiis atque iste quos laudantium culpa error iure aut praesentium, unde eveniet nam reiciendis. Velit, tempore ullam.</p><hr>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatum similique, corporis tempore ipsum ad provident sint ea eveniet, ab in quas laudantium commodi quidem, inventore sequi dignissimos. Deserunt, numquam!</p><hr>

      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga nihil enim labore totam fugit maiores reprehenderit rem ullam praesentium dignissimos. Voluptatem, aspernatur accusamus, harum illum eaque consequatur illo. Sequi, officiis.</p><hr>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla sit ad ducimus dolorem praesentium dolores tenetur velit facilis placeat ratione nam optio ipsam vitae voluptatum, culpa voluptatibus molestias necessitatibus vero?</p>
      
    </div>

    <?php include('includes/right_sidebar.php');?>

  </div>
</div>



<?php include('includes/footer.php');?>


</body>
</html>
