<?php $pageTitle = "Contact Us"; include "header.php"; ?>

  <main class="vs-main">

    <!-- Breadcrumb Start-->
    <div class="vs-breadcrumb overflow-hidden">
      <div class="vs-breadcrumb__bg wow animate__fadeInUp" data-wow-delay="0.15s">
        <img src="assets/img/bg/breadcrumb-bg.jpg" alt="breadcrumb image">
      </div>
      <div class="container">
        <div class="vs-breadcrumb__content wow animate__fadeInUp" data-wow-delay="0.45s">
          <h1>Contact Us</h1>
          <div class="vs-breadcrumb__menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li>Contact us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Start-->
    <section class="space vs-contact space-extra-bottom overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 contactP">
            <div class="contact-info mb-20 wow animate__fadeInUp" data-wow-delay="0.45s">
              <div class="d-flex align-items-center justify-content-between">
                <h2>Our Service Area</h2>
                <div class="con-icon">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_28268_927)">
                      <path
                        d="M10.0287 21.2161H8.23486C7.76428 21.2161 7.33948 21.4963 7.15332 21.9278L2.1875 33.4906L13.9807 27.4673C12.569 25.5139 11.1722 23.3594 10.0287 21.2161Z" />
                      <path
                        d="M32.8439 21.9278C32.6581 21.4963 32.233 21.2161 31.7627 21.2161H29.9689C27.8095 25.2628 24.6634 29.4446 22.6621 31.7453C21.2546 33.3597 18.7405 33.3579 17.3352 31.7453C17.1915 31.5802 16.441 30.7114 15.4074 29.3753L13.2812 30.4617L21.3239 38.4888L36.5631 30.5884L32.8439 21.9278Z" />
                      <path
                        d="M0.737606 36.8698L0.0961263 38.3636C-0.235905 39.1367 0.332943 40 1.17736 40H18.447C18.555 39.9197 18.5562 39.9246 19.136 39.624L11.0815 31.5863L0.737606 36.8698Z" />
                      <path
                        d="M39.9048 38.3636L37.4951 32.7527L23.5156 40H38.8235C39.6661 40 40.2374 39.1382 39.9048 38.3636Z" />
                      <path
                        d="M21.1771 10.5722C21.1771 9.92462 20.6492 9.39819 20.0007 9.39819C19.3519 9.39819 18.8242 9.92462 18.8242 10.5722C18.8242 11.2195 19.3519 11.7462 20.0007 11.7462C20.6492 11.7462 21.1771 11.2195 21.1771 10.5722Z" />
                      <path
                        d="M20.8896 30.1263C21.2857 29.6716 30.5896 18.9093 30.5896 11.5112C30.5896 -3.74393 9.41406 -3.93009 9.41406 11.5112C9.41406 18.9093 18.718 29.6716 19.1141 30.1263C19.5831 30.6643 20.4214 30.6637 20.8896 30.1263ZM16.4725 10.5722C16.4725 8.63004 18.0557 7.05014 20.0018 7.05014C21.9476 7.05014 23.5309 8.63004 23.5309 10.5722C23.5309 12.514 21.9476 14.0939 20.0018 14.0939C18.0557 14.0939 16.4725 12.514 16.4725 10.5722Z" />
                    </g>
                    <defs>
                      <clipPath id="clip0_28268_927">
                        <rect width="40" height="40" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
              </div>
              <p>Multi-State Consulting Services, USA</p>
              <img src="assets/img/icons/map-green.svg" alt="Map icon">
            </div>

            <div class="contact-info mb-20 wow animate__fadeInUp" data-wow-delay="0.45s">
              <div class="d-flex align-items-center justify-content-between">
                <h2>Availability</h2>
                <div class="con-icon"><i class="fa-solid fa-headphones"></i></div>
              </div>
              <ul>
                <li>Remote & On-Site Consulting</li>
              </ul>
              <div class="bg-icon"><i class="fa-solid fa-headphones"></i></div>
            </div>

            <div class="contact-info mb-20 wow animate__fadeInUp" data-wow-delay="0.45s">
              <div class="d-flex align-items-center justify-content-between">
                <h2>Our Official Email Address</h2>
                <div class="con-icon"><i class="fa-solid fa-envelope"></i></div>
              </div>
              <ul>
                <li><a href="mailto:kaile.hilliard@granitepeakhs.com">kaile.hilliard@granitepeakhs.com</a></li>
              </ul>
              <div class="bg-icon"><i class="fa-solid fa-envelope"></i></div>
            </div>
          </div>

          <div class="col-lg-8">
          <div class="contact-box">
            <div class="vs-title text-center animation-style2">
              <p class="vs-title__sub mb-15">
                <img src="assets/img/icons/title-icon.svg" alt="Icon" class="pe-1"> Contact Us <img
                  src="assets/img/icons/title-icon.svg" alt="Icon" class="ps-1">
              </p>
              <h2 class="vs-title__main title-anime">Get In Touch</h2>
            </div>

            <form action="mail.php" method="post" class="form-style ajax-contact wow animate__fadeInUp"
              data-wow-delay="0.95s">
              <div class="row gx-20">
                <!-- First Name -->
                <div class="col-md-6 form-group">
                  <input class="form-control" type="text" name="fname" id="fname" placeholder="First name">
                  <i class="fa-solid fa-user"></i>
                </div>
                <!-- Last Name -->
                <div class="col-md-6 form-group">
                  <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name">
                  <i class="fa-solid fa-user"></i>
                </div>
                <!-- Email Address -->
                <div class="col-md-6 form-group">
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required>
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <!-- service -->
                <div class="col-md-6 form-group">
                  <select name="service">
                    <option>Select Service</option>
                    <option>Clinical Consulting</option>
                    <option>Social Services Consulting</option>
                    <option>Food & Nutrition Consulting</option>
                    <option>Fire & Life Safety Consulting</option>
                    <option>Emergency Preparedness Consulting</option>
                    <option>Nursing Home Administration Consulting</option>
                    <option>Mock Surveys / IDR Preparation</option>
                    <option>Directed Plan of Correction Assistance</option>
                    <option>Survey Management</option>
                    <option>Regulatory and Survey Crisis Support</option>
                  </select>
                </div>
                <!-- Message -->
                <div class="col-12 form-group">
                  <textarea class="form-control" name="message" id="message" placeholder="Message here..." rows="4"
                    required></textarea>
                </div>
                <!-- Submit Button -->
                <div class="col-12">
                  <button class="con-btn">Send Message</button>
                </div>
              </div>
              <!-- Form Messages -->
            </form>
            <p class="form-messages mb-0 mt-3"></p>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact End-->

  </main>

<?php include "footer.php"; ?>