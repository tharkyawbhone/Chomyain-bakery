<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="test7js.js"></script>

  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap2.min.js"></script>




<!------ galleray---------->
       
<!------ galleray---------->





  <style type="text/css">

    body {
      background-color: white;
    }
    img {
      border: 5px solid #D33350;
    }
    ul.nav li {
      width: 100%;
    }
    .row div {
      padding: 10px 10px;
      border: 1px solid whitesmoke;
    }
    ul.fakegallery li {
      display: inline;
    }
    ul.fakegallery li a img {
      
      width: 190px;
      height: auto;
    }

      @media only screen and (max-width: 460px) {
      ul.fakegallery li {
        display: block;
      }
    }
 
  </style>
</head>
<body>

<header class="text-center"><h1>ချိုမြိန်</h1></header>



<div class="h-100 d-flex align-items-center justify-content-center" style="background-color: #D33350;">

<!-- မွေးနေ့ကိတ်---------------------------------------->
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="" style="background-color: #D0364C;">
            မွေးနေ့ကိတ်
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Crepe Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm1">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm2">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm3">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Chiffom Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm4">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm5">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm6">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">Cheese Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm7">Cheese</a></li>
                    <li class=""><a data-toggle="tab" href="#subm8">Strawberry Cheese</a></li>
                    <li class=""><a data-toggle="tab" href="#subm9">Chocolate Cheese</a></li>
                  </ul>

                </li>
              </ul>
            </li>
          </ul>
        </div>
<!-- ရေခဲမုန့်---------------------------------------->
        <div class="btn-group">
          <button class="btn btn-secondary" type="button"  style="background-color: #D0364C;" data-toggle="tab" href="#subm11">
            ရေခဲမုန့်
          </button>
        </div>
<!-- အလှပန်းစည်း---------------------------------------->
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="" style="background-color: #D0364C;">
            အလှပန်းစည်း
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Crepe Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm1">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm2">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm3">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Chiffom Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm4">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm5">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm6">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">Cheese Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm7">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm8">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm9">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
          </ul>
        </div>
<!-- ပေါင်မုန့်---------------------------------------->
        <div class="btn-group">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="" style="background-color: #D0364C;">
            ပေါင်မုန့်
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
            <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Crepe Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm1">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm2">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm3">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="">Chiffom Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm4">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm5">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm6">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
             <li><a class="dropdown-item dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">Cheese Cake</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">

                  <ul class="nav nav-tabs">
                    <li class=""><a data-toggle="tab" href="#subm7">Vanilla</a></li>
                    <li class=""><a data-toggle="tab" href="#subm8">Strawberry</a></li>
                    <li class=""><a data-toggle="tab" href="#subm9">Chocolate</a></li>
                  </ul>

                </li>
              </ul>
            </li>
          </ul>
        </div>

</div>

<!-- tab contents 1 to 36-----subm1----------------------------------->
    <div class="tab-content" style="background-color: #FFEEEB;">
      <!-- sub1---------------------------------------->  
      <div id="subm1" class="tab-pane active" style="padding-top: 2px;">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Vanilla Crepe Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/vanillacrepecake.jpg">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36------subm2---------------------------------->
      <div id="subm2" class="tab-pane fade" style="padding-top: 2px;">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Crepe Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/strawberry-crepe-cake-featured-image-1.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-subm3--------------------------------------->
      <div id="subm3" class="tab-pane fade" style="padding-top: 2px;">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Crepe Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/chocolate-candycane-crepe-cake-slice.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm4----------------------------------->
      <div id="subm4" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Vanilla Chiffom Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/chiffomvanilla.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- tab contents 1 to 36-----subm5----------------------------------->
      <div id="subm5" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Chiffom Cake</h4>
         <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/strawberychiffom.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm6----------------------------------->
      <div id="subm6" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Chiffom Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/chocolatechiffom.jpeg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="gallery.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm7----------------------------------->
      <div id="subm7" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Cheese Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/cheesecake.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm8----------------------------------->
      <div id="subm8" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Cheese Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/Strawberry-Cheesecake3.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm9----------------------------------->
      <div id="subm9" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Cheese Cake</h4>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/Chocolate-Cheesecake3.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-2">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">7"..........25000Ks</li>
              <li>8"..........35000Ks</li>
              <li>10".........45000Ks</li>
              <li>12".........55000Ks</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h5 href="test81.php" style="font-size: 20px;">နမူနာပုံများကြည့်ရန်</h5>
            <ul class = "list-unstyled fakegallery">
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview1.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview2.jpg"></a></li>
              <li class="width 3"><a href="gallery.php" title="Image 1"><img src="img/cakepreview3.jpg"></a></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm11----------------------------------->
      <div id="subm11" class="tab-pane fade">
        <h2 class="text-center">ရေခဲမုန့်</h2>
        <div class="row text-center">
          <div class="col-sm-4">
            <img src="img/icecream.jpg" style="width:300px;" style="height: 250px;">
          </div>
          <div class="col-sm-4">
            <ul class = "list-unstyled price" style="font-size: 20px;">
              <li>ဈေးနှုန်းများ</li>
              <li style="margin-top: 10px;">၁ခွက်.......၈၀၀ကျပ်</li>
              <li>၁စည်.......၂၄၀၀၀ကျပ်</li>
            </ul>
          </div>
          <div class="col-sm-4" style="text-align: left;" style="margin-left: 50px;">
            <h5 href="gallery.php" style="font-size: 20px;">ရရှိနိုင်သောအရသာများ</h5>
            <ul class = "list-unstyled fakegallery" style="margin-left: 50px;">
              <li style="text-align: left;"><h4>စတော်ဘယ်ရီ</h4></li>
              <li style="text-align: left;"><h4>ချောကလတ်</h4></li>
              <li style="text-align: left;"><h4>ဒူးရင်း</h4></li>
              <li style="text-align: left;"><h4>နို့</h4></li>
              <li style="text-align: left;"><h4>ပိန်းဥ</h4></li>
            </ul>
          </div>
        </div>
      </div>
<!-- tab contents 1 to 36-----subm11----------------------------------->
      <div id="subm12" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Crepe Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm13" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Crepe Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm14" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Vanilla Chiffom Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm15" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Chiffom Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm16" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Chiffom Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm17" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Vanilla Cheese Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm18" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Strawberry Cheese Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="subm19" class="tab-pane fade">
        <h2 class="text-center">မွေးနေ့ကိတ်</h2>
        <h4 class="text-center">Chocolate Cheese Cake</h4>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>

    </div>


<!-- ------------------------footer-------------------------------->
<div class="footer d-block" style="background-color: #2DBBA4; padding: 5px 10px; color: white;">
  <h4>ဆက်သွယ်ရန်</h4>
  <h5>လိပ်စာ-----------(၂) ရပ်ကွက်၊ ရန်ကုန်-မန္တလေး လမ်းမဘေး၊ ရေတာရှည်မြို့။</h5>
  <h5>ဖုန်းနံပါတ်---------၀၉ ၅၅၀ ၁၃၀၃</h5>
  <h5>Facebook Page---Chomyain</h5>
</div>


</body>
</html>