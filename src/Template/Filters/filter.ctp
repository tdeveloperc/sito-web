	<!-- START BANNER -->
    <section id="banner" class="intro-bg parallex-bg section-padding">
	<div class="container">
		<div class="intro_text white-text div_zindex">
			<h1>Scegli il viaggio adatto per te</h1>
		</div>
	</div>
	<div class="dark-overlay"></div>
</section>
<!-- /Banner -->
<!-- Listings -->
<section>
	<!--<div class="ElemoListing_map">
    	<div id="map-container">
		    <div id="map">
		    </div>
		</div>
    </div>-->

    
	<div class="container">
    <?php if(!empty($filter)){ ?>
    	<div class="listing_header">
        	<h4 class="mt-5 mb-5">Ecco quello che cercavi</h4>
        </div>
        
        <div class="row">
        
       
            <?php foreach($filter as $filtri): ?>
                <div class="col-md-6 grid_col show_listing">
                    <div class="items-list listing_wrap" data-post-id="1">
                        <div class="listing_img">
                            <a href="../events/detail/<?php echo $filtri->id; ?>"><img src="<?=$filtri->img; ?>" alt="image"></a>
                        </div>
                        <div class="listing_info">
                            <div class="post_category">
                                <a href="#"><?=$filtri->type; ?></a>
                            </div>
                            <h4><?= $this->Html->link($filtri->title, ['controller' =>'events','action' => 'detail', $filtri->id]) ?></h4>
                            <div class="listing_review_info">
                                <p class="listing_map_m"><i class="fa fa-map-marker"></i> <?=$filtri->city; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; 
        }
        else{
           echo '<h4 class="mt-5 mb-5 text-center"> Nessun risultato per la ricerca effettuata </h4> '; 
        }
        
        ?>
        </div>
    </div>
</section>
<!-- /Listings -->