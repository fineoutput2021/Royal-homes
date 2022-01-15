<style>
  @media (max-width:1280px) {
    .pres {
      font-size: 15px;
    }
  }

  .bot_line {
    border-bottom: solid 2px #e66c47;
  }

.new{
  padding: 2px;
  color:black;
  font-weight:400px!important;
}
.new:hover{
  color:black;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--Start Slider-->

<section class="overflow-hidden t_slider">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12" style="padding-left:0;padding-right:0">
        <div class="swiper-wrapper fist_slider ">
          <?php $i=1; foreach($slider_data->result() as $slider) { ?>
          <div class="swiper-slide"><a href="<?=$slider->link?>" target="_blank">
              <img src="<?=base_url().$slider->image?>" alt="">
            </a></div>
          <?php $i++; } ?>
        </div>
        <!-- <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> -->
        <!-- <div class="swiper-pagination"></div> -->

      </div>
    </div>
  </div>
</section>

<!-- End Slider-->

<!-- Start Banner Six-->

<section>
  <div class="container gallarySection mw-100 ">
    <div class="row mt-4 cat_gory">
      <?php $i=1; foreach($banner_Data->result() as $banner) { ?>
      <div class="col-md-4 col-sm-6 col-6 mb-5 text-center">
        <div><a href="<?=$banner->link?>">
            <img src="<?=base_url().$banner->image?>" alt="Sofas" class="img-fluid"></a>
        </div>
        <h2 class="text-center p-0 gallarytext" style="font-size: 1.2rem; text-transform: capitalize; margin-top: -2.5rem; z-index: 50; color: black;"><?=$banner->name?></h2>
      </div>
      <?php $i++; } ?>
    </div>
  </div>
</section>

<!--End Banner Six-->

<!-- Start subcategory Products -->

<section class="new_lunc overflow-hidden">
  <div class="container-fluid">
    <br>
    <h2 class="text-center py-5" style="margin-bottom: -32px;">New Launches
    </h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php $i=0; foreach($launch_sub_data->result() as $sub) { ?>
      <li class="nav-item fdff">
        <a class=" <?if($i==0){echo'active';}?> new" id="home_tab_<?=$sub->id?>" data-toggle="tab" href="#home_<?=$sub->id?>" role="tab" aria-controls="home_<?=$sub->id?>" aria-selected="<?if($i==0){echo 'true';}else{echo 'false';}?>"><?=$sub->subcategory?></a>
      </li>
      <?$i++;}?>
    </ul>
    <div class="tab-content" id="myTabContent">
      <?php $i=0; foreach($launch_sub_data->result() as $sub2) {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->like('subcategory', $sub2->id);
        $this->db->where('is_active', 1);
        $this->db->order_by('rand()');
        $this->db->limit(10);
        $new_launch_data= $this->db->get();

         ?>
      <div class="tab-pane fade <?if($i==0){echo "show active";}?>" id="home_<?=$sub2->id?>" role="tabpanel" aria-labelledby="home_tab_<?=$sub2->id?>">
      <div class="your-class">
          <?php  foreach($new_launch_data->result() as $n_launch) { ?>
          <a href="<?=base_url()?>Home/product_details/<?=base64_encode($n_launch->id)?>" style="color:unset">
          <div style="padding:15px">
            <img src="<?=base_url().$n_launch->image?>" alt="">
              <h5><?=$n_launch->productname?></h5><s style="font-size: 12px;text-decoration: line-through;color:red">(Rs.<?=$n_launch->mrp?>)</s> <span style="font-weight: bold; font-size: 12px;"> Rs.<?=$n_launch->selling_price?></span>
          </div>
        </a>
          <?}?>
        </div>
      </div>
      <?php $i++; } ?>
    </div>
</section>

<!--End subcategory Products -->




<!--Start Get the look-->

<section class="get_look overflow-hidden">
  <div class="container-fluid">
    <h2 class="text-center py-5"><?=$banner_images->imagename?></h2>
    <div class="row">
      <div class="col-md-12">
        <div class="lala">
          <a href="<?=$banner_images->link?>" >
            <img style="width: 1483px;" src="<?=base_url().$banner_images->image1?>" alt="">
          </a>
        </div>
        <div class="lalu" style="display:none;">
          <a href="#" >
            <img style="width: 1483px;" src="<?=base_url().$banner_images->image2?>" alt="new.img">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--End Get the look-->

<!-- Start Best Seller-->

<section class="new_lunc overflow-hidden">
  <div class="container-fluid">
    <h2 class="text-center py-5" style="margin-bottom: -40px;">Best Sellers</h2>
    <div class="row">
      <div class="col-md-12">
        <!-- Swiper -->

        <div class="swiper-wrapper autoplay">
          <? foreach($Best_seller->result() as $seller){  ?>

          <div class="swiper-slide" style="padding: 15px;">
            <a href="<?=base_url()?>Home/product_details/<?=base64_encode($seller->id)?>">
              <img src="<?=base_url().$seller->image;?>" alt="">
            </a>
            <div class="my-3">
              <h5><?=$seller->productname;?></h5><s style="font-size: 12px;text-decoration: line-through;color:red">(Rs.<?=$seller->mrp?>)</s>  <span style="font-weight: bold; font-size: 12px;">₹<?=$seller->selling_price;?></span>
            </div>
          </div>

          <? } ?>
        </div>
      </div>
      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div> -->
    </div>
  </div>
  </div>
  </div>
</section>

<!--ENd Best Seller-->



<!---Start Latest--->

<section class="new_lunc overflow-hidden t_slider">
  <div class="container-fluid">
    <h2 class="text-center py-5"><?=$image_two->heading_first;?></h2>
    <div class="row">
      <div class="col-md-12">
        <!-- Swiper -->

        <div class="swiper-wrapper decor" style="padding-left:0px">
          <div class="swiper-slide sssd" >
            <a href="<?=$image_two->link_first;?>">
              <img src="<?=base_url().$image_two->image_first?>" alt="">
            </a>
            <!-- <div class="my-3">
              <h6>Emperor Sofa Collection</h6> <span style="font-weight: bold; font-size: 12px;"> ₹38,400</span>
            </div> -->
          </div>
          <div class="swiper-slide sssd">
            <a href="<?=$image_two->link_second;?>">
              <img src="<?=base_url().$image_two->image_two?>" alt="">
            </a>
            <!-- <div class="my-3">
              <h6>Emperor Sofa Collection</h6> <span style="font-weight: bold; font-size: 12px;"> ₹38,400</span>
            </div> -->
          </div>
        </div>

      </div>

      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div> -->
    </div>
  </div>
  </div>
</section>

<!--End Latest-->

<!--Start Promise-->

<section class="promis overflow-hidden">
  <h2 class="text-center wwwq" style="color: gray;font-weight: bolder;">The Orange Tree
    Promise</h2>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-12">
        <ul>
          <li>
            <div class="img_1"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/furniture/icn01.jpg" alt="" style="width: 80%;"></div>
            <h2 style="text-align: center;letter-spacing: 2px; font-size: 22px; font-style: italic;">
              Crafted in <br>India</h2>
            <br>
            <p style="text-align:center; color: #3e3938; line-height: 31px;;">
              Handmade in India for global market, patronising craft, providing livelihood with focus on
              sustainability and environment.</p>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-12">
        <ul>
          <li>
            <div class="img_1"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/furniture/icn02.jpg" alt="" style="width: 80%;"></div>
            <h2 style="text-align: center;letter-spacing: 2px; font-size: 22px; font-style: italic;">
              Sustainable<br>Materials</h2>
            <br>
            <p style="text-align:center; color: #3e3938; line-height: 31px;;">
              Handmade in India for global market, patronising craft, providing livelihood with focus on
              sustainability and environment.</p>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-12">
        <ul>

          <li>
            <div class="img_1"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/furniture/icn03.jpg" alt="" style="width: 80%;"></div>
            <h2 style="text-align: center;letter-spacing: 2px; font-size: 22px; font-style: italic;">
              Contemporary <br>Urbanised Design</h2>
            <br>
            <p style="text-align:center; color: #3e3938; line-height: 31px;;">
              Handmade in India for global market, patronising craft, providing livelihood with focus on
              sustainability and environment.</p>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-12">
        <ul>

          <li>
            <div class="img_1"><img src="https://www.orangetree.in/pub/static/version1632556275/frontend/Digital/desktop/en_US/images/furniture/icn04.jpg" alt="" style="width: 80%;"></div>
            <h2 style="text-align: center;letter-spacing: 2px; font-size: 22px; font-style: italic;">
              Legacy of <br>22 Years</h2>
            <br>
            <p style="text-align:center; color: #3e3938; line-height: 31px;;">
              Handmade in India for global market, patronising craft, providing livelihood with focus on
              sustainability and environment.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

<!--End Promise-->


  <!--- Start video --->
  <section style="padding: 4vw;">
    <br>
    <br>
    <div align="center" class="embed-responsive embed-responsive-16by9" >
      <iframe src="http://www.youtube.com/embed/u5RvDg8uFv0?autoplay=1" width="960" height="447" frameborder="0" allowfullscreen></iframe>
        <!-- <video autoplay loop class="embed-responsive-item">
            <source src="http://techslides.com/demos/sample-videos/small.mp4" controls type="video/mp4">
        </video> -->
    </div>
    <br>
  </section>
</section>

<!-- end video   -->


<!-- start Testimonials -->

<section>
  <div class="container">
    <div class="w100" style="text-align: center; margin-bottom: -80px;">
      <h2>What Our Customers Have to Say</h2>
    </div>
  </div>
  <div class="items">
    <? foreach($data_testimonal->result() as $testimonals){
  $break_string=chunk_split($testimonals->message,39,"<br>");
      ?>
    <div class="col-md-12">
      <img src="<?=base_url().$testimonals->image;?>" class="img-fluid center" style="width:50%; display:block;margin-left:auto;margin-right: auto"/>
      <div class="dfg col-md-2"><i class="fa fa-quote-left" style="font-size:25px;"></i></div>
      <div class="dfg" style="width: auto;">
        <p style="text-align: center; font-size:14px;"><?=$break_string; ?></p>
      </div>
      <div class="col-md-10">
        <p style="text-align: right; font-size:14px;"><b><?=$testimonals->name?></b></p>
        <div class="col-md-2 ii" style="margin-left: 273px;"><i class="fa fa-quote-right" style="font-size:25px;"></i></div>
      </div>
    </div>
    <? } ?>
  </div>
</section>



<!-- End testimonals  -->


<!-- <section>
  <p style="font-size:27px; font-weight: bold; margin-left: 30px; margin-right: 30px;">Online Shopping for Wooden
    Furniture and Home Decoration & Designer Lights Made Easy at Orange Tree</p>
  <br>
  <p style="font-size: 17px; margin-left: 30px; margin-right: 30px; font-family: 'Nunito', sans-serif;">Orange Tree
    believes in bringing beauty to your
    rooms. So, we strive to create an extensive range of wooden furniture online, which facilitates a very stunning
    presence, accentuating the charm of your home decor satisfactorily.</p>
  <br>
  <div style="font-size: 17px; margin-left: 30px; margin-right: 30px; font-family: 'Nunito', sans-serif;">
    <p><span id="dots">
      </span>
    <div id="more">
      <p>Being one of the leading online furniture stores in India, we bring a myriad of soulfully crafted pieces of
        furniture that boast the ecstasy of appearance and adds up to the brilliance of your aesthetics.</p>
      <br>
      <p>However, our service is not only limited to the manufacturing of classy wooden furniture online but we also
        host a plethora of home decoration lights that can lead to the upheaval of your room's gorgeousness in just no
        time.</p>
      <br>
      <p>Every piece of our furniture is designed with the utmost care and represents various fascinating trends that
        rightly complement your home decor along with the trendiest and exclusive designs of our home decoration
        lights. Our user-friendly website will let you tour along the site to select the best suit for your rooms.</p>
      <br>
      <p>We even facilitate multiple payment options for your convenience. It's simple and safe for making online
        transactions with us. We promise you fast and tamper-free delivery and also offer a reliable return and
        exchange policy when you buy furniture online and designer lights from Orange Tree.</p>
      <br>
      <h2 style="font-size: 26px; font-weight: 500;">One of the Top-Notch Online Furniture Stores India</h2>
      <br>
      <p>Enriching your home decoration with Orange Tree’s ostentatious furniture pieces renders an exquisite outlook
        to your home, beautifying the overall ambiance. As an excellent online furniture shopping destination, Orange
        Tree brings you a multitude of trendy designs of wooden furniture online to complement each corner of your
        home. Our range of mesmerizing products gives your home decoration an instant makeover, which rightly knows
        how to make your guests envy your choice.</p>
      <br>
      <p>Orange Tree boasts exemplary designs, which are inspired by great and legendary works all over the world, and
        it rightly adds flamboyance to your place, accentuating each of your corners. Browse through one of India’s
        premier online furniture stores and buy furniture online to bring the best beauty to your home with our
        exclusive range of furniture designs.</p>
      <br>
      <h2 style="font-size: 26px; font-weight: 500;">Best Home Decoration and Designer Lighting Online Store</h2>
      <br>
      <p>Just when you switch on the lights, your place should look like a serene land of beauty; and that's exactly
        what Orange Tree, the online lighting store, will do for you. We bring you a myriad of elite products that
        will turn you ecstatic with its glow and exquisiteness.</p>
      <br>
      <p>Orange Tree products are inspired by contemporary architectures around the world and make patterns to present
        you with the best light and shadow games. Come, let's woo your guests with some exclusive range of room decors
        from Orange Tree.</p>
      <br>
      <h2 style="font-size: 26px; font-weight: 500;">Delve into the Ecstasy of Our Wide Array of Wooden Furniture
        Online</h2>
      <br>
      <p>Orange Tree aims to bring creativity to your home moulded in the shape of furniture. Hence, our extensive
        range of exotic wooden furniture online is the best suit for each corner of your home, which rightly maximizes
        the captivating approach of your home decor. Here is the variety of home decor furniture that Orange Tree
        brings to you.</p>
      <br>
      <ul>
        <li>Bed: As one of the leading online furniture stores India, Orange Tree boasts a classy range of wooden beds
          for your home, which looks gorgeous and captivating with its beauty and charm. For those who love to add
          more creativity to their rooms, our intensely crafted wooden beds are ideal furniture to complement their
          room decoration gorgeously.</li>
        <li>Bed Side Table: The bedside table is a must need to make your life easy. Hence, we come to you with our
          vast range of products that promote beauty paired with necessity. Buy furniture online to bring in diversely
          shaped and patterned bedside tables that make your room the place of your dream.</li>
        <li>Chest of Drawers: Orange Tree boasts a plethora of furniture that is simply brilliant. To give your room a
          very organized and neat look, Orange Tree, the best online furniture shopping site, specifically crafts
          chest of drawers, which not only enhances the classy approach of your room but also uplifts the overall
          beauty of your home decor.</li>
        <li>Dressers: Dressers are the secret to your best style. Therefore, it needs some more charm. And being an
          online furniture shopping website, we create exclusive and exotic designs, which are rightly jaw-dropping
          and can make your guests drool for every bit of gorgeousness it adds to your room.</li>
        <li>Dining Table: A classy dining table has the power to make each of your dinners more palatable and worth
          enjoying. Thus, being one the reckoned online furniture stores India, we come to you with our extensive
          range of dining tables, which upholds the charm of your dining area and makes your guests come over and over
          whenever you arrange for a dining occasion.</li>
        <li>Dining Chairs: Not only does the dining table hold an exquisite charm of your room, but also dining chairs
          add elegance to your dining area. Thus, surf through the online furniture shopping site of Orange Tree and
          buy your favorite one from an extensive range of dining chairs to rightly complement the classy choice of
          your table and decorate your home in a beauteous grace.</li>
        <li>Dining Sideboards: What makes your dining room a compact décor? Well, sidebars are right here to answer
          you. One of the top online furniture stores India, Orange Tree, comes to you with many sidebar options that
          you can install to rightly give life to your classy dining room setting.</li>
        <li>Bar Units: Flatter your guests with a very classy bar unit that serves to be an excellent choice for your
          home décor. Orange Tree offers you a plethora of bar units, which are crafted to meet the trendy style and
          design. Our online furniture stores have all suitable bar unit options for your flamboyant décor.</li>
        <li>Living Room Sofas: Living rooms are the center of attraction for your home. It is the place where we pay
          our guests a warm homage. So, if you want to enrich your courtesy to guests via your living room, buy
          furniture online India to add an elegant touch of art and creativity at your place with a very aesthetic
          comfy sofa set.</li>
        <li>Living Room Coffee Tables: No matter how many pieces of furniture you add to your living room, it is not
          at all complete unless you set up a coffee table. To enhance the attractive appeal of your living room,
          bring in a creative range of coffee tables from one of the best online furniture stores and make your home
          look like a place of serenity and beauty.</li>
        <li>Living Room Side Tables: Are you thinking of where to place your gorgeous Orange Tree table lamp in your
          living room? Well, not to worry anymore! Browse through our myriad of living room side table options and buy
          furniture online from Orange Tree to accentuate your fashionable décor.</li>
        <li>TV Unit: Your spacious living room demands much more than just a sofa or a table. While our lighting
          fixtures bring in gracious beauty at your place, our alluring range of living room essentials will compel
          you to buy furniture online, including TV units to make your living room look more stunning and
          well-organized, paired with wooden artistry and a classy approach.</li>
        <li>Lounger Chairs: Make your living room more of a place for relaxing. Thus, the living room essentials from
          Orange Tree include a brilliant set of lounger chairs, which are comfy and stunning. Buy furniture online
          India to delve into an extravagant experience of accentuating your home’s appearance.</li>
        <li>Book Shelves: Let your books become the evidence of your fervour for knowledge and the best accessories
          for your room. Bring in an artistic bookshelf from Orange Tree by opting for online furniture shopping and
          store all your books in it while organizing your living room décor idea in a more splendiferous way.</li>
        <li>Study Tables: Your study room needs a touch of aesthetic charm to make your studying more lovable. And
          thus, we do it for you! We come up with a large range of wooden furniture online, including study tables,
          which are brilliantly crafted with unique design ideas to complement your décor and boast an ostentatious
          appeal.</li>
      </ul>
      <h2>The Palette of Lightings and Home Décor Products on Orange Tree</h2>

      <p>From bedrooms to dining halls, Orange Tree has ideas for every scenario. We know how to light up a gloomy
        room with chic designer lights. Here's a list of products that Orange Tree hosts for you.</p>
      <br>
      <h2>Lightings to Uplift Your Mood</h2>
      <ul>
        <li>Floor Lamps Online: At Orange Tree, you can come across a vast multitude of floor lamps solely designed to
          confer warm light for the readers. Sit on your sofa, grab a book, and enjoy the tranquility presented by our
          home décor lamps. Sturdy yet light-to-carry, the floor lamps won't let you complain when you shift it to the
          diverse corners of your room. Let the light fall on you while you relish the moments of doing what you love.
        </li>
        <li>Hanging Lamps Online: With inimitable craft ideas, Orange Tree designs elegant hanging lamps that can act
          as showpieces as well. With contemporary being the trend now, Orange Tree brings to life the art inspired by
          various artists and photographers. Every time you light up our hanging lamps, you are bringing art to life.
        </li>
        <li>Table Lamps Online: Innovation is the reason why Orange Tree has a plethora of designs and textures to
          offer in the form of table lamps. Now, when you sit by your table, you have a designer light that not only
          lets you perceive the world but also makes you feel surrounded by technological splendor.</li>
        <li>Study Table Lamps Online: Just because you need to do focused tasks on a study table, online lighting
          stores like Orange Tree delicately design each study table lamp to confer proper light and present a
          stunning aura at your desk. Every time you'll look up from your toil, you will get a piece of art to admire.
        </li>
        <li>Wall Lamps Online: Orange Tree ensures that if you forget to decorate your walls with paintings, our
          artistic wall lamps will do that job for you. Our proficient craftsmen spend hours fashioning lamps that
          will augment the magnificence of your walls. Elect the perfect one and buy lights online as per your wall
          color from our assorted range of designer wall lamps.</li>
      </ul>
      <h2>Home Décors to Impress</h2>
      <ul>
        <li>Wall Décor Online: Framed paintings are amazingly pretty, but too mainstream nowadays. For people looking
          forward to adding uniqueness to their walls, Orange Tree brings you a gigantic palette of wall decors. There
          are too many to choose from based on the taste of every individual. Let your guests come in and drool over
          your wall décors.</li>
        <li>Wall Mirror Online: "Mirror, mirror, on the wall. Why are you so admired by all?" Orange Tree hosts a
          plethora of mirrors that can notch up the classic essence in any room. Our mirrors are diversely shaped &
          sized and crafted to look chic on any background. Pair them with our hanging home decoration lights and some
          bonsai to accentuate the elegance.</li>
      </ul>
      <h2>The Palette of Lightings and Home Décor Products on Orange Tree</h2>
      <p>Each time you buy furniture online from Orange Tree, you are contributing to Nature. We believe in loyalty to
        both our customers as well the mother Earth. Orange Tree has taken the oath to balance ecosystem & economy,
        and thus every piece of our furniture is made of eco-friendly and organic materials, along with the most
        creative inspirations.</p>
      <br>
      <p>Orange Tree works with expert artisans and carpenters who are highly efficient in carving out the most
        intricate and detailed designs to produce the best quality wooden furniture online. Our team takes care of the
        minutest details for each piece of furniture, which portrays our craftsmen's dedication to incorporate
        innovative and immensely splendiferous creativity.</p>
      <br>
      <p>Nevertheless, we are not only limited to our service of providing wooden furniture online. We extend our
        support to decorate your home in a much nicer approach with our plethora of designer lights and other home
        décor products that you can add to your place to embellish your home's overall charm.</p>
      <br>
      <p>Our home decoration lights are made of biodegradable, organic materials like wood, metal, stone, and natural
        fibers, each infused with the optimized artistry of our craftsmen. We coalesce hard work, responsibility, and
        top-notch standards to produce each of our dazzling lights. Our home décor lamps are inspired by legends, and
        our skillful artists have taken us through a path of several awards.</p>
      <br>
      <p>Thus, with a vision of a sustainable world full of beauty and glow, Orange Tree strides along the path of
        goodwill & ecological harmony and promises to bring you more exquisite and inimitable products that will make
        your home feel like a wonderland.</p>
      <br>
      <p>So, take an online furniture shopping ride on Orange Tree while browsing through our exclusive designer
        products for your home. Let Orange Tree embellish your home with all the decorating essentials to usher a
        glamorous beauty to your home in no time!</p>
      <br>
    </div>
    </p>
    <br>
    <div style="text-align: center; font-size: 20px;"><button onclick="myFunction()" id="myBtn" style="    width: 7rem;
    height: 2.3rem;">
        <p class="pres" style=" color: #de542d !important;font-size: 15px;">Read More</p>
      </button></div>
    <br>
  </div>
</section> -->



<script>
$(document).ready(function(){
$('.your-class').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3,
  responsive: [
{
  breakpoint: 768,
  settings: {
  slidesToShow: 1,
  centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
  slidesToScroll: 1
  }
}
]
});
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
$('.your-class').slick('setPosition');
})

</script>
