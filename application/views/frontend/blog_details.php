<div class="ggty" style="line-height:5rem;" ></div>
<section>
  <div class="container">
<div class="center">
  <div class="">
  <p><?=$blog_data->article_date?></p>
  <h4><?=$blog_data->heading?></h4>
  <hr />
  <h4><b>Royal Homes</b></h4>
  <img src="<?=base_url().$blog_data->image?>" class="img-fluid" alt="" />
  <div class="text-justify mt-5">
<p><?=$blog_data->description?></p>
<p><?=$blog_data->full_description?></p>
  </div>
</div>
</div>
</div>
</section>
<!-- related blogs -->
<section>
<div class="container mt-5">
<div class="row ">
  <?php $i=1; foreach($related_blog->result() as $blogs) { ?>
  <div class="col-md-4 mt-5">
    <a href="<?base_url()?>blog_details/<?=base64_encode($blogs->id)?>" style="color:unset">
    <div class="">
      <img src="<?=base_url().$blogs->image?>" class="img-fluid" alt="">
    </div>
    <div class="text-justify mt-4">
      <p><?=$blogs->article_date?></p>
      <h4><?=$blogs->heading?></h4>
      <p style="font-size:13px;">
        <?$string = strip_tags($blogs->description);
        if (strlen($string) > 300) {

            // truncate string
            $stringCut = substr($string, 0, 300);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        echo $string;?>
      </p>
    </div>
    </a>
  </div>
  <?php $i++; } ?>
</div>
</div>
</section>
