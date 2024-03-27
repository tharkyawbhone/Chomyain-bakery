<?php
   include('dbconnection.php');
?>







<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="test7js.js"></script>

  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap2.min.js"></script>
  <title>gallery</title>
</head>
<style type="text/css">
  body{
  margin:0;
  padding:0;
}
/* .container{
  width:90%
  margin:10px auto;
} */
.portfolio-menu{
  text-align:center;
}
.portfolio-menu ul li{
  display:inline-block;
  margin:0;
  list-style:none;
  padding:10px 15px;
  cursor:pointer;
  -webkit-transition:all 05s ease;
  -moz-transition:all 05s ease;
  -ms-transition:all 05s ease;
  -o-transition:all 05s ease;
  transition:all .5s ease;
}

.portfolio-item{
  /*width:100%;*/
}
.portfolio-item .item{
  /*width:303px;*/
  float:left;
  margin-bottom:10px;
}

</style>
<body>


<!------<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">----->
<!------<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>----->
<!------<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>----->
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="gallery_link_script/linktoshow.css" />
<script src="gallery_link_script/script_to_change_type.js"></script>
<script src="gallery_link_script/work_arrow.js"></script>

 <div class="container">
   <div class="row">
      <div class="col-lg-12 text-center my-2">
          <h4>Isotope filter magical layouts with Bootstrap 4</h4>
      </div>
   </div>
   <div class="portfolio-menu mt-2 mb-4">
      <ul>
         <li class="btn btn-outline-dark active" data-filter="*">All</li>
         <li class="btn btn-outline-dark" data-filter=".cake">Cake Photos</li>
         <li class="btn btn-outline-dark" data-filter=".flower">Flowers Photos</li>
         <li class="btn btn-outline-dark text" data-filter=".selfie">IceCream Photos</li>
      </ul>
   </div>
   <div class="portfolio-item row">
          <?php
            $res = mysqli_query($con, "select * from images");
            while($row = mysqli_fetch_assoc($res)){
          ?>
          <div class="item <?php echo $row['type'] ?> col-lg-3 col-md-4 col-6 col-sm">
             <a href="cake_album/<?php echo $row['file'] ?>" class="fancylight popup-btn" data-fancybox-group="light"> 
             <img class="img-fluid" src="cake_album/<?php echo $row['file'] ?>" alt="" />
             </a>
          </div>
        <?php } ?>
   </div>
</div>
      
      

<script type="text/javascript">
          // $('.portfolio-item').isotope({
        //    itemSelector: '.item',
        //    layoutMode: 'fitRows'
        //  });
         $('.portfolio-menu ul li').click(function(){
          $('.portfolio-menu ul li').removeClass('active');
          $(this).addClass('active');
          
          var selector = $(this).attr('data-filter');
          $('.portfolio-item').isotope({
            filter:selector
          });
          return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
          enabled : true
         }
         });
         });
</script>


</body>
</html>