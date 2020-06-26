$(document).ready(function () {
  $('.addToCart').click(function () {
    let id = $(this).data('id');
    let name = $(this).data('name');
    let photo = $(this).data('photo');
    let price = $(this).data('price');

    let item = {
      id:id,
      name:name,
      photo:photo,
      price:price,
      qty:1
    };

    let loStr = localStorage.getItem('items');
    let itemArr;
    if (loStr == null) {
      itemArr = Array();
    }else{
      itemArr = JSON.parse(loStr);
    }
    itemArr.push(item);
    // console.log(student);
    localStorage.setItem('items',JSON.stringify(itemArr));
    getData();
  });

  getData();

  function getData() {
    let loStr = localStorage.getItem('items');
    let count=0;
    if (loStr) {
      let itemArr = JSON.parse(loStr);
      let html='';
      let j=1;
      $.each(itemArr,function (i,v) {
        let id = v.id;
        let name = v.name;
        let photo = v.photo;
        let price = v.price;
        let qty = v.qty;
        count+=qty;
        html += `<tr>
                <td>${j++}</td>
                <td>${name}</td>
                <td style="width: 25%"><img src=${photo} class="img-fluid w-50"></td>
                <td>${price}</td>
                <td>${qty}</td>
                <td><button class="maxbtn" data-id="${i}" > + </button>
                <button class="minbtn" data-id="${i}"> - </button></td>
              </tr>`;
      })
      $('#tbody').html(html);
      $('#mytable').show();
      $('#countNoti').html(count);
    }else{
      $('#mytable').hide();
    }
  }

  // To Server
  $('.checkout_btn').click(function () {
    // alert('ok');
    let loStr = localStorage.getItem('items'); //string
    // let itemArr = JSON.parse(loStr);
    // let url = '{{route("orders.store")}}';
    let note = 'Hello !';  //get note from input
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    if (loStr != null) {
      $.post('/orders',{data:loStr,note:note},function (res) {
        // console.log(res);
        alert(res.status);
        localStorage.clear();
      })
    }else{
      alert('Your Cart is Empty! Go To home Page');
    }

    window.location.href="/";
  })



})









