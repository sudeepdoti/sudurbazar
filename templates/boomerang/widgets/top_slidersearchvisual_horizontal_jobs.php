<?php
/*
Widget-title: Slider with Visua Search
Widget-preview-image: /assets/img/widgets_preview/top_slidersearch.jpg
*/
?>

<section class="slice bb resize-block save-form section-slider">
        <div class="wp-section">
            <div class="container">
                <div class="row-fluid">
                    <div class="jumbotron-horizontal">
                                <!-- FIND property list WIDGET -->
                                <div class="panel panel-base panel-base2 no-margin">
                                    <div class="panel-title">
                                        <h2>Find ads nearest to you</h2>
                                    </div>
                                    <form class="form-base search-form" >
                                        <div class="panel-body">
                                            <div class="row row-horizontal row-horizontal-jobs">
                                            	<div class="col-sm-9">
                                                	<div class="row">
                                                		<?php _search_form_primary(7); ?>
                                                	</div>
                                                </div>
                                                <div class="col-sm-3">
                                                <button  id="search-start" type="submit" class="btn btn-xl btn-block-bm btn-alt btn-icon btn-icon-right btn-icon-go btn-square">
                                            <span>{lang_Search}</span>
                                        </button>
                                        </div>
                                            </div>
                                        </div>
                                        

                                        
                                    </form>
                                </div>
                                <?php if(file_exists(APPPATH.'controllers/admin/savesearch.php')): ?>
                                    <button id="search-save" type="button" class="btn btn-info"><i class="icon-bookmark"></i>{lang_SaveResearch}</button>
                                <?php endif; ?>
                            </div>
                </div>
            </div>
        </div>
    </section>