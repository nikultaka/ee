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
                <label class="control-label col-sm-3" for="Contact">Contact Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_contact_number" value="<?php echo get_site_option( 'wcp_contact_number' );?>" placeholder="Enter Contact Number">
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-3" for="Office">Office Number</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_office_number" placeholder="Enter Office Number">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="Email">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_email" placeholder="Enter Email Address">
                </div>
            </div>
            <h2>Social Link</h2>
            <div class="form-group">
                <label class="control-label col-sm-3" for="Facebook">Facebook Link</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_fb_link" placeholder="Enter Facebook Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="Twitter">Twitter Link</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_tw_link" placeholder="Enter Twitter Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="Instagram">Instagram Link</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_in_link" placeholder="Enter Instagram Link">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="Linkedin">Linkedin Link</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="wcp_lin_link" placeholder="Enter Linkedin Link">
                </div>
            </div>
            
            
            <p id="err_msg" style="display:none;">&nbsp;</p>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default" onclick="submitDetails()">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
function submitDetails()
{
    var err_msg = $("#err_msg");
     if($("#wcp_contact_number").val() == ''){
        err_msg.css('color', "red");
        err_msg.html("Please Enter Contact Number");
        err_msg.show();
        return false;
    } else if($("#wcp_email").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Enter Email");
        err_msg.show();
        return false;
    }else if($("#wcp_fb_link").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Facebook Link");
        err_msg.show();
        return false;
    }else if($("#wcp_tw_link").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Twitter Link");
        err_msg.show();
        return false;
    }else if($("#wcp_in_link").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Instagram Link");
        err_msg.show();
        return false;
    }else if($("#wcp_lin_link").val() =='' ){
        err_msg.css('color', "red");
        err_msg.html("Please Linkedin Link");
        err_msg.show();
        return false;
    }
    else {
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {"action": "WCP_BackEnd_ContactInformation_Controller::save_contact_details", wcp_contact_number: $("#wcp_contact_number").val(), wcp_office_number: $("#wcp_office_number").val(),wcp_email:$("#wcp_email").val(),wcp_fb_link:$("#wcp_fb_link").val(),wcp_tw_link:$("#wcp_tw_link").val(),wcp_in_link:$("#wcp_in_link").val(),wcp_lin_link:$("#wcp_lin_link").val()},
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
