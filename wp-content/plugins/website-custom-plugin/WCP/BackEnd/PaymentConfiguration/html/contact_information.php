<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo plugins_url( 'website-custom-plugin/WCP/assets/css/bootstrap.min.css' ); ?>" >
<script type="text/javascript" src="<?php echo plugins_url( 'website-custom-plugin/WCP/assets/js/bootstrap.min.js' ); ?>"></script>
<script type="text/javascript" src="<?php echo plugins_url( 'website-custom-plugin/WCP/assets/js/jquery.blockUI.min.js' ); ?>"></script>

<div class="flex_container" style="padding-top:20px;">

    <div class="container">
        <h3>Contact Detail</h3>
        <hr style="background-color:#000000; height:2px;">
        <div style="padding-bottom:10px;">
            <div style="clear:both;"></div>
        </div>

        <form class="form-horizontal" name="frmPaypalConfiguration" id="frmPaypalConfiguration" action="" onsubmit="return false;">
            
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Contact Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_contact_number" placeholder="Enter Contact Number">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Office Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_office_number" placeholder="Enter Office Number">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_email" placeholder="Enter Email Address">
                </div>
            </div>
            <h2>Social Link</h2>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Facebook Link</label>
                <div class="col-sm-9">
                    <input type="product_price" class="form-control" id="wcp_product_price" placeholder="Enter Facebook Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Twitter Link</label>
                <div class="col-sm-9">
                    <input type="product_price" class="form-control" id="wcp_product_price" placeholder="Enter Twitter Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Instagram Link</label>
                <div class="col-sm-9">
                    <input type="product_price" class="form-control" id="wcp_product_price" placeholder="Enter Instagram Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Linkedin Link</label>
                <div class="col-sm-9">
                    <input type="product_price" class="form-control" id="wcp_product_price" placeholder="Enter Linkedin Link">
                </div>
            </div>
            
            
            <p id="err_msg" style="display:none;">&nbsp;</p>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" onclick="submitPaypalConfig()">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
function submitPaypalConfig()
{
    var err_msg = $("#err_msg");
    if (!$("#wcp_paypal_mode option:selected").length) {
        err_msg.css('color', "red");
        err_msg.html("Please select the paypal mode.");
        err_msg.show();
        return false;
    } else if($("#wcp_paypal_sandbox_app_key").val() == ''){
        err_msg.css('color', "red");
        err_msg.html("Please Enter Sandbox App Key");
        err_msg.show();
        return false;
    } else if($("#wcp_paypal_production_app_key").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Enter Production App Key");
        err_msg.show();
        return false;
    }else if($("#wcp_product_price").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Enter Product Price");
        err_msg.show();
        return false;
    } else {
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {"action": "WCP_BackEnd_PaymentConfiguration_Controller::save_paypal_configuration", wcp_paypal_mode: $("#wcp_paypal_mode option:selected").val(), wcp_paypal_sandbox_app_key: $("#wcp_paypal_sandbox_app_key").val(),wcp_paypal_production_app_key:$("#wcp_paypal_production_app_key").val(),wcp_product_price:$("#wcp_product_price").val()},
            success: function (data) {
                var result =  JSON.parse(data);
                if(result.status == 1){
                    err_msg.css('color', "green");
                    err_msg.html(result.msg);
                    err_msg.show();
                    return false;
                }
            }
        });
    }
}
</script>    
