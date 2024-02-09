<template>
    <div class="whoWeAre">
      <div class="container">
        <div class="whoWeAre_wrapper flex justify-between">
          <div class="whoWeAre_box1 flex items-center justify-center"  aos="'fade-up'"  aos-delay="100">
            <img src="/assets/img/who-we-are.png" width="648" height="567" alt="" />
          </div>
          <div class="whoWeAre_box2">
            <div class="sub_heading_box flex items-center ourServices--whoWeAre"  aos="'fade-up'"  aos-delay="200">
              <h1 class="sub_heading_text">Who We Are</h1>
              <div class="sub_heading_img_holder">
                <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
              </div>
            </div>
            <h1 class="heading--whoWeAre"  aos="'fade-up'"  aos-delay="300">
              A Modern Construction
              & Industrial Agency
            </h1>
            <div class="whoWeAre_box2_box flex items-center justify-between"  aos="'fade-up'"  aos-delay="400">
              <div class="whoWeAre_box2_box_left">
                <img src="/assets/img/whoweareicone.svg" width="52" height="52" alt="" />
              </div>
              <div class="whoWeAre_box2_box_right">
                <h1 class="whoWeAre_box2_box_right_heading">
                  Our Mission
                </h1>
                <div class="whoWeAre_box2_box_right_desc">
                  Credibly maintain focused internal or 
                  organic sources rather than vertical 
                  alignments.
                </div>
              </div>
            </div>
            <div class="whoWeAre_box2_box_disscover flex items-center"  aos="'fade-up'"  aos-delay="500">
              <a href="about">
                <div class="whoWeAre_box2_box_disscover_btn">
                  Discover More
                </div>
              </a>
              <a to="tel:+971502615675">
                <div class="whoWeAre_box2_box_disscover_right flex items-center">
                    <div class="whoWeAre_box2_box_disscover_right_mini">
                      <img src="/assets/img/callwhite.svg" width="18" height="18" alt="" />
                    </div>
                    <div class="whoWeAre_box2_box_disscover_content">
                      <div class="whoWeAre_box2_box_disscover_content_h">Have Any Question</div>
                      <h2 class="whoWeAre_box2_box_disscover_content_h2">+971 502615675</h2>
                    </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Link } from '@inertiajs/inertia-vue3';

  const whoWeAreData = [
    { aos: 'fade-up', delay: 100 },
    { aos: 'fade-up', delay: 200 },
    { aos: 'fade-up', delay: 300 },
    { aos: 'fade-up', delay: 400 },
    { aos: 'fade-up', delay: 500 },
  ];
  </script>