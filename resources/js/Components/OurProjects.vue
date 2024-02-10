
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";
import { ref } from 'vue';
  

  
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
  <div class="ourProjects">
    <div class="container">
      <div class="whoWeAre_services_wrapper flex items-center">
        <div v-for="(project, index) in projects" :key="index" class="whoWeAre_services_box flex items-center"  aos="'fade-up'"  aos-delay="project.delay">
          <div class="whoWeAre_services_box_mini">
            <img v-bind:src="project.img" v-bind:width="project.width" v-bind:height="project.height" alt="" />
          </div>
          <div class="whoWeAre_services_box_content">
            <h1 class="whoWeAre_services_box_heading">{{ project.count }}</h1>
            <div class="whoWeAre_services_box_desc">
              {{ project.title }}
            </div>
          </div>
        </div>
      </div>
      <div class="ourServices_heading_box--ourProjects">
        <div class="sub_heading_box flex items-center sub_heading_box_ourProjects">
          <div class="sub_heading_img_holder">
            <img src="/sub_heading_left.svg" width="58" height="3" alt="Construction Industry" />
          </div>
          <h1 class="sub_heading_text sub_heading_text_ourProjects">OUR PROJECT</h1>
          <div class="sub_heading_img_holder">
            <img src="/sub_heading_right.svg" width="58" height="3" alt="Construction Industry" />
          </div>
        </div>
        <!-- sub_heading_box end -->
        <h1 class="heading ourServices_heading heading ourServices_heading_ourProjects">See Our Working Projects</h1>
      </div>
    </div>
    <div class="ourProjects_slider flex">
      <swiper
                    class="client-slider  owl-theme pb-5 mx-5"
                    ref="{swiperRef}"
                    :modules="[Autoplay]"
                    :navigation="false"
                    :slides-per-view="6"
                    :space-between="30"
                    :speed="800"
                    @swiper="setSwiperRef"
                    :breakpoints="{
                      0: {
                      slidesPerView: 1,
                      spaceBetween:0,
                    },
                    540: {
                      slidesPerView: 2,
                    },
                    768: {
                      slidesPerView: 2,
                    },
                    991: {
                        slidesPerView: 3,
                      },
                    1200: {
                      slidesPerView: 4,
                    },
                    1400: {
                      slidesPerView: 4,
                    },
                    1600: {
                      slidesPerView: 5,
                    }
                    }"
                    >
        <SwiperSlide v-for="(slide, index) in slides" :key="index">
          <div class="ourProjects_slide">
            <div class="ourProjects_slide_img_holder flex items-center">
              <img v-bind:src="slide.img" v-bind:width="slide.width" v-bind:height="slide.height" alt="" />
            </div>
            <a href="projects">
              <div class="ourProjects_slide_link">
                View
              </div>
            </a>
          </div>
        </SwiperSlide>
      </Swiper>
    </div>
  </div>
</template>

