<?php $pageTitle = "About Us"; include "header.php"; ?>

  <main class="vs-main">

    <!-- Breadcrumb Start-->
    <div class="vs-breadcrumb overflow-hidden">
      <div class="vs-breadcrumb__bg">
        <img src="assets/img/bg/breadcrumb-bg.jpg" alt="breadcrumb image">
      </div>
      <div class="container">
        <div class="vs-breadcrumb__content wow animate__fadeInUp" data-wow-delay="0.45s">
          <h1>About Us</h1>
          <div class="vs-breadcrumb__menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>about us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Part Start-->
    <section class="vs-about space">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="vs-title animation-style2">
              <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt="Icon"> About Granite Peak Healthcare Solutions
              </p>
              <h2 class="vs-title__main title-anime">Our Commitment to Quality Care</h2>
            </div>
            <div class="vs-about__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
              <a class="vsBtn" href="contact.php">
                <span></span>
                Read More
              </a>
              <div class="ab-experience">
                <h2>25+</h2>
                <p>Years of Experience</p>
              </div>
              <div class="ab-img"><img src="assets/img/about/about-img1-h1.jpg" loading="lazy" alt="image"></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="abImg wow animate__fadeInUp" data-wow-delay="0.2s">
              <img src="assets/img/about/about-img2-h1.jpg" alt="image" loading="lazy">
              <p>Granite Peak Healthcare Solutions, LLC is a dedicated healthcare consulting business specializing in
                providing top-tier consulting services to nursing homes, assisted living facilities, and critical
                access hospitals. We also offer DON training, speaking engagements, plan of correction writing, and
                multi-state IDR writing.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Part End-->

    <!-- Service Part Start -->
    <section class="vs-service z-index-common space" data-bg-src="assets/img/service/ser-bg-h1.jpg">
      <div class="container">
        <div class="vs-title text-center animation-style2">
          <p class="vs-title__sub">
            <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> service <img
              src="assets/img/icons/title-icon.svg" alt="Icon" class="ps-1">
          </p>
          <h2 class="vs-title__main title-anime">Consulting Services Tailored to Your Facility</h2>
        </div>

        <div class="swiper" data-swiper data-xl="3" data-gap-xl="30" data-nav-next="#style1_next"
          data-nav-prev="#style1_prev">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="vs-service__icon">
                  <div class="ser_icon"><img src="assets/img/service/ser-h1-icon1.svg" alt="Icon"></div>
                  <span class="ser_number">01</span>
                </div>
                <div class="vs-service__txt">
                  <a href="services.php">
                    <h3>Clinical Consulting-Nursing, Infection Control, MDS, Laboratory</h3>
                  </a>
                  <p>Expert guidance on nursing practice, infection control, MDS accuracy, and laboratory operations to
                    strengthen clinical quality.</p>
                  <a href="mailto:kaile.hilliard@granitepeakhs.com?subject=Clinical%20Consulting%20Inquiry" class="ser_btn">read more</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.3s">
                <div class="vs-service__icon">
                  <div class="ser_icon"><img src="assets/img/service/ser-h1-icon2.svg" alt="Icon"></div>
                  <span class="ser_number">02</span>
                </div>
                <div class="vs-service__txt">
                  <a href="services.php">
                    <h3>Social Services Consulting-Training, System Establishment, Interim Social Services Support, Routine Consulting</h3>
                  </a>
                  <p>Training, system establishment, interim support, and routine consulting to strengthen your social
                    services program.</p>
                  <a href="mailto:kaile.hilliard@granitepeakhs.com?subject=Social%20Services%20Consulting%20Inquiry" class="ser_btn">read more</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.4s">
                <div class="vs-service__icon">
                  <div class="ser_icon"><img src="assets/img/service/ser-h1-icon3.svg" alt="Icon"></div>
                  <span class="ser_number">03</span>
                </div>
                <div class="vs-service__txt">
                  <a href="services.php">
                    <h3>Food & Nutrition Consulting-Training, System Establishment, Interim RD Support, Routine Consulting.</h3>
                  </a>
                  <p>Training, system establishment, interim RD support, and routine consulting for your dietary and
                    nutrition services.</p>
                  <a href="mailto:kaile.hilliard@granitepeakhs.com?subject=Food%20%26%20Nutrition%20Consulting%20Inquiry" class="ser_btn">read more</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-service__wrap wow animate__fadeInUp" data-wow-delay="0.5s">
                <div class="vs-service__icon">
                  <div class="ser_icon"><img src="assets/img/service/ser-h1-icon2.svg" alt="Icon"></div>
                  <span class="ser_number">04</span>
                </div>
                <div class="vs-service__txt">
                  <a href="services.php">
                    <h3>Fire & Life Safety Consulting</h3>
                  </a>
                  <p>On-site and remote reviews to help your facility meet fire and life safety code requirements.</p>
                  <a href="mailto:kaile.hilliard@granitepeakhs.com?subject=Fire%20%26%20Life%20Safety%20Consulting%20Inquiry" class="ser_btn">read more</a>
                </div>
              </div>
            </div>
          </div>

          <div class="vs-navigation">
            <div id="style1_prev" class="swiper-prevBtn">
              <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div id="style1_next" class="swiper-nextBtn">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Part End -->

    <!-- VideoCount Part Start -->
    <section class="vs-videoCount z-index-common space-top space-extra-bottom bg-title bg-fixed"
      data-bg-src="assets/img/bg/countVideo-h2-bg.png">
      <div class="container">

        <div class="vs-counter" data-bg-src="assets/img/bg/count-h2-bg.jpg">
          <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="counter-txt">
              <h2><span class="counter-number" data-counter="10">10</span>+</h2>
              <h3>Consulting Services</h3>
            </div>
          </div>
          <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.3s">
            <div class="counter-txt">
              <h2><span class="counter-number" data-counter="100">100</span>%</h2>
              <h3>Tailored to Each Client</h3>
            </div>
          </div>
          <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.4s">
            <div class="counter-txt">
              <h2><span class="counter-number" data-counter="3">3</span></h2>
              <h3>Care Settings Served</h3>
            </div>
          </div>
          <div class="counter-body wow animate__fadeInUp" data-wow-delay="0.5s">
            <div class="counter-txt">
              <h2><span class="counter-number" data-counter="25">25</span>+</h2>
              <h3>Years of Experience</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- VideoCount Part End -->

    <!-- Choose Part Start-->
    <section class="vs-choose style2 space parallax-sec">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="chooseImg paralax">
              <img src="assets/img/bg/choose-img-h2.jpg" alt="image" loading="lazy">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="vs-title animation-style2">
              <p class="vs-title__sub">
                <img src="assets/img/icons/title-icon.svg" alt="Icon"> Why Choose Us
              </p>
              <h2 class="vs-title__main title-anime">Trusted Consulting Backed by Knowledge, Integrity, and Accountability</h2>
            </div>
            <div class="vs-choose__wrap">
              <p class="mb-30">At Granite Peak Healthcare Solutions, we combine deep regulatory knowledge with
                hands-on, client-focused support to help every facility we work with meet the highest standards of
                care.</p>

              <div class="patient">
                <a class="vsBtn" href="services.php">read more
                  <span></span>
                </a>
                <div class="patient-box">
                  <img src="assets/img/service/patient-img-h2.png" alt="image">
                  <div class="patient-txt">
                    <h3>100%</h3>
                    <p>Client-Tailored Consulting</p>
                  </div>
                </div>
              </div>

              <div class="chose-bottom">
                <div class="choose-box">
                  <div class="choose-icon">
                    <span>01</span>
                  </div>
                  <div class="choose-txt">
                    <a href="services.php">
                      <h3>Experienced Consulting Team</h3>
                    </a>
                    <p>Our consultants bring years of clinical, regulatory, and operational experience across long
                      term care, assisted living, and critical access hospital settings.</p>
                  </div>
                </div>
                <div class="choose-box">
                  <div class="choose-icon">
                    <span>02</span>
                  </div>
                  <div class="choose-txt">
                    <a href="services.php">
                      <h3>Remote & On-Site Flexibility</h3>
                    </a>
                    <p>Many of our services can be delivered remotely, giving your facility flexible access to expert
                      guidance whenever you need it.</p>
                  </div>
                </div>
                <div class="choose-box">
                  <div class="choose-icon">
                    <span>03</span>
                  </div>
                  <div class="choose-txt">
                    <a href="services.php">
                      <h3>Client-Focused Support</h3>
                    </a>
                    <p>Services are tailored to each client's needs and preferences, with clear guidance and
                      dedicated follow-up from start to finish.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Choose Part End-->

    <!-- Testimoni Part Start -->
    <section class="vs-testimoni z-index-common space bg-img-color">
      <div class="container">
        <div class="d-flex align-items-center justify-content-lg-between">
          <div class="vs-title animation-style2">
            <p class="vs-title__sub">
              <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> Testimonials
            </p>
            <h2 class="vs-title__main title-anime">What Our Clients Say</h2>
          </div>

          <div id="style3_prev" class="vs-navigation style2">
            <div class="swiper-prevBtn">
              <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div id="style3_next" class="swiper-nextBtn">
              <i class="fa-solid fa-arrow-right"></i>
            </div>
          </div>
        </div>

        <div class="swiper" data-swiper data-xl="3" data-gap-xl="30" data-nav-next="#style3_next"
          data-nav-prev="#style3_prev">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="vs-testimoni__img">
                  <div class="test_img">
                    <img src="assets/img/testimoni/testi-h1-img1.png" alt="Image">
                  </div>
                  <div class="test-icon">
                    <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                    <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                  </div>
                </div>
                <div class="test_txt">
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </span>
                  <p>"I have known Kaile for over 20 years, personally and professionally. She always treats people with respect and kindness. I've gone to her with many questions regarding regulations over the years, and on the rare occasion she didn't know the answer, she was able to quickly find it. Highly recommended."</p>
                  <div class="test-admin">
                    <h3>Valerie B.</h3>
                    <p>MSW</p>
                  </div>
                </div>
                <div class="gradient-border-corner"></div>
                <div class="gradient-border-corner style2"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.3s">
                <div class="vs-testimoni__img">
                  <div class="test_img">
                    <img src="assets/img/testimoni/testi-h1-img2.png" alt="Image">
                  </div>
                  <div class="test-icon">
                    <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                    <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                  </div>
                </div>
                <div class="test_txt">
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </span>
                  <p>"I have worked with the staff at Granite Peak HS for over 3 years and they are extremely knowledgeable and professional. Their expertise in all aspects of healthcare is unmatched. Kaile is the ultimate team player and I would recommend Granite Peak Health Solutions to anybody based on work ethic and expertise."</p>
                  <div class="test-admin">
                    <h3>Michael R.</h3>
                    <p>NHA, District Director of Operations</p>
                  </div>
                </div>
                <div class="gradient-border-corner"></div>
                <div class="gradient-border-corner style2"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.4s">
                <div class="vs-testimoni__img">
                  <div class="test_img">
                    <img src="assets/img/testimoni/testi-h1-img3.png" alt="Image">
                  </div>
                  <div class="test-icon">
                    <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                    <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                  </div>
                </div>
                <div class="test_txt">
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </span>
                  <p>"Granite Peak HS repeatedly provides well-rounded knowledge and comfort in the regulatory environment. They never cease to amaze me with their understanding of this often &quot;foreign language.&quot; They have an uncanny ability to manage complex processes and to provide training with simple ease. Often under pressure, they will deliver a product that is polished and always to the client's satisfaction."</p>
                  <div class="test-admin">
                    <h3>Lori C.</h3>
                    <p>NHA</p>
                  </div>
                </div>
                <div class="gradient-border-corner"></div>
                <div class="gradient-border-corner style2"></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="vs-testimoni__wrap wow animate__fadeInUp" data-wow-delay="0.2s">
                <div class="vs-testimoni__img">
                  <div class="test_img">
                    <img src="assets/img/testimoni/testi-h1-img3.png" alt="Image">
                  </div>
                  <div class="test-icon">
                    <img src="assets/img/icons/comma.svg" alt="Image" class="comma1">
                    <img src="assets/img/icons/comma2.svg" alt="Image" class="comma2">
                  </div>
                </div>
                <div class="test_txt">
                  <span class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </span>
                  <p>"I have been in the LTC industry for a long time and I have never worked with such a knowledgeable, professional, customer-driven consultant with a focus on quality. I highly recommend Kaile's services to those looking to improve quality of care and outcomes."</p>
                  <div class="test-admin">
                    <h3>Betty B.</h3>
                    <p>LD, RDN, Senior Dietician</p>
                  </div>
                </div>
                <div class="gradient-border-corner"></div>
                <div class="gradient-border-corner style2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni Part End -->

  </main>

<?php include "footer.php"; ?>