<?php   $pathContents = glob("./contents/*php*"); ?>


        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" style="margin-top: 80px">

          <?php
                for ($i=0; $i < count($pathContents) ; $i++) {
                  $namePageNav = str_replace( array("./contents/",".php"), "" ,$pathContents[$i]);
          ?>
            <li class="nav-item" >
              <a class="nav-link" href="<?php echo $namePageNav ?>">
                <span class="menu-title"><?php echo strtoupper($namePageNav) ?></span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>

            <?php } ?>
          </ul>
        </nav>

