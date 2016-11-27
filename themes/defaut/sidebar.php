<?php if(!defined('PLX_ROOT')) exit; ?>
            <div id="sidebar">


              <ul class="blocks">

                <!-- links -->
                <li class="block">
                  <div class="block-bookmarks">
                    <h3 class="title"><span>Prochaines sessions</span></h3>

                    <div class="block-div"></div>

                    <div class="block-div-arrow"></div>

                    <ul>
                      <?php $plxShow->typList('','<li id="#typ_id"><a class="#typ_status" href="#typ_url" title="#typ_name">#typ_name (#art_nb)</a></li>'); ?>
                    </ul>

                  </div>
                  <div class="block-bookmarks">
                    <h3 class="title"><span>Archives</span></h3>

                    <div class="block-div"></div>

                    <div class="block-div-arrow"></div>

                    <ul>
                      <?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" class="fadeThis" title="#archives_name"><span class="entry">#archives_name <span class="details inline">(#archives_nbart)</span></span></a></li>'); ?>
                    </ul>
                  </div>
                </li>
                <!-- /links -->

              </ul>

            </div>
