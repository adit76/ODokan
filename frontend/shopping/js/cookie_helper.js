// IF Cookie does not have my_bag in it, create a empty bag //

//COOKIE: // [id,quantity]

// IF BAG IS EMPTY OR NOT LOADED // LOAD AN EMPTY CART / BAG // INITIALLY //
if(Cookies.getJSON('my_bag') == undefined){
  let bag_data = {
    'items': [],
    'user_id': '',
  };

  Cookies.set('my_bag', bag_data, { expires: 7 });
}else{
  console.log("In The Bag: " , getMyBag());
}

function getMyBag(){
  return Cookies.getJSON('my_bag');
}

function setMyBag(value){
  Cookies.set('my_bag', value, { expires: 7 });
  //console.log(Cookies.getJSON('my_bag'));
}

function addToBag(id){
  let bag_data = getMyBag(); // get
  bag_data['items'].push([id,1]); // push new array with id + 1 quantity
  setMyBag(bag_data); // Set new bag
}

function removeFromBag(index){
  let bag_data = getMyBag(); // get
  bag_data['items'].splice( index, 1 ); // remove the index element[] by splicing
  setMyBag(bag_data); // Set new bag
}

function clearBag(){
  let bag_data = {
    'items': [],
    'user_id': '',
  };
  setMyBag(bag_data); // Set new bag
}
