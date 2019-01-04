<?php
/*
Widget-title: Agents 
Widget-preview-image: /assets/img/widgets_preview/bottom_agents.jpg
*/
?>

<section class="slice bg-white bb animate-hover-slide-3 widget-agents">
    <div class="wp-section">
        <div class="container">
            <div class="section-title-wr">
                <h3 class="section-title left"><span>{lang_Agents}</span></h3>
                <div class="aux-nav">
                    <!-- Auxiliary content comes here -->
                </div>
            </div>
            
            <div class="row"> 
                <?php foreach($paginated_agents as $item): ?>
                <div class="col-md-3">
                    <div class="wp-block inverse">
                        <div class="figure">
                            <a href="<?php  _che($item['agent_url']);?>">
                                <img alt="" src="<?php echo _simg($item['image_url'], '600x600'); ?>" class="img-responsive">
                            </a>
                            <?php if(!empty($item['agent_profile']['facebook_link'])   ||
                                        !empty($item['agent_profile']['youtube_link']) ||
                                        !empty($item['agent_profile']['gplus_link'])   ||
                                        !empty($item['agent_profile']['twitter_link']) ||
                                        !empty($item['agent_profile']['linkedin_link'])) :?>
                            <div class="figcaption">                                    
                                <ul class="social-icons text-right">
                                    <li class="text pull-left"><?php _l('More on');?>: </li>
                                    <?php if(!empty($item['agent_profile']['facebook_link'])): ?>
                                    <li><a href="<?php echo $item['agent_profile']['facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <?php endif; ?>
                                    <?php if(!empty($item['agent_profile']['youtube_link'])): ?>
                                        <li><a href="<?php echo $item['agent_profile']['youtube_link']; ?>"><i class="fa fa-youtube"></i></a></li>
                                    <?php endif; ?>
                                    <?php if(!empty($item['agent_profile']['gplus_link'])): ?>
                                        <li><a href="<?php echo $item['agent_profile']['gplus_link']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                    <?php endif; ?>
                                    <?php if(!empty($item['agent_profile']['twitter_link'])): ?>
                                        <li><a href="<?php echo $item['agent_profile']['twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php if(!empty($item['agent_profile']['linkedin_link'])): ?>
                                        <li><a href="<?php echo $item['agent_profile']['linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php endif;?>
                        </div>
                        <h2>  <a href="<?php  _che($item['agent_url']);?>"><?php  _che($item['name_surname']);?></a><!--<small>CEO</small>--></h2>
                        <p>
                           <?php  _che($item['phone']);?><br/>
                           <a href="mailto:<?php  _che($item['mail']);?>" title="<?php  _che($item['mail']);?>"><?php  _che($item['mail']);?></a>
                        </p>
                    </div>
                </div>

                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>