  <style>
    .position-relative {
      position: relative !important;
    }

    .designbyheart {
      padding: 50px 50px;
    }

    .position-relative img {
      width: 100%;
    }

    .philosophy .content {
      position: absolute !important;
      top: 0;
      width: 29.427vw;
      left: 50%;
      transform: translateX(-50%);
      background: #8a949f;
      padding: 50px;
      height: 100%;
      color: #fff;
    }

    .Orange-Tree-Born {
      padding: 60px 0px 50px;
      background: #131313;
      color: #fff;
      margin-top: 50px;
    }
  </style>

  <section>
    <div class="ggty"> </div>
    <div class="col-md-12">
      <img class="img-fluid" src="https://www.orangetree.in/pub/media/wysiwyg/aboutbanner.jpg" alt="">
    </div>
    <div class="col-md-12 designbyheart">

      <div class="container">
        <h2 class="head italic text-center">Design By Heart</h2>
        <p class=" text-center">Design is sensitivity!! It's being sensitive to form, to function, to materials, to techniques, to nature, to craft. Absorb and let your soul express itself , in a different context each time. We culminate various
          materials, textures, techniques under one central theme and innovate keeping the style minimalistic and contemporary.</p>
      </div>
    </div>

    <div class="col-md-12">
      <div class="position-relative "><img class="img-fluid" src="https://www.orangetree.in/pub/media/wysiwyg/pholisophy.jpg" alt="">
        <div class="content position designbyheart">
          <h2 class=" italic text-center">Our Philosophy</h2>
          <p class=" text-center">
            We believe in cultivating relationships between culture, craftsmanship and industry, reconcile memory and research, rigour and emotion, uniqueness and experimentation, and interpret global trends with constant effort dedicated to
            aesthetics- contemporary in form but handcrafted in spirit
          </p>
          <p class=" text-center">We also believe in sustainable design meaning creating products from responsible sustainable materials that can last a lifetime. Our products are generally made of wood(sourced from responsibly managed forests) ,
            metal, stone, natural fibers which highlight physical and aesthetic durability.</p>
        </div>
      </div>
    </div>

    <div class="movingahead">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2>1998</h2>
            <p>Vinay Kumar laid the foundation of Basant in Jodhpur.- with a vision to build an eco system that was infused with his family values of hardwork, responsibility and loyalty.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2>Moving Ahead</h2>
            <p>With a keen interest in sustainability, technological innovation and design Gaurav took the reins of Basant in 2002. Today we are exporting to 17+ countries worldwide.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2>Environmental Responsibility</h2>
            <p>We works towards maintaining balance between ecosystem and economy. 50% of total power consumption is Solar based and water harvesting is encouraged. We maintain highest standards in quality and have SA certification, FSC, UL, CE and
              'Vriksh'.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2>Materials</h2>
            <p>We use various materials like wood, metal, stone, natural fibers, concrete in combination with latest technology and techniques.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2 class="questa-R-head">Factory</h2>
            <p>We have come a long way from a handful of employees, single factory in Jodhpur to 9,35,000 sqft built up area that houses wood workshops, dedicated testing labs, powder coating area, metal workshops and an expanded upholstery unit all
              under one roof. We work with 600+ expert draughtsmen, designers, artisans and specialised workers whose talent and skills we rely on.</p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-2 col-sm-4 text-center">
            <h2>Design Awards</h2>
            <p>A regular at IHGF Delhi fair Best Design Award for Furniture and Lighting since 2015. Gold Grand Stand award at Acetech fair 2019. Best Booth Design award at IHE Delhi fair 2019. Best virtual booth award 2020 IHGF Delhi Fair.</p>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- start Testimonials -->

  <section class="bg-white" style="margin-top:-50px!important; position:relative; margin-bottom:-48px">
    <div class="container bg-white">
      <div class="w100 bg-white" style="text-align: center; ">
        <h2>What Our Customers Have to Say</h2>
      </div>
    </div>
    <div class="items bg-white" style="
                                             margin: 0px; margin-left: 0!important; width:100%;">
      <?php foreach ($data_testimonal->result() as $testimonals) {
                             $break_string=chunk_split($testimonals->message, 39, "<br>"); ?>
      <div class="col-md-12 bg-white">
        <img src="<?=base_url().$testimonals->image; ?>" class="img-fluid center" style="width:50%; display:block;margin-left:auto;margin-right: auto" />
        <div class="dfg col-md-2"><i class="fa fa-quote-left" style="font-size:25px;"></i></div>
        <div class="dfg" style="width: auto;">
          <p style="text-align: center; font-size:14px;"><?=$break_string; ?></p>
        </div>
        <div class="col-md-10 bg-white">
          <p style="text-align: right; font-size:14px;"><b><?=$testimonals->name?></b></p>
          <div class="col-md-2 ii bg-white" style="margin-left: 273px;"><i class="fa fa-quote-right" style="font-size:25px;"></i></div>
        </div>
      </div>
      <?php
                         } ?>
    </div>
  </section>

  <!-- End testimonals  -->
