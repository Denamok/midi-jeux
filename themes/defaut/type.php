<?php include(dirname(__FILE__).'/header.php');# On insere le header ?>
            <!-- primary content -->
            <div id="primary-content">
              <div class="blocks">

                <!-- post -->
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): # On boucle sur les articles ?>
                <div class="post clearfix">
			<h2 class="title"><?php $plxShow->artTitle('link'); ?></h2>
                  <div class="post-date">
                    <p class="day"><?php $plxShow->artCreationDate('#day #num_day #month #num_year(4)'); ?></p>
                  </div>

                 <div class="post-info clearfix with-thumbs">
                    <p class="author alignleft">
                       <?php $plxShow->artTyp('|'); echo " |"; ?> 
                    </p>
                    <p class="author alignleft">
                       <?php $plxShow->artCat('|') ?>
                   </p>

                    <p class="comments alignright"><a href="#" class="comments"></a><?php $plxShow->artNbCom('#nb','#nb','#nb'); ?></p>
                  </div>

		 <div class="thumb">
                  <?php $plxShow->artThumbnail(); ?>
                  </div>

                  <div class="post-content clearfix">
                  <p><?php $plxShow->artChapo(); ?></p>
                  </div>


                </div>
                <!-- /post -->
		<?php endwhile; # Fin de la boucle sur les articles ?>
		<?php # On affiche la pagination ?>
                        <p class="pagination">
                          <?php $plxShow->pagination(); ?>
                        </p>
                        <!-- /page navigation -->


              </div>
            </div>
            <!-- /primary content -->
<?php include(dirname(__FILE__).'/footer.php'); # On insere le footer ?>
