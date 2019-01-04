<?php
/*
Widget-title: Contact form
Widget-preview-image: /assets/img/widgets_preview/center_contactform.jpg
 */
?>

<div class="section-title-wr nopadding-left">
    <h3 class="section-title left"><span>{lang_Contactform}</span></h3>
</div>
<p></p>
<?php if(count($has_settings_email) > 0): ?>
<form  method="post" class="form-light mt-20 property-form" action="{page_current_url}#form">
    <div class="box-panel box-panel-alert">
        <?php _che($validation_errors); ?>
        <?php _che($form_sent_message); ?>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {form_error_firstname}">
                <label>{lang_FirstLast}</label>
                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="{lang_FirstLast}" value="{form_value_firstname}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {form_error_email}">
                <label>{lang_Email}</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="{lang_Email}" value="{form_value_email}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group {form_error_phone}">
                <label>{lang_Phone}</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="{lang_Phone}"  value="{form_value_phone}">
            </div>
        </div>
        <div class="col-md-6">
            <?php if(config_item('captcha_disabled') === FALSE): ?>
                <div class="row">
                    <div class="col-md-6" style="padding-top:22px;">
                        <?php echo $captcha[ 'image']; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {form_error_captcha}">
                            <label> </label>
                            <input class="captcha form-control {form_error_captcha}" name="captcha" type="text" placeholder="{lang_Captcha}" value="" />
                            <input class="hidden" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
            <div class="control-group" >
                <label class="control-label captcha"></label>
                <div class="controls">
                    <?php _recaptcha(true); ?>
               </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="form-group  {form_error_message}">
        <label>{lang_Message}</label>
        <textarea class="form-control" id="message" name="message"  placeholder="{lang_Message}" style="height:100px;">{form_value_message}</textarea>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button type="reset" class="btn btn-light"><?php _l('Reset');?></button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-base btn-icon btn-icon-right btn-fly pull-right">
                <span>{lang_Send}</span>
            </button>
        </div>
    </div>
</form>
<?php endif;?>