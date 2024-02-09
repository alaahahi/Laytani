
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";
import { ref } from 'vue';
  
  const projects = ref([
    { img: '/assets/img/whoweare1.svg', width: 35, height: 35, count: 35, title: 'Finish Projects', delay: 100 },
    { img: '/assets/img/whoweare2.svg', width: 35, height: 35, count: 500, title: 'Team Members', delay: 200 },
    { img: '/assets/img/whoweare3.svg', width: 30, height: 30, count: 230, title: 'Clients Are Happy', delay: 300 },
    { img: '/assets/img/whoweare4.svg', width: 30, height: 35, count: 3, title: 'Award Wins', delay: 400 }
  ]);
  
  const slides = ref([
    { img: '/assets/img/project1.png', link: 'projects' },
    { img: '/assets/img/project2.png', link: 'projects' },
    { img: '/assets/img/project3.png', link: 'projects' },
    { img: '/assets/img/project4.png', link: 'projects' },
    { img: '/assets/img/project5.png', link: 'projects' },
    { img: '/assets/img/project3.png', link: 'projects' },
    { img: '/assets/img/project1.png', link: 'projects' }
  ]);
  

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
            <div class="sub_heading_box  clientsSection_h_box_clientsSection flex items-center" data-aos="fade-up" data-aos-delay="00">
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
            <h1 class="heading clientsSection_heading" data-aos="fade-up" data-aos-delay="100">
              What Our Clients Say?
            </h1>
          </div>
          <div class="clientsSection_slider_wrapper">
            <Swiper
        
              class="clientsSection_slider"
              slidesPerView={3}
              spaceBetween={15}
              freeMode={true}
              pagination={false}
              navigation={true}
            >
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
            </Swiper>
          </div>
        </div>
      </div>
    </div>
</template>