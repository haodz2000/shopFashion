jQuery.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});
function changeCart(data){
    var dataCart = '<a href="cart" class="cart-icon">cart <span class="cart_no">'+data.totalQuanty+'</span></a>\n' +
        '    <ul  class="option-cart-item width-cart">';
    var slug = 0;
    jQuery.each(data.products, function (index,val)
    {
        slug++;
        if(slug<4)
        {
            dataCart += ' <li>' +
                '<div class="cart-item">' +
                '<div class="image"><img src="images/products/thum/'+val.productInfo.images+'"></div>' +
                '<div class="item-description">' +
                '<p class="name">'+val.productInfo.name+'</p>' +
                '<p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">'+val.quanty+'</span></p>' +
                '</div>' +
                '<div class="right">' +
                '<p class="price">'+ Intl.NumberFormat('vi', {style : 'currency', currency : 'VND'}).format(val.price) +'</p>' +
                '<button data-id="'+val.productInfo.id+'" class="remove"><img src="images/remove.png" alt="remove"></button>' +
                '</div>' +
                '</div>' +
                '</li>';
        }
    })
    if(slug >=4){
        dataCart +='<a href="cart" class="remove">>>Xem thêm</a>';
    }
    dataCart +='  <li>' +
        '            <span class="total">Total <strong>'+Intl.NumberFormat('vi', {style : 'currency', currency : 'VND'}).format(data.totalPrice) +'</strong></span><button class="checkout" onClick="location.href=\'checkout.html\'">CheckOut</button>\n' +
        '        </li>' +
        '    </ul>'
    return dataCart;
}
/* Add Cart Ajax*/
jQuery(document).on('click','button.add-cart',function (e)
{
    e.preventDefault();
    var id = jQuery(this).data('id');
    jQuery.ajax({
        type: "GET",
        url: 'Add-Cart/'+id,
        dataType: 'json',
        success: function (data) {
            var dataCart = changeCart(data);
            jQuery("#cart-item").empty();
            jQuery("#cart-item").html(dataCart);
            var html = '<p>Đã thêm vào giỏ hàng</p>' +
                "<a class='white-bg width-slug' href='cart'>Vào giỏ hàng</a>";
            alertify.success(html);
        },
        error: function () {
            console.log('Error:');
        }
    });
})

/* Del Cart Ajax*/
jQuery(document).on('click','button.remove',function (e){
    e.preventDefault();
    var id = jQuery(this).data('id');
    jQuery.ajax({
        type: 'GET',
        url:'Del-Item-Cart/'+id,
        dataType: 'json',
        success:function (data){
            jQuery("#data-cart").load(" .table-cart");
            alertify.success("Xóa thành công");
            var dataCart = changeCart(data);
            jQuery("#cart-item").empty();
            jQuery("#cart-item").html(dataCart);
        },
        error:function (){
            console.log('Error');
        }

    })
})
/* Update Cart*/
jQuery(document).on('blur','input.quanty',function (e){

    e.preventDefault();
    var id = jQuery(this).data('id');
    var newQuanty = parseInt(jQuery(this).val());
    if( newQuanty >0)
    {
        jQuery.ajax({
            type: 'GET',
            url: 'Update-Cart/'+id+'/'+newQuanty,
            success:function (data){
                if(data != 0)
                {
                    jQuery("#data-cart").load(" .table-cart");
                    var dataCart = changeCart(data);
                    jQuery("#cart-item").empty();
                    jQuery("#cart-item").html(dataCart);
                    alertify.success("Cập nhật thành công");
                }
            },
            error: function (){
                console.log('error');
            }
        })
    }
    else {
        jQuery("#data-cart").load(" .table-cart");
    }
})

/* End Ajax Cart*/
/* Regex Form Check Out*/
/* End Regex Form Check Out*/

