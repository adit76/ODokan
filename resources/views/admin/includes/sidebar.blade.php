





    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->





      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          @if(Auth::check())
            {{Auth::user()->name}}
          @else
          {{'ODokan'}}
          @endif
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li>
            <a href="{{url('/admin/dashboard')}}">
                <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Dashboard</span>
            </a>
        </li> 
        @if(Auth::user()->super_admin !== 0)

        <li>
            <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                <span class="sidebar-icon"><i class="fa fa-flag"></i></span>
                <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Banner</span>
                <b class="caret"></b>
            </a>
            <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                <li><a href="{{route('main-banners')}}"><i class="fa fa-caret-right"></i>Manage main banner</a></li>
                <li><a href="{{ url('/admin/add-subbanner') }}"><i class="fa fa-caret-right"></i>Manage sub banner</a></li>
                <li><a href="{{ url('/admin/add-flexbanner') }}"><i class="fa fa-caret-right"></i>Manage flex banner</a></li>
                <li><a href="{{ url('/admin/add-interiordesignbanner') }}"><i class="fa fa-caret-right"></i>Manage interior design banner</a></li>

            </ul>

        </li> 
        <li>
          <a href="{{ url('/admin/add-mobilead') }}">
              <span class="sidebar-icon"><i class="fa fa-adn"></i></span>
              <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Mobile Ad</span>
          </a>
      </li>  
      
      <li>
        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
            <span class="sidebar-icon"><i class="fa fa-list-alt"></i></span>
            <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Category</span>
            <b class="caret"></b>
        </a>
        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
            <li><a href="{{ url('/admin/category/manage-parent-categories') }}"><i class="fa fa-caret-right"></i>Manage Parent Category for Clothes</a></li>
            <li><a href="{{ url('/admin/category/manage-categories') }}"><i class="fa fa-caret-right"></i>Manage Child Category for Clothes</a></li>
            <li><a href="{{ url('/admin/category/manage-interiordesign-parentcategory') }}"><i class="fa fa-caret-right"></i>Manage Parent Category For Interior Design</a></li>
            <li><a href="{{ url('/admin/category/manage-interiordesign-category') }}"><i class="fa fa-caret-right"></i>Manage Category For Interior Design</a></li>

        </ul>

    </li> 

    <li>
      <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
          <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
          <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Clothes)</span>
          <b class="caret"></b>
      </a>
      <ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="{{ url('/admin/products/create') }}"><i class="fa fa-caret-right"></i>Add a new Product</a></li>
          <li><a href="{{ url('/admin/products') }}"><i class="fa fa-caret-right"></i>View all Products</a></li>

      </ul>

  </li>


  <li>
    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-5">
        <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
        <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Interior Design)</span>
        <b class="caret"></b>
    </a>
    <ul id="submenu-5" class="panel-collapse collapse panel-switch" role="menu">
        <li><a href="{{ url('/admin/addinteriordesignproduct')}}"><i class="fa fa-caret-right"></i>Add a new Interior Design Product</a></li>
        <li><a href="/admin/viewinteriordesignproduct"><i class="fa fa-caret-right"></i>View all Interior Design Products</a></li>

    </ul>

</li>


<li>
  <a href="{{route('userorder')}}">
      <span class="sidebar-icon"><i class="fa fa-shopping-cart"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Orders</span>
  </a>
</li>

<li>
  <a href="{{route('seetrackorder')}}">
      <span class="sidebar-icon"><i class="fa fa-map-marker"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Tracking Order</span>
  </a>
</li>

<li>
  <a href="{{url('/admin/registeredusers')}}">
      <span class="sidebar-icon"><i class="fa fa-users"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">View all registered Users</span>
  </a>
</li>
<li>
  <a href="{{url('/admin/contributor')}}">
      <span class="sidebar-icon"><i class="fa fa-users"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">View Contributors</span>
  </a>
</li>
<li>
  <a href="{{url('/admin/color')}}">
      <span class="sidebar-icon"><i class="fa fa-users"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Colors</span>
  </a>
</li>
<li>
  <a href="{{url('/admin/size')}}">
      <span class="sidebar-icon"><i class="fa fa-users"></i></span>
      <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Size</span>
  </a>
</li>
@elseif(Auth::user()->super_admin == 0 && Auth::user()->type == 'clothing' )
<li>
      <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
          <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
          <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Clothes)</span>
          <b class="caret"></b>
      </a>
      <ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="{{ url('/admin/products/create') }}"><i class="fa fa-caret-right"></i>Add a new Product</a></li>
          <li><a href="{{ url('/admin/products') }}"><i class="fa fa-caret-right"></i>View all Products</a></li>

      </ul>

  </li>
  @elseif(Auth::user()->super_admin == 0 && Auth::user()->type == 'interior' )
  <li>
    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-5">
        <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
        <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Interior Design)</span>
        <b class="caret"></b>
    </a>
    <ul id="submenu-5" class="panel-collapse collapse panel-switch" role="menu">
        <li><a href="{{ url('/admin/addinteriordesignproduct')}}"><i class="fa fa-caret-right"></i>Add a new Interior Design Product</a></li>
        <li><a href="/admin/viewinteriordesignproduct"><i class="fa fa-caret-right"></i>View all Interior Design Products</a></li>

    </ul>

</li>

@elseif(Auth::user()->super_admin == 0 && Auth::user()->type == 'both' )
<li>
      <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
          <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
          <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Clothes)</span>
          <b class="caret"></b>
      </a>
      <ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
          <li><a href="{{ url('/admin/products/create') }}"><i class="fa fa-caret-right"></i>Add a new Product</a></li>
          <li><a href="{{ url('/admin/products') }}"><i class="fa fa-caret-right"></i>View all Products</a></li>

      </ul>

  </li>
  <li>
    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-5">
        <span class="sidebar-icon"><i class="fa fa-balance-scale"></i></span>
        <span class="sidebar-title" style="font-size:15px; font-weight:bold;">Manage Products (Interior Design)</span>
        <b class="caret"></b>
    </a>
    <ul id="submenu-5" class="panel-collapse collapse panel-switch" role="menu">
        <li><a href="{{ url('/admin/addinteriordesignproduct')}}"><i class="fa fa-caret-right"></i>Add a new Interior Design Product</a></li>
        <li><a href="/admin/viewinteriordesignproduct"><i class="fa fa-caret-right"></i>View all Interior Design Products</a></li>

    </ul>

</li>

@endif


        </ul>
      </div>
    </div>

    <style>
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

body {
    background: lightgray;
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-default .navbar-nav #user-profile {
    height: 50px;
    padding-top: 15px;
    padding-left: 58px;
}

.navbar-default .navbar-nav #user-profile img {
    height: 45px;
    width: 45px;
    position: absolute;
    top: 2px;
    left: 8px;
    padding: 1px;
}

#wrapper {
    padding-top: 50px;
    padding-left: 0;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 225px;
    }
}

@media (min-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 225px;
    }
}

#sidebar-wrapper {
    border-right: 1px solid #e7e7e7;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 225px;
    width: 0;
    height: 100%;
    margin-left: -225px;
    overflow-y: auto;
    background: #f8f8f8;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#sidebar-wrapper .sidebar-nav {
    position: absolute;
    top: 0;
    width: 225px;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}

#sidebar-wrapper .sidebar-nav li {
    text-indent: 0;
    line-height: 45px;
}

#sidebar-wrapper .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #428bca;
}

.sidebar-nav li:first-child a {
    background: #92bce0 !important;
    color: #fff !important;
}

#sidebar-wrapper .sidebar-nav li a .sidebar-icon {
    width: 45px;
    height: 45px;
    font-size: 14px;
    padding: 0 2px;
    display: inline-block;
    text-indent: 7px;
    margin-right: 10px;
    color: #fff;
    float: left;
}

#sidebar-wrapper .sidebar-nav li a .caret {
  position: absolute;
  right: 23px;
  top: auto;
  margin-top: 20px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse {
    list-style: none;
    -moz-padding-start: 0;
    -webkit-padding-start: 0;
    -khtml-padding-start: 0;
    -o-padding-start: 0;
    padding-start: 0;
    padding: 0;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
    margin-right: 10px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
    text-indent: 15px;
}

@media (max-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 45px;
    }
    #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
        position: fixed;
        left: 45px;
        margin-top: -45px;
        z-index: 1000;
        width: 200px;
        height: 0;
    }
}

.sidebar-nav li:first-child a {
    background: #92bce0 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(2) a {
    background: #6aa3d5 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(3) a {
    background: #428bca !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(4) a {
    background: #3071a9 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(5) a {
    background: #245682 !important;
    color: #fff !important;
}

    </style>

    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
    </script>
