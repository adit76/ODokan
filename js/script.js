function delete_item(){
  return confirm('Are you sure you want to delete the item?');
}

function edit_item(){
  return confirm('Are you sure you want to edit the item?');
}



$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="field-wrapper" style="margin:5px;"><input type="text" name="sku[]" placeholder="Product Tag(product_code-product_country-product_size-product_color)" id="sku" required="required" />&nbsp<select name="country[]" required><option selected disabled hidden>Choose Country here</option><option value="UK">UK</option><option value="USA">USA</option></select>&nbsp<select name="size[] required"><option selected disabled hidden>Choose Size here</option><option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option></select>&nbsp<input type="text" name="price[]" placeholder="Price" id="price" required="required"/>&nbsp<label for="color"><strong>Color</strong></label><input type="color" name="color[]" id="color" value="#000000" required="required"/> &nbsp  <input type="hidden" name="mixed_color[]" value="0">&nbsp<input type="checkbox" onclick="this.previousElementSibling.value=1-this.previousElementSibling.value"><strong>&nbspMixed Color</strong>&nbsp<input type="text" name="stock[]" placeholder="Stock" id="stock" required="required" />&nbsp<a href="javascript:void(0);" class="remove_button"><button type="button" class="btn btn-danger">Remove field</button></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });


    //For displaying the image name

    $('#product_image').on('change', function () {
        $('#files_info').text(" ");
      for(let i = 0 ; i < $('#product_image').prop('files').length ; i++){
        $('#files_info').text($('#files_info').text() + " " + $('#product_image').prop('files')[i]['name']);
        console.log($('#product_image').prop('files')[i]['name'])
      }

    });
});
