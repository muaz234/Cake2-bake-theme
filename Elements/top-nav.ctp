
<ul class="nav navbar-top-links navbar-right">
    <?php 
    // print_r($menus_for_layout['main']['threaded']);
    $topmenus = $menus_for_layout['blogroll']['threaded'];

    foreach ($topmenus as $myMenu) {
    ?>
      <?php  if (!empty($myMenu['children'])) { ?>
        <li style="margin:10 15px 15px 0; vertical-align:top;"> 
            <a href="<?php echo $this->webroot.$myMenu['Link']['link']; ?>"  class="<?php echo $myMenu['Link']['class'];?> dropdown-toggle" data-toggle="dropdown">
            <?php echo $myMenu['Link']['params']; ?>
            <span style="color: black; font-weight: 500 !important; font-size: medium;"><?php echo $myMenu['Link']['title']; ?></span>
            </a>
          <ul class="dropdown-menu">
            <?php foreach ($myMenu['children'] as $child) { ?>
              <li style="margin:10 15px 15px 0; vertical-align:top;">
                <a href="<?php echo $this->webroot.$child['Link']['link']; ?>">                                      
                <span style="color: black; font-weight: 500 !important; font-size: medium;"><?php echo $child['Link']['title']; ?></span>
                </a>
              </li>  
            <?php   } ?>
          </ul>
        </li>
      <?php } else { ?>
        <li style="margin:10 15px 15px 0; vertical-align:top;">

            <a href="<?php echo $this->webroot.$myMenu['Link']['link']; ?>"  class="<?php echo $myMenu['Link']['class'];?>">  
              <?php echo $myMenu['Link']['params']; ?>
              <span style="color: black; font-weight: 500 !important; font-size: medium;"><?php echo $myMenu['Link']['title']; ?></span>
            </a>
        </li>
      <?php } ?>
    <?php } ?>
  </ul>