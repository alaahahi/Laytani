<template>
    <div class="banner">
      <div class="container">
        <div class="banner_box">
          <h1 class="banner_box_heading"  aos="fade-up"  aos-delay="100">
            WORLD BEST <span class="banner_box_heading_bg"> INDUSTRY</span> <br />
            SOLUTIONS HERE
          </h1>
          <div class="banner_btn_wrapper flex items-center"  aos="fade-up"  aos-delay="200">
            <a href="/">
              <div class="banner_btn">
                Read More
              </div>
            </a>
            <a href="/">
              <div class="banner_btn banner_btn2">
                Contact Us
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->
    <div class="banner_botthrefm">
      <div class="container">
        <div class="banner_botttom_wrapper flex items-center">
          <div class="banner_botttom_box banner_botttom_box1"  aos="fade-up"  aos-delay="100">
            <div class="banner_botttom_box_img_holder">
              <img src="/assets/img/AutomationIndustry.svg" width="29" height="29" alt="AutomationIndustry" />
            </div>
            <div class="banner_botttom_box_content">
              <h1 class="banner_botttom_box_heading">Automation Industry</h1>
              <div class="banner_botttom_box_desc">
                Proactively administrate low-risk
                High yield total linkage rather than 
                Empowered manufactured.
              </div>
            </div>
          </div>
          <div class="banner_botttom_box banner_botttom_box2"  aos="fade-up"  aos-delay="200">
            <div class="banner_botttom_box_img_holder">
              <img src="/assets/img/ConstructionIndustry.svg" width="29" height="29" alt="Construction Industry" />
            </div>
            <div class="banner_botttom_box_content">
              <h1 class="banner_botttom_box_heading">Construction Industry</h1>
              <div class="banner_botttom_box_desc">
                Proactively administrate low-risk
                High yield total linkage rather than 
                Empowered manufactured.
              </div>
            </div>
          </div>
          <div class="banner_botttom_box banner_botttom_box3"  aos="fade-up"  aos-delay="300">
            <div class="banner_botttom_box_img_holder">
              <img src="/assets/img/RealEstateIndustry.svg" width="32" height="36" alt="Real Estate Industry" />
            </div>
            <div class="banner_botttom_box_content">
              <h1 class="banner_botttom_box_heading">Real Estate Industry</h1>
              <div class="banner_botttom_box_desc">
                Proactively administrate low-risk
                High yield total linkage rather than 
                Empowered manufactured. 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ourServices_top_img_holder dark-none">
        <img src="/assets/img/child.svg" width="292" height="321" alt="Construction Industry" />
      </div>
      <div class="ourServices_top_img_holder d-none dark-show">
        <img src="/assets/img/didi.png" width="292" height="321" alt="Construction Industry" />
      </div>
    </div>
    <!-- banner bottom end -->
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Link } from "@inertiajs/inertia-vue3";

  const fadeUp = 'fade-up';
  
  const bannerData = {
    aos: fadeUp,
    aosDelay: 100,
  };
  
  const bannerBtnData = {
    aos: fadeUp,
    aosDelay: 200,
  };
  
  const bannerBottomBoxData = [
    { img: '/AutomationIndustry.svg', width: 29, height: 29, alt: 'AutomationIndustry' },
    { img: '/ConstructionIndustry.svg', width: 29, height: 29, alt: 'Construction Industry' },
    { img: '/RealEstateIndustry.svg', width: 32, height: 36, alt: 'Real Estate Industry' },
  ];
  
  const bannerBottomData = [
    { ...bannerData },
    { ...bannerBtnData },
    ...bannerBottomBoxData.map((boxData, index) => ({
      ...boxData,
      aos: fadeUp,
      aosDelay: 100 + (index + 1) * 100,
    })),
  ];
  </script>