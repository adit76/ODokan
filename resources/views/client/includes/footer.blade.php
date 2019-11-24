<link rel="stylesheet" href="{{asset('css/footer.css')}}">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<section class="footers bg-light pt-5 pb-3">
   <div class="container pt-5">
       <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
    		    <div class="footers-logo">
    		        <img src="{{asset('/logo/logo.png')}}" alt="Logo" style="width:120px;">
    		    </div>
    		    <div class="footers-info mt-3">
    		        <p>A Best Destination to buy the clothes of your desire</p>
    		    </div>
    		    <div class="social-icons">
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
              
                  <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                <a href="https://instagram.com/"><i id="social-tw" class="fa fa-instagram fa-2x social"></i></a>
                <a href="https://linkedin.com/"><i id="social-tw" class="fa fa-linkedin fa-2x social"></i></a>

	        </div>
    		</div>
    	   <div class="col-xs-6 col-sm-6 col-md-2 footers-two">
    		    <h5>Mens </h5>
            <?php
              $menswear=DB::table('product_categories')->where('product_category_gender','Male')->orderby('id','desc')->get();
             ?>

            @foreach($menswear as $menwear)
    		    <ul class="list-unstyled">
              @if(substr($menwear->child_category,0,4)=="Male")
                <li><a href="{{route('mensindividualchildcategory',['name'=>$menwear->child_category])}}"><?php
                $child= substr($menwear->child_category,5);
                ?>{{$child}}</a></li>
              @else
              <li><a href="{{route('mensindividualchildcategory',['name'=>$menwear->child_category])}}">{{$menwear->child_category}}</a></li>
              @endif

    			  </ul>
          @endforeach
    		</div>
    	   <div class="col-xs-6 col-sm-6 col-md-2 footers-three">
    		    <h5>Women </h5>

            <?php
              $womenswear=DB::table('product_categories')->where('product_category_gender','Female')->orderby('id','desc')->get();
             ?>
             @foreach($womenswear as $womenwear)
    		    <ul class="list-unstyled">
              @if(substr($womenwear->child_category,0,6)=="Female")
                <li><a href="{{route('ladiesindividualchildcategory',['name'=>$womenwear->child_category])}}"><?php
                $child= substr($womenwear->child_category,7);
                ?>{{$child}}</a></li>
              @else
               <li><a href="{{route('ladiesindividualchildcategory',['name'=>$womenwear->child_category])}}">{{$womenwear->child_category}}</a></li>
              @endif
    			        
    			  </ul>
          @endforeach
    		</div>
    	   <div class="col-xs-6 col-sm-6 col-md-2 footers-four">
    		    <h5>Interior Design </h5>
            <?php
              $interiordesign=DB::table('interior_design_parent_category')->orderby('id','desc')->get();
             ?>
             @foreach($interiordesign as $interior)
    		    <ul class="list-unstyled">
    			 <li><a href="{{route('individualinteriordesign',['name'=>$interior->interior_design_parent_category])}}">{{$interior->interior_design_parent_category}}</a></li>

    			</ul>
          @endforeach
    		</div>
    	   <div class="col-xs-6 col-sm-6 col-md-2 footers-five">
    		    <h5>Company </h5>
    		    <ul class="list-unstyled">
    			 <li><a href="maintenance.html">Products</a></li>
    			 <li><a href="about.html">Parters</a></li>
    			 <li><a href="about.html">Terms & Conditions</a></li>
    			 <li><a href="about.html">Privacy Policy</a></li>
    			 <li><a href="contact.html">Contact Us</a></li>
    			</ul>
    		</div>

       </div>
   </div>
</section>
<section class="disclaimer bg-light border">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 py-2">
                <small>
                   Disclaimer: THIS Limited is only an intermediary offering its platform to facilitate the transactions between Seller and Customer/Buyer/User and is not and cannot be a party to or control in any manner any transactions between the Seller and the Customer/Buyer/User. All the offers and discounts on this Website have been extended by various Builder(s)/Developer(s) who have advertised their products. Element is only communicating the offers and not selling or rendering any of those products or services. It neither warrants nor is it making any representations with respect to offer(s) made on the site. Element Limited shall neither be responsible nor liable to mediate or resolve any disputes or disagreements between the Customer/Buyer/User and the Seller and both Seller and Customer/Buyer/User shall settle all such disputes without involving Element Limited in any manner.
               </small>
            </div>

            <div class="col-md-4 py-2">
                <h5 style="font-weight: 700;">Payments </h5>
        		    <ul class="list-unstyled">
                  <div class="row payments_list">
              			 <li class="col-xs-2 col-sm-2 col-lg-2"><img src="https://cdn6.aptoide.com/imgs/4/1/3/413e97fa4a2f6027a1ab7dc575945faa_icon.png?w=256" title="E-Sewa" alt="E-Sewa"></li>
              			 <li class="col-xs-2 col-sm-2 col-lg-2"><img src="https://image.flaticon.com/icons/png/512/17/17210.png" title="Cash On Delivery" alt="Cash On Delivery"></li>
                  </div>
          			</ul>
            </div>
        </div>
    </div>
</section>
<section class="copyright border">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 pt-3">
                <p>© Odokan
                  <script>
                    document.write(new Date().getFullYear())
                  </script>
                </p>
                <p>Created and Managed By <a href="https://www.lintend.com">Lintend</a> Pvt. Ltd.</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
