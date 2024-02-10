
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";
import { ref } from 'vue';
  
 

import "swiper/css";
let swiperRef = null;

const setSwiperRef = (swiper) => {
swiperRef = swiper;
};
const slideNext = () => {
swiperRef.slideNext();
};

const slidePrev = () => {
swiperRef.slidePrev();
};


</script>
<template>
    <div class="clientsSection">
      <div class="clientsSection_wrapper flex">
        <div class="clientsSection_box1">
          <img  src="/assets/img//happyclients.png" width="900" height="600" alt="" />
        </div>
        <div class="clientsSection_box2">
          <div class="clientsSection_h_box">
            <div class="sub_heading_box  clientsSection_h_box_clientsSection flex items-center" v-scroll-reveal-fade-up="{delay:'0'}">
              <h1 class="sub_heading_text">Happy Client</h1>
              <div class="sub_heading_img_holder">
                <img
                   src="/assets/img//sub_heading_right.svg"
                  width="58"
                  height="3"
                  alt=""
                />
              </div>
            </div>
            <h1 class="heading clientsSection_heading"  v-scroll-reveal-fade-up="{delay:'100'}">
              What Our Clients Say?
            </h1>
          </div>
          <div class="clientsSection_slider_wrapper">
            <swiper
              class="clientsSection_slider"
              :slides-per-view="3"
              :space-between="15"
              :pagination="false"
              :navigation="true"
              ref="{swiperRef}"
               :speed="800"
                    @swiper="setSwiperRef"
                    :autoplay="{
                    delay:2000,
                    disableOnInteraction: false,
                    }"
               :breakpoints="{
                  0: {
                      slidesPerView: 1,
                    },
                    540: {
                      slidesPerView: 2,
                    },
                    768: {
                      slidesPerView: 2,
                    },
                    1024: {
                      slidesPerView: 3,
                    },
                    1200: {
                      slidesPerView: 3,
                    },
                    1400: {
                      slidesPerView: 3,
                    },
                    1600: {
                      slidesPerView: 4,
                    },
                    }">
              <SwiperSlide>
                <div class="clientsSection_box">
                  <div class="clientsSection_box_img_holder">
                    <img  src="/assets/img//profile.png" width="100" height="100" alt="" />
                  </div>
                  <div class="clientsSection_box_h">
                    <h1 class="clientsSection_box_name">Alex Jordan</h1>
                    <div class="clientsSection_box_desig">
                      CEO of Marina
                    </div>
                  </div>
                  <div class="clientsSection_box_desc">
                    it is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using
                  </div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="clientsSection_box">
                  <div class="clientsSection_box_img_holder">
                    <img  src="/assets/img//profile.png" width="100" height="100" alt="" />
                  </div>
                  <div class="clientsSection_box_h">
                    <h1 class="clientsSection_box_name">Alex Jordan</h1>
                    <div class="clientsSection_box_desig">
                      CEO of Marina
                    </div>
                  </div>
                  <div class="clientsSection_box_desc">
                    it is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using
                  </div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="clientsSection_box">
                  <div class="clientsSection_box_img_holder">
                    <img  src="/assets/img//profile.png" width="100" height="100" alt="" />
                  </div>
                  <div class="clientsSection_box_h">
                    <h1 class="clientsSection_box_name">Alex Jordan</h1>
                    <div class="clientsSection_box_desig">
                      CEO of Marina
                    </div>
                  </div>
                  <div class="clientsSection_box_desc">
                    it is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using
                  </div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="clientsSection_box">
                  <div class="clientsSection_box_img_holder">
                    <img  src="/assets/img//profile.png" width="100" height="100" alt="" />
                  </div>
                  <div class="clientsSection_box_h">
                    <h1 class="clientsSection_box_name">Alex Jordan</h1>
                    <div class="clientsSection_box_desig">
                      CEO of Marina
                    </div>
                  </div>
                  <div class="clientsSection_box_desc">
                    it is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using
                  </div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="clientsSection_box">
                  <div class="clientsSection_box_img_holder">
                    <img  src="/assets/img//profile.png" width="100" height="100" alt="" />
                  </div>
                  <div class="clientsSection_box_h">
                    <h1 class="clientsSection_box_name">Alex Jordan</h1>
                    <div class="clientsSection_box_desig">
                      CEO of Marina
                    </div>
                  </div>
                  <div class="clientsSection_box_desc">
                    it is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using
                  </div>
                </div>
              </SwiperSlide>
              <div class="swiper-button-prev" @click="slidePrev"></div>
              <div class="swiper-button-next" @click="slideNext"></div>

              
            </swiper>
          </div>
        </div>
      </div>
    </div>
</template>