<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('admin.home');
// })->middleware('auth');
//
// Route::get('/admin', function() {
//   return view('admin.home');
// })->middleware('auth');
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//
//
//
// //Maintaining the Products
// Route::resource('/admin/products','ProductController')->middleware('auth');
//
// //Maintaining the Parent Category
// Route::get('/admin/category/manage-parent-categories','ManageCategoryController@parentcategory')->middleware('auth');
// Route::post('/admin/category/manage-parent-categories','ManageCategoryController@createparentcategory')->middleware('auth');
// Route::delete('/admin/category/manage-parent-category/{id}','ManageCategoryController@deleteparentcategory')->name('deleteparentcategory')->middleware('auth');
//
// //Maintaing the Child Categories
// Route::get('/admin/category/manage-categories','ManageCategoryController@index')->middleware('auth');
// Route::post('/admin/category/manage-categories','ManageCategoryController@create')->middleware('auth');
// Route::delete('/admin/category/manage-categories/{id}','ManageCategoryController@deletechildcategory')->name('deletechildcategory')->middleware('auth');
//
//
//
// //Maintaining the Product infos(attributes)
// Route::match(['get','post'],'admin/products/add-attributes/{id}','ProductInfoController@addattributes')->middleware('auth');
// Route::delete('/admin/products/add-attributes/{id}','ProductInfoController@deleteattributes')->name('deleteattributes')->middleware('auth');
// Route::get('/admin/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@editattributes')->name('editattributes')->middleware('auth');
// Route::post('/admin/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@updateattributes')->name('updateattributes')->middleware('auth');
//
// //image drag and drop
// // Route::post('/admin/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@changeImageIndex')->name('changeImageIndex');
//
// //Managing the image Index
// Route::post('/admin/products/add-attributes/{id}/{image_id}/{$option_index}','ProductInfoController@changeimageindex')->middleware('auth');

//Admin Login and Managing
Route::prefix('admin')->group(function(){
      Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
      Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
      Route::match(['get','post'],'logout','Auth\AdminLoginController@logout')->name('admin.logout');

      // Route::get('/dashboard', function () {
      //     return view('admin.home');
      // });





      Route::get('/dashboard','AdminController@index')->name('admin.home')->middleware('auth:admin');

      // Route::get('/home', 'HomeController@index')->name('home');

      //Adding the Banners
      Route::get('/main-banner','ManageCategoryController@viewMainBanners')->name('main-banners')->middleware('auth:admin');
      Route::get('/add-banner','ManageCategoryController@addbanner')->name('add-banners')->middleware('auth:admin');
      Route::post('/add-banner','ManageCategoryController@addthebanner')->middleware('auth:admin');
      Route::delete('/add-banner/{id}','ManageCategoryController@deletemainbanner')->name('deletebanner')->middleware('auth:admin');

      //Adding the subbanner
      Route::get('/add-subbanner','ManageCategoryController@addsubbanner')->middleware('auth:admin');
      Route::post('/add-subbanner','ManageCategoryController@addthesubbanner')->middleware('auth:admin');

      //Adding the flex banners
      Route::get('/add-flexbanner','ManageCategoryController@addflexbanner')->middleware('auth:admin');
      Route::post('/add-mensflexbanner','ManageCategoryController@addflexmenswear')->name('mensflexwear')->middleware('auth:admin');
      Route::post('/add-ladiesflexbanner','ManageCategoryController@addflexladieswear')->name('ladiesflexwear')->middleware('auth:admin');
      Route::post('/add-tshirtsflexbanner','ManageCategoryController@addflextshirts')->name('tshirtsflexwear')->middleware('auth:admin');
      Route::post('/add-desiredbrandsflexbanner','ManageCategoryController@addflexdesiredbrands')->name('desiredbrandsflexwear')->middleware('auth:admin');

      //Interior Design banners
      Route::get('/add-interiordesignbanner','ManageCategoryController@addinteriordesignbanner')->middleware('auth:admin');
      Route::post('/add-interiordesignbanner','ManageCategoryController@addtheinteriordesignbanner')->middleware('auth:admin');


      //Mobile Ad Route
      Route::get('/add-mobilead','ManageCategoryController@addmobilead')->middleware('auth:admin');
      Route::post('/add-mobilead','ManageCategoryController@addthemobilead')->middleware('auth:admin');
        Route::delete('/add-mobilead/{id}','ManageCategoryController@deletemobilead')->name('deletemobilead')->middleware('auth:admin');





      //Maintaining the Products
      Route::resource('products','ProductController')->middleware('auth:admin');

      //Maintaining the Parent Category
      Route::get('/category/manage-parent-categories','ManageCategoryController@parentcategory')->middleware('auth:admin');
      Route::post('/category/manage-parent-categories','ManageCategoryController@createparentcategory')->middleware('auth:admin');
      Route::delete('/category/manage-parent-category/{id}','ManageCategoryController@deleteparentcategory')->name('deleteparentcategory')->middleware('auth:admin');

      //Maintaing the Child Categories
      Route::get('/category/manage-categories','ManageCategoryController@index')->middleware('auth:admin');
      Route::post('/category/manage-categories','ManageCategoryController@create')->middleware('auth:admin');
      Route::delete('/category/manage-categories/{id}','ManageCategoryController@deletechildcategory')->name('deletechildcategory')->middleware('auth:admin');


      //Maintaining the parent category for interior Design
      Route::get('/category/manage-interiordesign-parentcategory','InteriorDesignController@parentcategory')->middleware('auth:admin');
      Route::post('/category/manage-interiordesign-parentcategory','InteriorDesignController@createparentcategory')->middleware('auth:admin');
      Route::delete('/category/manage-interiordesign-parentcategory/{id}','InteriorDesignController@deleteparentcategory')->name('deleteinteriordesignparentcategory')->middleware('auth:admin');

      //Maintaining the category for interior design
      Route::get('/category/manage-interiordesign-category','InteriorDesignController@category')->middleware('auth:admin');
      Route::post('/category/manage-interiordesign-category','InteriorDesignController@createcategory')->middleware('auth:admin');
      Route::delete('/category/manage-interiordesign-category/{id}','InteriorDesignController@deletecategory')->name('deleteinteriordesigncategory')->middleware('auth:admin');


      //Adding the Interior Design Products
      Route::get('/addinteriordesignproduct','InteriorDesignController@add')->middleware('auth:admin');
      Route::post('/addinteriordesignproduct','InteriorDesignController@create')->middleware('auth:admin');

      //Viewing the interior design Product
      Route::get('/viewinteriordesignproduct','InteriorDesignController@index')->middleware('auth:admin');
        Route::delete('/viewinteriordesignproduct/{id}','InteriorDesignController@deleteproduct')->name('deleteinteriordesignproduct')->middleware('auth:admin');
        Route::get('/editinteriordesignproduct/{id}','InteriorDesignController@editproduct')->name('editinteriordesignproduct')->middleware('auth:admin');
        Route::post('/editinteriordesignproduct/{id}','InteriorDesignController@updateproduct')->name('interiorproducts.update')->middleware('auth:admin');


      //Maintaining the Product infos(attributes)
      Route::match(['get','post'],'/products/add-attributes/{id}','ProductInfoController@addattributes')->middleware('auth:admin');
      Route::delete('/products/add-attributes/{id}','ProductInfoController@deleteattributes')->name('deleteattributes')->middleware('auth:admin');
      Route::get('/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@editattributes')->name('editattributes')->middleware('auth:admin');
      Route::post('/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@updateattributes')->name('updateattributes')->middleware('auth:admin');

      //image drag and drop
      // Route::post('/products/add-attributes/{id1}/edit/{id2}','ProductInfoController@changeImageIndex')->name('changeImageIndex');

      //Managing the image Index
      Route::post('/products/add-attributes/{id}/{image_id}/{$option_index}','ProductInfoController@changeimageindex')->middleware('auth:admin');


      //Managing the registered user routes
      Route::get('/registeredusers','AdminController@registeredusers')->middleware('auth:admin');

      //Managing the user Orders
      Route::get('/orders','OrderController@index')->name('userorder')->middleware('auth:admin');
      Route::delete('/deletetheorder/{id}','OrderController@deletetheorder')->name('deletetheorder')->middleware('auth:admin');

      Route::get('/user-orders/{id}/{id1}','OrderController@individualorder')->name('individualuserorder')->middleware('auth:admin');
      Route::post('/user-orders/{id}/{id1}','OrderController@statuscheck')->name('individualuserorder')->middleware('auth:admin');  //Status of confirmed or pending
      //Route::post('/user-orders/{id}','OrderController@tracktheorder')->name('tracktheorder')->middleware('auth:admin');

      //Tracking the Orders
      Route::post('/track-the-orders/{id1}/{code}','OrderController@tracktheorder')->name('usertrackorder')->middleware('auth:admin');

      Route::get('/seetrackingstatus','OrderController@seealltrack')->name('seetrackorder')->middleware('auth:admin');
      Route::get('/editthetrackingstatus/{id}/{id1}','OrderController@editthetrack')->name('editthetrack')->middleware('auth:admin');
      Route::post('/editthetrackingstatus/{id}/{id1}','OrderController@edittrackstatus')->name('edittrackstatus')->middleware('auth:admin');

       //Contributors
      Route::resource('/contributor', 'ContributorController')->middleware('auth:admin');
      Route::resource('/color', 'ProductColorController')->middleware('auth:admin');
      Route::resource('/size', 'ProductSizeController')->middleware('auth:admin');
});


//User ROutes






 Auth::routes();



 Route::get('/','Client\HomeController@index');
 Route::get('/home', 'Client\HomeController@index')->name('home');

 //404 Route
 Route::get('/404',function(){
   return view('errors.404');
 });


 //Individual product routes
 Route::get('/product/{id}','Client\HomeController@seeproduct')->name('seeproduct');

 Route::get('/menswear','Client\HomeController@menswear')->name('menswear');
 Route::get('/ladieswear','Client\HomeController@womenswear')->name('ladieswear');
 Route::get('/desiredbrands','Client\HomeController@desiredbrands')->name('desiredbrands');

 //Sales Product Route
 Route::get('/sales','Client\HomeController@productsales')->name('sales');

 //Category routes for Individual child category inside men and ladies Wear
 Route::get('/menswear/{name}','Client\HomeController@mensindividualchildcategory')->name('mensindividualchildcategory');
 Route::get('/ladieswear/{name}','Client\HomeController@ladiesindividualchildcategory')->name('ladiesindividualchildcategory');

 //Interior Design Route
 Route::get('/interior-design','Client\HomeController@interiordesign')->name('interiordesign');
 Route::get('/interior-design/{name}','Client\HomeController@individualinteriordesign')->name('individualinteriordesign');
 Route::get('/interior-design/{id}/{name}','Client\HomeController@individualspecificinteriordesign')->name('individualspecificinteriordesign');

 //Individual interior design products
 Route::get('/product/interior-design/{id}','Client\HomeController@seeinteriordesign')->name('seeinteriordesign');

 //wishlist
 Route::get('/wishlist','Client\CartController@seewishlist')->name('seewishlist')->middleware('auth');
 Route::post('/wishlist/{id}','Client\CartController@addtowishlist')->name('addtowishlist')->middleware('auth');
 Route::delete('/removelist/{id}/{userid}','Client\CartController@removewishlist')->name('removewishlist')->middleware('auth');

 //Cart routes
 Route::get('/cart','Client\CartController@index')->name('cart');
 Route::post('/product/{id}','Client\CartController@addtobag')->name('addtobag');
 //Interior Design add to bag
 Route::post('/product/interior-design/{id}','Client\CartController@interiordesignaddtobag')->name('interiordesignaddtobag');

 //mybag route
 Route::get('/my-bag','Client\CartController@mybag')->name('mybag');

 //checkout

 Route::get('/checkout','Client\CartController@checkout')->name('checkout')->middleware('auth');

 Route::get('/checkout-next','Client\CartController@checkoutnext')->name('checkoutnext')->middleware('auth');

 //Shipping address
 Route::get('/add-shipping-address','Client\CartController@addshippingaddress')->name('addshippingaddress')->middleware('auth');
 Route::post('/add-shipping-address','Client\CartController@shippingaddress')->name('addshippingaddress')->middleware('auth');

//Edit shipping address
Route::get('/edit-shipping-address/{id}','Client\CartController@editshippingaddress')->name('editshippingaddress')->middleware('auth');
Route::post('/edit-shipping-address/{id}','Client\CartController@edittheshippingaddress')->name('editshippingaddress')->middleware('auth');

//Proceed to Payment
Route::post('/proceed-to-payment','Client\CartController@proceedtopayment')->name('payment')->middleware('auth');

//why donate
Route::get('why-donate','Client\CartController@whydonate')->name('whydonate')->middleware('auth');
//Track orders
Route::get('/track-order','Client\CartController@trackorder')->name('trackorder')->middleware('auth');

Route::post('/track-order','Client\CartController@fetchtrackstatus')->name('fetchtrackstatus')->middleware('auth');

//Invoice
Route::get('/invoice','Client\CartController@invoice')->name('invoice')->middleware('auth');

 //Search functionality
 Route::get('/search','Client\SearchController@search')->name('search');




