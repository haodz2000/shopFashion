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
                '<div class="image"><img src="/images/products/thum/'+val.productInfo.images+'"></div>' +
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
        type: "post",
        url: '/Add-Cart/'+id,
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
        type: 'post',
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
            type: 'post',
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
jQuery(document).on('click','button.process-Checkout',function (){
    jQuery("#form-checkout").removeClass('hidden');
})
function regexPhone(){
    const regexPhone = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
    var phone = jQuery("#phone").val().trim();
    if(phone != '')
    {
        if(!regexPhone.test(phone))
        {
            jQuery("span#error-phone").html('Số điện thoại không hợp lệ');
            jQuery("#phone").focus();
        }
        else {
            jQuery("span#error-phone").empty();
            return true;
        }
    }
    else{
        jQuery("span#error-phone").html('Không để trống số điện thoại');
        jQuery("#phone").focus();
    }
}
function regexEmail(){
    const regexEmail =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var email = jQuery("#email").val().trim();
    if(email != '')
    {
        if(!regexEmail.test(email))
        {
            jQuery("span#error-email").html('Email không hợp lệ');
            jQuery("#email").focus();
        }
        else{
            jQuery("span#error-email").empty();
            return true;
        }
    }
    else{
        jQuery("span#error-email").html('Không để trống Email');
        jQuery("#email").focus();
    }
}
function regexName(){
    const regexName = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*/g;
    var name = jQuery("#name").val().trim();
    if(name != '')
    {
        if(!regexName.test(name))
        {
            jQuery("span#error-name").html('Tên không hợp lệ');
            jQuery("#name").focus();
        }
        else{
            jQuery("span#error-name").empty();
            return true;
        }
    }
    else{
        jQuery("span#error-name").html('Không để trống tên');
        jQuery("#name").focus();
    }
}
function regexAddress()
{
    var address = jQuery("#address").val().trim();
    if(address == null||address =='' )
    {
        jQuery("#error-address").html("Bạn chưa nhập địa chỉ");
        return false;
    }
    else {
        jQuery("#error-address").empty();
        return true;
    }
}
function regexFormOrder()
{
    if(regexName()&&regexPhone()&&regexEmail()&&regexAddress())
    {
        return true;
    }
    else {
        return false;
    }
}

/* End Regex Form Check Out*/

