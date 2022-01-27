<section class="">
  <div class="container">
    <div class="col-md-12">
      <img src="https://www.orangetree.in/blog/wp-content/uploads/2022/01/kites-bar-unit.jpg" class="img-fluid" alt="">
    </div>
    <div class="w-100 center mt-5">
      <h4>Best Bar Unit Tricks for Your Interior Design</h4>
      <hr />
      <h4><b>Royal Homes</b></h4>
    </div>
    <div class="row mt-3">
      <?php $i=1; foreach($all_blogs->result() as $blogs) { ?>
      <div class="col-md-4">
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
