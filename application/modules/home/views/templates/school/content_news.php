<?php if (!empty($home['content_news'])): ?> 
  <div class="col-md-12">
    <nav aria-label="breadcrumb">
      <h3>Kabar Berita</h3>
      <ol class="breadcrumb">
        <div id="contentNews" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php $i = 0; ?>
            <?php foreach ($home['content_news'] as $key => $value): ?>
              <li data-target="#contentNews" data-slide-to="<?php echo $i ?>" class="<?php echo ($i==0) ? 'active' : ''; ?>"></li>
              <?php $i++; ?>
            <?php endforeach ?>
          </ol>
          <div class="carousel-inner">
            <?php $i=0; ?>
            <?php foreach ($home['content_news'] as $key => $value): ?>
              <div class="carousel-item <?php echo ($i==0) ? 'active':''; ?>">
                <i class="fa fa-newspaper-o"></i>
                <div class="row">
                  <div class="col-md-4" style="text-align: right;">
                    <img src="<?php echo image_module('content', $value);?>" class="thumbnail">
                  </div>
                  <div class="col-md-8">
                    <a href="<?php echo content_link($value['slug']) ?>" class="sm-title"><?php echo $value['title'] ?></a>
                    <div class="clearfix"></div>
                    <span class="xs-title">
                      <?php echo content_date($value['created']) ?>
                    </span>
                  </div>
                </div>
              </div>
              <?php $i++; ?>
            <?php endforeach ?>
            
          </div>
          <a class="left carousel-control" href="#contentNews" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#contentNews" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </ol>
    </nav>
  </div>
<?php endif ?>