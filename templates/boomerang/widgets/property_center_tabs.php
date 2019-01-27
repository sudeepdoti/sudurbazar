                        <!-- PROPERTY DESCRIPTION -->
                        <div class="row margin-bottom">
                            <div class="col-md-12">
                                <div class="tabs-framed boxed">
                                    <ul class="tabs clearfix">
                                        <li class="active"><a href="#tab-1" data-toggle="tab"><?php _l('Additional details');?></a></li>
                                        <li><a href="#tab-map" data-toggle="tab" data-type="gmap"><?php _l('Map');?></a></li>
                                        <?php if(!empty($estate_data_option_36)): ?>
                                        <!--<li><a href="#tab-mortgage" data-toggle="tab" data-type="gmap"><?php _l('Mortgage'); ?></a></li>-->
                                        <?php endif; ?>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1">
                                            <div class="tab-body">
                                                <div class="section-title-wr nopadding">
                                                    <h3 class="section-title left">{lang_Description}</h3>
                                                </div>
                                                
                                                <p>
                                                    <?php _che($estate_data_option_17, '<p class="alert alert-success">'.lang_check('Not available').'</p>'); ?>
                                                </p>
                                                <br/>
                                                
                                                
                                                
                                            </div> 
                                        </div>

                                        <div class="tab-pane fade" id="tab-map">
                                            <div class="tab-body">
                                                <?php _widget('custom_property_center_map');?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-mortgage">
                                            <div class="tab-body">
                                                <?php _widget('right_mortgage');?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>