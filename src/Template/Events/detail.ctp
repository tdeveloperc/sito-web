<!-- Image-Slider -->
<section id="listing_detail_banner" class="parallex-bg">
    <div id="listing_img_slider">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $event->img; ?>" alt="image"></div>
            <div class="item"><img src="<?php echo $event->img1; ?>" alt="image"></div>
            <div class="item"><img src="<?php echo $event->img2; ?>" alt="image"></div>
            <div class="item"><img src="<?php echo $event->img3; ?>" alt="image"></div>
            <div class="item"><img src="<?php echo $event->img4; ?>" alt="image"></div>
        </div>
    </div>
    <div class="view_map">
        <a href="#single_map" class="js-target-scroll"><i class="fa fa-map-marker"></i></a>
    </div>
</section>
<!-- /Image-Slider -->

<section class="listing_detail_header">
    <div class="container">
        <h1><?php echo $event->title; ?></h1>
        <div class="listing_rating">
            <p><span class="review_score">4</span>
                <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i>
                <i class="fa fa-star active"></i> <i class="fa fa-star"></i>
                (<?=count($recensioni)?> Recensioni) </p>
        </div>
    </div>
</section>

<!-- Listings -->
<section class="listing_info_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ElemoListing_detail">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#description" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa  fa-file-text-o"></i> Descrizione </a>
                                    </a>
                                </h4>
                            </div>
                            <div id="description" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p><?php echo $event->description; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing-Map -->
                    <div id="single_map">
                        <div class="widget_title">
                            <h4>Visualizza sulla mappa</h4>
                        </div>
                        <div id="single_map_wrp">
                            <div id="singlemap" data-latitude="<?php echo $event->latitudine; ?>" data-longitude="<?php echo $event->longitudine; ?>" data-map-icon="<?=$url?>/webroot/img/category-icon2.png"></div>

                        </div>
                    </div>
                    <!-- /Listing-Map -->

                    <!-- Review-List -->
                    <div class="reviews_list">
                        <div class="widget_title">
                            <h4><span><?=count($recensioni)?> Recensioni Per</span> <?php echo $event->title ?></h4>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <select class="form-control" id="review">
                                 <option value="0">Filtra</option>
                                 <option value="1">1 Stella</option>
                                 <option value="2">2 Stelle</option>
                                 <option value="3">3 Stelle</option>
                                 <option value="4">4 Stelle</option>
                                 <option value="5">5 Stelle</option>
                                </select>
                            </div>
                            
                        </div>
                    <?php $i=1; foreach($recensioni as $recensione): ?>
                        <div id='<?=$i?>' class="review_wrap">
                            <div class="review_author">
                                <img src="<?=$url?>/webroot/img/94x94.jpg" alt="image">
                                <figcaption>
                                    <h6><?= $recensione->username; ?></h6>
                                </figcaption>
                            </div>
                            <div class="review_detail">
                                <h5><?= $recensione->titolo; ?></h5>
                                <p><?= $recensione->recensione; ?> </p>
                                <div class="listing_rating">
                                    <p><span class="review_score"><?= $recensione->rating; ?></span>
                                        <?php for($j=0;$j<$recensione->rating;$j++){ ?>
                                            <i class="fa fa-star active"></i> 
                                        <?php } ?>
                                        (<?= count($recensioni).' Recensioni' ?>) </p>
                                    <p><i class="fa fa-clock-o"></i> <?= $recensione->data ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $i++; endforeach;?>
                        <p id='error'></p>
                    </div>
                    <!-- /Review-List -->
                    <?php $user = $this->request->session()->read('Auth.User'); if ($user){?>
                    <!-- Review-Form -->
                    <div id="writereview" class="review_form">
                        <div class="widget_title">
                            <h4>Scrivi una recensione</h4>
                        </div>
                        <?= $this->Form->create($review) ?>
                        <form action="" method="get">
                            
                            <input type="hidden" name="id_event" value="<?php echo $event->id?>">
                            <input type="hidden" name="id_user" value="<?php echo $user['id']?>">
                            <div class="form-group">
                                <label class="form-label">Quante Stelle vuoi dargli?</label>
                                <div class="listing_rating">
                                    <input name="rating" id="rating-1" value="5" type="radio" required>
                                    <label for="rating-1" class="fa fa-star"></label>
                                    <input name="rating" id="rating-2" value="4" type="radio" required>
                                    <label for="rating-2" class="fa fa-star"></label>
                                    <input name="rating" id="rating-3" value="3" type="radio" required>
                                    <label for="rating-3" class="fa fa-star"></label>
                                    <input name="rating" id="rating-4" value="2" type="radio" required>
                                    <label for="rating-4" class="fa fa-star"></label>
                                    <input name="rating" id="rating-5" value="1" type="radio" required>
                                    <label for="rating-5" class="fa fa-star"></label>
                                </div>

                            </div>
                            <?php if($user['visualizza_nome'] == 0){?>
                                        <input type="hidden" name="username" value="<?php echo $user['username']?>">
                                <?php }else{ ?>
                                        <input type="hidden" name="username" value="<?php echo $user['name'].' '.$user['surname']?>">
                                    <?php } ?>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" placeholder="you@website.com" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Titolo</label>
                                <input name="titolo" type="text" placeholder="Titolo della tua recensione" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Recensione</label>
                                <textarea name="recensione" cols="" rows="" class="form-control" placeholder="La tua esperienza" required></textarea>
                            </div>
                            <div class="form-group">
                            <?= $this->Form->button(__('Invia recensione'), array('class'=>'btn')); ?>
                            <?= $this->Form->end() ?>
                            </div>
                        </form>
                    </div>
                    <!-- Review-Form -->
                    <?php }else{ ?>
                        <p>
                            Effettua login per scrivere una recensione  
                            <div class="back_home">
                            <?php echo $this->Html->link('Accedi', ['controller' => 'Users', 'action' => 'login'],['class' => 'btn outline-btn btn-sm']);?>
                            </div>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Listings -->
