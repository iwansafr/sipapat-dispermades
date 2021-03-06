<a href="<?php echo base_url() ?>"><img src="<?php echo image_module('config/logo', @$logo['image']) ?>" class="img img-fluid" width="<?php echo @intval($logo['width']) ?>" height="<?php echo @intval($logo['height']) ?>"></a>
<nav class="navbar navbar-expand-lg navbar-light bg-light menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    if(!empty($home['menu_top']))
    {
      ?>
      <ul class="navbar-nav mr-auto">
        <?php
        foreach ($home['menu_top'] as $key => $value)
        {
          if(empty($value['child']))
          {
            ?>
            <li class="nav-item">
              <a href="<?php echo menu_link($value['link']) ?>" class="nav-link"><?php echo $value['title'] ?></a>
            </li>
            <?php
          }else{
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_<?php echo $value['id'];?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $value['title'] ?>
              </a>
              <div class="dropdown-menu" aria-laveledby="navbarDropdown_<?php echo $value['id'];?>">
                <?php
                foreach ($value['child'] as $ckey => $cvalue)
                {
                  ?>
                  <a href="<?php echo menu_link($cvalue['link']) ?>" class="dropdown-item"><?php echo $cvalue['title'] ?></a>
                  <?php
                }
                ?>
              </div>
            </li>
            <?php
          }
        }
        ?>
      </ul>
      <?php
    }
    ?>
  </div>
</nav>