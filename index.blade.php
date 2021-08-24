<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Depot Inc</title>
    <link rel="apple-touch-icon" sizes="194x194" href="/img/socialicon/favicon.png" type="image/png">
    <link rel="icon" type="image/png" href="/img/socialicon/favicon.png">
    <link rel="icon" href="/img/socialicon/favicon.png" sizes="16x16 32x32" type="image/png">
    <link id="favicon" rel="shortcut icon" type="image/png" href="/img/socialicon/favicon.png" src="img/socialicon/favicon.png">
    <!--     Fonts and icons     -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="{{url('/')}}/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/slick/slick-theme.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">

</head>

 <body>

  <!-- start preloader -->
  <div id="preloader">
        <div class="loader">
            <img src="/img/preloader.gif" alt="">
        </div>
    </div>
    <!-- end preloader -->
    
   <!-- start main dashboard wrapper -->
   <div class="dashboard-wrapper">
       @include(('layouts.fulltopbar'))
        <!-- start buyer home body -->
        <div class="buyer-home-body">
            <div class="main-wrapper">
                <div class="main-body">
                    <div class="container-fluid">
                        <div class="row sliderbg">
                            <div class="col-lg-3 col-md-4">
                            @include(('layouts.sidebar_left'))
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <!-- start today itemslist-top -->
                                <div class="today-itemslist-top">
                                    <h3 class="item-headert"><span>All Products</span></h3>
                                    <!-- start filter listining menu -->
                                    <ul class="filter-listing-menu itemslider">
                                    @foreach($brand as $br)
                                        <li class="filter-listing-item">
                                            <div class="filter-listing-btn activelist-btn">
                                               
                                                <a href="javascript:void(0)" onClick='brand_btn("{{$br->name}}");'>
                                                 <!-- <input type="hidden" id="brands" name="brands" value="{{$br->name}}"> -->
                                                    <div class="filter-listing-icon">
                                                        <img src="/brands/{{ $br->description }}" alt="">
                                                    </div>
                                              
                                                    <span class="filter-listining-count">{{$br->name}}<input type="hidden" name="brand1" id="brand1" value="{{$br->id}}" ></span>
                                                
                                                    <!-- <label class="btn btn-info" onClick='myBtn();'>
                                                    
                                                    </label> -->
                                                    <!-- <button type="button" id="myBtn">Show Value</button> -->
                                                </a>
                                                
                                            </div>
                                        </li>
                                   
                                        @endforeach
                                    </ul>
                                    <!-- end filter listining menu -->

                                            <!-- start modal -->
        <!-- <div class="modal fade" id="exampleModalf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelf" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg fmmoadl" role="document">
                <div class="modal-content fcontentbg">
                    <div class="modal-body fbody">
                       
                        <div class="container">
                            <div class="card card-fmodal"> -->
                                <!--  -->
                                <!-- <div class="fmodal-img">
                                    <img src="/img/loginicon.png" alt="">
                                </div>

                                <p id="profile-name" class="profile-name-card"></p>
                                <form class="form-signin" action="{{ route('customer.login') }}" method="POST">
                                @csrf
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <input type="email" name="email"  id="inputEmail" class="fmcontrol" placeholder="Email address" required autofocus>
                                    <input type="password" name="password" id="inputPassword" class="fmcontrol" placeholder="Password" required>
                                    <div id="remember" class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login123</button>
                                </form> -->
                                <!-- /form -->
                                <!-- <a href="#" class="forgot-password">
                                    Forgot Password ?
                                </a>
                            </div>
                        </div>

                    </div>

                 </div>
            </div>
        </div> -->
        <!-- end modal -->
        
        

                                    <!-- start filter listiningbtm menu -->
                                    <div class="filter-listiningbtm-area">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-12">
                                                <ul class="filter-listiningbtm-menu">
                                                    <li class="filter-listiningbtm-item">
                                                        <button class="filter-listiningbtm-price listiningbtn0 pricbtn">
                                                            Price
                                                        </button>
                                                        <!-- start price btn dropdown -->
                                                        <div class="price-range-block submenu0">
                                                            <h4 class="prange-title">Price Range</h4>
                                                          
                                                        <input type="hidden" id="hidden_minimum_price" value="0" />
                                                        <input type="hidden" id="hidden_maximum_price" value="65000" />
                                                        <p id="price_show">100 - 2000</p>
                                                        <div id="price_range"></div>
                                                            
                                                        </div>
                                                        <!-- end price btn dropdown -->
                                                    </li>
                                                    <li class="filter-listiningbtm-item">
                                                        <button class="filter-listiningbtm-price listiningbtm1">
                                                            All Conditions
                                                        </button>
                                                        <ul class="filter-listiningbtm-sub submenu1">
                                                            <li><a href="javascript:void(0)" onClick="con_btn('A')">A</a></li>
                                                            <li><a href="javascript:void(0)" onClick="con_btn('B')">B</a></li>
                                                            <li><a href="javascript:void(0)" onClick="con_btn('C')">C</a></li>
                                                            <li><a href="javascript:void(0)" onClick="con_btn('Brand_New')">Brand New</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="filter-listiningbtm-item">
                                                        <button class="filter-listiningbtm-price listiningbtm2">
                                                            Sort By
                                                        </button>
                                                        <ul class="filter-listiningbtm-sub submenu2">
                                                            <li><a href="javascript:void(0)" onClick="sort_btn('name')">Name</a></li>
                                                            <li><a href="javascript:void(0)" onClick="sort_btn('sku')">SKU</a></li>
                                                            <li><a href="javascript:void(0)" onClick="sort_btn('price')">Price</a></li>
                                                            <li><a href="javascript:void(0)" onClick="sort_btn('date')">Date</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-5 col-md-12">
                                                <ul class="filter-listiningbtm-rightm">
                                                    <li class="filter-listiningbtm-item">
                                                       <!-- UPDATED BY TOUSIF -->

                                                       <form method="GET" action="{{ route('export_excel.excel') }}">

                                                        <input type="hidden" id="product_type" name="product_type" value="All Products">

                                                        <button class="filter-listiningbtm-btnrl">
                                                            <span class="excelhovr">Export Results</span>
                                                            <i class="fa fa-file-excel-o"></i>
                                                        </button>

                                                        </form>
                                                    </li>
                                                    <li class="filter-listiningbtm-item">
                                                        
                                                       <form method="GET" action="{{ route('export_excel.excel') }}">

                                                           <input type="hidden" id="product_type" name="product_type" value="All Products PDF">

                                                        <button class="filter-listiningbtm-btnrl">
                                                            <span class="excelhovr">Export Results</span>
                                                            <a href="#">
                                                                <i class="fa fa-file-pdf-o"></i>
                                                            </a>
                                                        </button>

                                                        </form>
                                                    </li>
                                                    <li class="filter-listiningbtm-item">
                                                        <button class="filter-listiningbtm-btnr">
                                                            <a href="#">
                                                                <img src="/img/view-grid.svg" alt="">
                                                            </a>
                                                        </button>
                                                    </li>
                                                    <li class="filter-listiningbtm-item">
                                                        <button class="filter-listiningbtm-btnr">
                                                            <a href="#">
                                                                <img src="/img/view-listing.svg" alt="">
                                                            </a>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end filter listiningbtm menu -->

                                </div>
                                <!-- end today itemslist-top -->

                            </div>
                        </div>
                    </div>

                    <div class="container-fluid" style="background:#edeef1; border-radius:10px;">
                        <div class="row">
                        @foreach($on_pr as $pr)
                            <div class="col-lg-12">
                                <!-- strat single item --->
                                <div class="main-item-wrap">
                                    <div class="details-hover-item">

                                        <!-- start modal -->
                                        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body mbody">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true" text-right>×</span>
                                                        </button>
                                                        <div class="row no-gutters">

                                                            <div class="col-lg-4">
                                                                <div class="modal-sidebar">
                                                                    <ul>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-arrow-down"></i>
                                                                                Price Drop
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-fire"></i>
                                                                                Today's deal
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-rocket"></i>
                                                                                Just Launched
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-heartbeat"></i>
                                                                                <span>Condition</span><br>
                                                                                <span>New</span>
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-shield"></i>
                                                                                <span>Warranty</span><br>
                                                                                <span>1 Year On-Site Warranty</span>
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-archive"></i>
                                                                                <span>Packaging</span><br>
                                                                                <span>Branded Box </span>
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-minus-circle"></i>
                                                                                <span>Restrictions</span><br>
                                                                                <span>Can only be sold to USA, Canada, Israel, The Netherlands, Saudi Arabia, United Arab Emirates and Poland (Requires prior approval). Warranty direct with manufacturer brand. </span>
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-clock-o"></i>
                                                                                <span>ETA</span><br>
                                                                                <span>5 Days</span>
                                                                            </a></li>
                                                                        <li><a href="#">
                                                                                <i class="fa fa-info-circle"></i>
                                                                                <span>More Info</span><br>
                                                                                <span>Warranty direct with manufacturer brand. 1YR Pro Support International Warranty. 500 NIT Display.</span>
                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">

                                                                <div class="modal-imgdiv">
                                                                    <div class="modal-img">
                                                                        <div class="mimg">
                                                                            <img src="img/apple.png" alt="">
                                                                        </div>
                                                                        <div class="mname-title">
                                                                            <h4>Exo</h4>
                                                                            <span>Miami</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-notific">
                                                                        <i class="fa fa-bell"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="mbody-text">Dell XPS 9310 Core™ i7-1165G7 2.8GHz 1TB SSD 32GB 13.4" 4K+ (3840x2400) TOUCHSCREEN BT</p>

                                                                <hr>

                                                                <!-- start modal price card area -->
                                                                <div class="modal-pricecart">

                                                                    <div class="mprice">
                                                                        <div class="modal-price">
                                                                            <p>Price</p>
                                                                            <span class="m-price">$1,186</span>
                                                                        </div>
                                                                        <div class="modal-available">
                                                                            <p>Available</p>
                                                                            <span class="available"><strong>40</strong></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mcart">
                                                                        <div class="m-count">
                                                                            <button onclick="this.parentNode.querySelector('#count-number').stepDown()">-</button>
                                                                            <input type="number" id="count-number" value="5">
                                                                            <button onclick="this.parentNode.querySelector('#count-number').stepUp()">+</button>
                                                                        </div>
                                                                        <div class="m-cart">
                                                                            <a href="#"><i class="fa fa-shopping-cart"></i> <span>Add To Cart</span></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <!-- end modal price card area -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->

                                        <div class="item-number" data-toggle="modal" data-target="#exampleModal4">
                                            <span>1</span>
                                        </div>
                                        <div class="details-text" data-toggle="modal" data-target="#exampleModal4">
                                            <p>{{$pr->name}}</p>
                                        </div>
                                        <div class="main-item-details">
                                            <div class="mdetails-for-left">
                                                <ul>
                                                    <li data-toggle="modal" data-target="#exampleModal4"><a href="#"><i class="fa fa-arrow-down"></i></a>
                                                        <span class="toltip-ldetails">
                                                            Price Drop
                                                        </span>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#exampleModal4"><a href="#" class="tdeals"><i class="fa fa-fire"></i></a>
                                                        <span class="toltip-ldetails">
                                                            Today's deal
                                                        </span>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#exampleModal4"><a href="#" class="newfactory"><i class="fa fa-rocket"></i></a>
                                                        <span class="toltip-ldetails nfact">
                                                            Just Launched
                                                        </span>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#exampleModal4"><a href="#" class="justsold"><i class="fa fa-clock-o"></i></a>
                                                        <span class="toltip-ldetails">
                                                            Just Sold
                                                        </span>
                                                    </li>
                                                    <li data-toggle="modal" data-target="#exampleModal4"><a href="#">{{$pr->unit_price}}</a>
                                                        <span class="toltip-ldetails">
                                                            Unit Price
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mdetails-for-right">
                                                <ul>
                                                    <li><a href="#" class="notification">
                                                            <i class="fa fa-bell"></i>
                                                        </a>

                                                        <!-- start notification toltip -->
                                                        <div class="nti-toltip">
                                                            <i class="fa fa-bell"></i>
                                                            <h3>Notify Me</h3>
                                                            <div class="price-nti"><i class="fa fa-arrow-down"></i>
                                                                <p>Item Price Drop</p> <input type="checkbox">
                                                            </div>
                                                            <div class="inventory-nti"><i class="fa fa-cubes"></i>
                                                                <p>Inventory Add</p><input type="checkbox">
                                                            </div>
                                                        </div>
                                                        <!-- end notification toltip -->

                                                    </li>
                                                    <li>
                                                        <div class="number" data-dismiss="modal">
                                                        <input type="number" value="{{$pr->current_stock}}" id="count-number" readonly>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="addtocard" onclick="cartFunction()">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span id="cartbtn1" onclick="document.getElementById('cartbtn1').innerText='Added Cart!'">Add to cart</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end single item -->
                            </div>
                            @endforeach
                        </div>
                    </div>

                                

                            
                </div>
            </div>
        </div>
        <!-- end buyer home body -->

     <!-- Chat_Boot  -->
     @extends(('chatbot'))
       <!-- End Chatboot -->
  

    </div>
    
    <!-- end main dashboard wrapper -->
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- slick js -->
    <script src="{{ url('/')}}/slick/slick.min.js"></script>
    <!-- modal js -->
    <script src="{{ url('/')}}/popupjs/remodal.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="{{ url('/')}}/js/custom.js"></script>


    <script>  
   
  
$(document).ready(function() {

                var submenudrop0 = document.querySelector(".listiningbtn0");
                var listiningsub0 = document.querySelector(".submenu0");

                submenudrop0.addEventListener('click', function() {
                    listiningsub0.classList.toggle("subshow");
                });

                var submenudrop1 = document.querySelector(".listiningbtm1");
                var listiningsub1 = document.querySelector(".submenu1");

                submenudrop1.addEventListener('click', function() {
                    listiningsub1.classList.toggle("subshow");
                });

                var submenudrop2 = document.querySelector(".listiningbtm2");
                var listiningsub2 = document.querySelector(".submenu2");

                submenudrop2.addEventListener('click', function() {
                    listiningsub2.classList.toggle("subshow");
                });

                filter_data();
                
  

                        function filter_data()
                        {
                            $('#filter_data').html('<div id="loading" style="" ></div>');
                            var minimum_price = $('#hidden_minimum_price').val();
                            var maximum_price = $('#hidden_maximum_price').val();
                            var brand = $('#brands').val();
                            
                            $.ajax({
                                url:"/price",
                                method:"POST",
                                data:{
                                    "_token": "{{ csrf_token() }}",
                                    "minimum_price":minimum_price, 
                                    "maximum_price":maximum_price,
                                    "brand":brand,
                                    },
                                success:function(data){
                                
                                    $('#load_product').html(data.html);
                                    // console.log(data);
                                    // $('#filter_data').html('<div id="loading" style="" ></div>');
                                    
                                }
                            });
                        }


$('#price_range').slider({
            range:true,
            min:100,
            max:2000,
            values:[100, 2000],
            step:10,
            stop:function(event, ui)
            {
         $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
           }
     });


});

 

      function brand_btn(brand){
          
                $.ajax({
                url:"/price",
                method:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "brand":brand,
                    },
                success:function(data){
                
                    $('#load_product').html(data.html);
                    // console.log(data);
                    // $('#filter_data').html('<div id="loading" style="" ></div>');
                    
                }
            }); 
       
      }  
      
      
      function con_btn(Brand_New){
          
          $.ajax({
            url:"/price",
            method:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                "Brand_NEW":Brand_New,
                },
            success:function(data){
            
                $('#load_product').html(data.html);
                // console.log(data);
                // $('#filter_data').html('<div id="loading" style="" ></div>');
                
            }
        }); 
   
      }   

         function sort_btn(name){
          
          $.ajax({
            url:"/price",
            method:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                "name":name,
                },
            success:function(data){
            
                $('#load_product').html(data.html);
                // console.log(data);
                // $('#filter_data').html('<div id="loading" style="" ></div>');
                
            }
        }); 
   
      }  
  

  


         /* hide dropdown click on body */
        document.onclick = function(event) {
            if (!event.target.matches('.listiningbtm2, .submenu1, .submenu2, .listiningbtm1, .price-submitbtn')) {
                var dropdowns = document.getElementsByClassName("filter-listiningbtm-sub");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('subshow')) {
                        openDropdown.classList.remove('subshow');
                    }
                }
            }
            if (!event.target.matches('.pricbtn, .price-range-field')) {
                var pricerange = document.querySelector(".price-range-block");
                pricerange.classList.remove("subshow");
            }


        }

        // $(function() {
        //                 $('#loginModal').modal({
        //                     show: true
        //                 });
        //             });

    </script>
   

</body>

</html>



