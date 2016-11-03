<?php if(!defined('PLX_ROOT')) exit; ?>
            <!-- sidebar -->
	<?php include(dirname(__FILE__).'/sidebar.php'); # On insere la sidebar ?>
            <!-- sidebar -->

          </div>
        </div>
        <!-- /main content -->

        <!-- footer -->
        <div id="footer">
          <div class="page-content">
          </div>
        </div>
        <!-- /footer -->

      </div>
    </div>
    <!-- /shadow -->

    <!-- page controls -->
    <div id="pageControls"></div>
    <!-- /page controls -->

  </div>
  <!-- /page -->
  
  <!--[if lte IE 6]> <script type="text/javascript"> isIE6 = true; isIE = true; </script> <![endif]-->
  <!--[if gte IE 7]> <script type="text/javascript"> isIE = true; </script> <![endif]-->
  <script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.mystique.js"></script>
  
</body>
</html>
