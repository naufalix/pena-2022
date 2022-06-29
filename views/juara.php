<div style="height: 90px; background-color: #EFEFEF"></div>

    <!-- ======= Team Section ======= -->
    <section id="team1" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Juara Umum</h2>
        </div>

        <div class="row">

          <div class="col-md-6 d-flex mx-auto">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/juara/A.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>POLTEKKES KEMENKES JAKARTA 2</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team2" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>Kategori Biomedical Signal</h3>
        </div>

        <div class="row text-center">
          <?php
            $juara = [
              ["id"=>"B","nama"=>"TIM AGIL - POLTEKKES KEMENKES SURABAYA",  "juara"=>"JUARA 2"], 
              ["id"=>"C","nama"=>"TIM ALAN - UNIVERSITAS SURABAYA",         "juara"=>"JUARA 1"], 
              ["id"=>"D","nama"=>"TIM UNITA - ATEM SEMARANG",               "juara"=>"JUARA 3"], 
              ["id"=>"E","nama"=>"TIM ALAN - UNIVERSITAS SURABAYA",         "juara"=>"BEST DESIGN"],
              ["id"=>"F","nama"=>"TIM NABILA - POLTEKKES KEMENKES SURABAYA","juara"=>"BEST SYSTEM"]
            ];
            foreach($juara as $jp){            
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?php if($jp['id']=='E'){echo 'ms-auto';} if($jp['id']=='F'){echo 'me-auto';} ?>">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/juara/<?= $jp['id'] ?>.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?= $jp['juara'] ?></h4>
                <span><?= $jp['nama'] ?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team3" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>Kategori Life Support</h3>
        </div>

        <div class="row text-center">
          <?php
            $juara = [
              ["id"=>"G","nama"=>"TIM RESTUADJI - UNIVERSITAS WIDYA HUSADA SEMARANG",   "juara"=>"JUARA 2"], 
              ["id"=>"H","nama"=>"TIM ABDULLAH - POLITEKNIK NEGERI MADIUN",             "juara"=>"JUARA 1"], 
              ["id"=>"I","nama"=>"TIM IMMANUEL - ATEM SEMARANG",                        "juara"=>"JUARA 3"], 
              ["id"=>"J","nama"=>"TIM RIZKY - POLITEKNIK NEGERI MADIUN",                "juara"=>"BEST DESIGN"],
              ["id"=>"K","nama"=>"TIM HAFIZH - POLTEKKES KEMENKES SURABAYA",            "juara"=>"BEST SYSTEM"]
            ];
            foreach($juara as $jp){            
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?php if($jp['id']=='J'){echo 'ms-auto';} if($jp['id']=='K'){echo 'me-auto';} ?>">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/juara/<?= $jp['id'] ?>.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?= $jp['juara'] ?></h4>
                <span><?= $jp['nama'] ?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team4" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h3>Kategori IT Healtcare</h3>
        </div>

        <div class="row text-center">
          <?php
            $juara = [
              ["id"=>"L","nama"=>"TIM RINA - POLITEKNIK NEGERI BANDUNG",      "juara"=>"JUARA 2"], 
              ["id"=>"M","nama"=>"TIM SATRIA - POLTEKKES KEMENKES JAKARTA 2", "juara"=>"JUARA 1"], 
              ["id"=>"N","nama"=>"TIM NAFSI - POLTEKKES KEMENKES JAKARTA 2",  "juara"=>"JUARA 3"], 
              ["id"=>"O","nama"=>"TIM SATRIA - POLTEKKES KEMENKES JAKARTA 2", "juara"=>"BEST DESIGN"],
              ["id"=>"P","nama"=>"TIM RINA - POLITEKNIK NEGERI BANDUNG",      "juara"=>"BEST SYSTEM"]
            ];
            foreach($juara as $jp){            
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch <?php if($jp['id']=='O'){echo 'ms-auto';} if($jp['id']=='P'){echo 'me-auto';} ?>">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/juara/<?= $jp['id'] ?>.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?= $jp['juara'] ?></h4>
                <span><?= $jp['nama'] ?></span>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Team Section ======= -->
    <section id="team5" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Juara Favorit</h2>
        </div>

        <div class="row">

          <div class="col-md-5 d-flex mx-auto">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/juara/Q.JPG" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>TIM SATRIA - POLTEKKES KEMENKES JAKARTA 2</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <?php include("views/components/sponsor.php")?>
    