<!DOCTYPE html>
<html>  
<head>
 <?php _widget('head');?>
    <link href="assets/js/footable/css/footable.core.css" rel="stylesheet">  
    <script src="assets/js/footable/js/footable.js"></script>
    <script>
    $(document).ready(function(){
        $('.footable').footable();
    });    
    </script>
</head>
<body class="body-wrap <?php _widget('custom_paletteclass'); ?>">

<?php _widget('slidebar'); ?>
<!-- MAIN WRAPPER -->
<div class="">
    <?php _widget('custom_palette');?>
    
    <!-- HEADER -->
    <div id="divHeaderWrapper">
    <header class="header-standard-3"> 
        <?php _widget('header_loginmenu');?>
        <?php _widget('header_mainmenu');?>
    </header>   
    </div>

    <!-- MAIN CONTENT -->
    <section class="slice bg-white bb" id="main">
        <div class="wp-section">
            <div id="content-block" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="main-inner">
                <!-- MAP -->
                <div class="container">
                    <!-- SLOGAN -->
                    <div class="block-content block-content-small-padding">
                        <div class="row">
                            <div class="col-sm-12">
        <div class="row-fluid">
            <div class="span12">
            <div class="panel panel-default panel-sidebar-1">
            <div class="panel-heading">
                <h2 id="content-main" class=" home-page-body main-heading bottom-line"><?php _l('My reservations and payments'); ?></h2>
            </div>
            <div class="property_content panel-body">
                <div class="widget-content">
                
                    <?php if($this->session->flashdata('message')):?>
                    <?php echo $this->session->flashdata('message')?>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <p class="alert alert-error"><?php echo $this->session->flashdata('error')?></p>
                    <?php endif;?>
                    <table class="table footable table-striped">
                      <thead>
                        <tr>
                        	<th>#</th>
                            <th><?php _l('From date');?></th>
                            <th><?php _l('To date');?></th>
                            <th><?php _l('Property');?></th>
                            <th><?php _l('Client');?></th>
                            <th><?php _l('Paid');?></th>
                            <th><?php _l('Available');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings)): foreach($listings as $listing_item):?>
                                    <tr>
                                        <td><?php echo $listing_item->id; ?></td>
                                        <td><?php echo $listing_item->date_from; ?></td>
                                        <td><?php echo $listing_item->date_to; ?></td>
                                        <td><?php echo $properties[$listing_item->property_id]; ?></td>
                                        <td><?php echo $listing_item->buyer_username; ?></td>
                                        <td>
                                        <?php if($listing_item->total_paid == $listing_item->total_price): ?>
                                        <span class="label label-success"><?php echo $listing_item->total_paid.'/'.$listing_item->total_price.' '.$listing_item->currency_code; ?></span>
                                        <?php elseif($listing_item->total_paid > 0):?>
                                        <span class="label label-warning"><?php echo $listing_item->total_paid.'/'.$listing_item->total_price.' '.$listing_item->currency_code; ?></span>
                                        <?php else: ?>
                                        <span class="label label-default"><?php echo $listing_item->total_paid.'/'.$listing_item->total_price.' '.$listing_item->currency_code; ?></span>
                                        <?php endif; ?>
                                        </td>
                                        <td>
                                        <?php
                                            $earned = $listing_item->total_paid-$listing_item->total_paid*$listing_item->booking_fee/100;
                                            
                                            if(strtotime($listing_item->date_from)+24*60*60 < time())
                                            {
                                                echo $earned.' '.$listing_item->currency_code;
                                            }
                                            else
                                            {
                                                echo '-';
                                            }
                                         ?></td>
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php _l('We could not find any');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>
                          <div class="pagination">
                          <?php echo $pagination_links; ?>
                          </div>
                  </div>
            </div>
            </div>
            <div class="panel panel-default panel-sidebar-1">
            <div class="panel-heading"><h2><?php _l('Last 5 withdrawal request'); ?></h2></div>
            <div class="property_content panel-body">
                <div class="widget-controls"> 
                    <span>
                    <?php _l('You can withdraw up to:'); ?>
                    <?php
                        $index=0;
                        
                        if(count($withdrawal_amounts) == 0)echo '0';
                        
                        foreach($withdrawal_amounts as $currency=>$amount)
                        {
                            echo '<span class="label label-success">'.$amount.' '.$currency.'</span>&nbsp;';
                        }
                    ?>
                    <?php _l('Waiting to check in pass 1 day:'); ?>
                    <?php
                        $index=0;
                        
                        if(count($pending_amounts) == 0)echo '0';
                        
                        foreach($pending_amounts as $currency=>$amount)
                        {
                            echo '<span class="label label-info">'.$amount.' '.$currency.'</span>&nbsp;';
                        }
                    ?>
                    </span>
                    <?php if(count($withdrawal_amounts) > 0): ?>
                    <?php echo anchor('rates/make_withdrawal/'.$lang_code.'#content', '<i class="icon-briefcase"></i>&nbsp;&nbsp;'.lang_check('Make a withdrawal'), 'class="btn btn-primary pull-right" style="margin-right:5px;"')?>
                    <?php endif;?>
                </div>
                <div class="widget-content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                        	<th>#</th>
                            <th><?php _l('Email');?></th>
                            <th><?php _l('Date requested');?></th>
                            <th><?php _l('Date completed');?></th>
                            <th><?php _l('Amount');?></th>
                            <th><?php _l('Completed');?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(count($listings_withdrawal)): foreach($listings_withdrawal as $listing_item):?>
                                    <tr>
                                        <td><?php echo $listing_item->id_withdrawal; ?></td>
                                        <td><?php echo $listing_item->withdrawal_email; ?></td>
                                        <td><?php echo $listing_item->date_requested; ?></td>
                                        <td><?php echo $listing_item->date_completed; ?></td>
                                        <td><?php echo $listing_item->amount.' '.$listing_item->currency; ?></td>
                                        <td>
                                        <?php 
                                        if($listing_item->completed)
                                        {
                                            echo '<span class="label label-success"><i class="icon-ok icon-white"></i></span>';
                                        }
                                        else
                                        {
                                            echo '<span class="label label-important"><i class="icon-remove icon-white"></i></span>';
                                        }
                                        ?>
                                        </td>
                                    </tr>
                        <?php endforeach;?>
                        <?php else:?>
                                    <tr>
                                    	<td colspan="20"><?php _l('We could not find any');?></td>
                                    </tr>
                        <?php endif;?>           
                      </tbody>
                    </table>
                  </div>
            </div>
            </div>
            </div>
        </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.block-content -->
                    <!-- SOCIAL -->
                    <?php //_widget('bottom_social'); ?>  
                    <!-- STATISTICS -->
                    <?php //_widget('bottom_stats'); ?> 
                </div><!-- /.container -->
            </div><!-- /#main-inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'standard')); ?>
</div>

<?php _widget('custom_javascript');?>

</body>
</html>