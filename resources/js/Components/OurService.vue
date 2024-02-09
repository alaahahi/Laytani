<script setup>
import { ref } from 'vue';

import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';

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
defineProps({
    isHome: {
        type: Boolean,
        default: false,
    },})
    const services = ref([
    { 
      img: '/assets/img/ourServices1.svg',
      width: 44,
      height: 43,
      heading: 'Petroleum & Gas Energy',
      description: 'Assertively engineer principle centered processes through',
      link: 'services',
      delay: 200
    },
    {
      img: '/assets/img/ourServices2.svg',
      width: 44,
      height: 43,
      heading: 'Petroleum & Gas Energy',
      description: 'Assertively engineer principle centered processes through',
      link: 'services',
      delay: 300
    },
    {
      img: '/assets/img/ourServices3.svg',
      width: 44,
      height: 43,
      heading: 'Auto & Mechanical Engineering',
      description: 'Assertively engineer principle centered processes through',
      link: 'services',
      delay: 400
    },
    {
      img: '/assets/img/ourServices4.svg',
      width: 44,
      height: 43,
      heading: 'Basic & Industrial Chemicals',
      description: 'Assertively engineer principle centered processes through',
      link: 'services',
      delay: 500
    }
  ]);
</script>
<template>
    <div class="ourServices">
      <div class="container">
        <div class="ourServices_heading_box">
          <div class="sub_heading_box flex items-center ourServices--sub_heading_box">
            <div class="sub_heading_img_holder">
              <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="Construction Industry" />
            </div>
            <h1 class="sub_heading_text">OUR SERVICE</h1>
            <div class="sub_heading_img_holder">
              <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="Construction Industry" />
            </div>
          </div>
          <!-- sub_heading_box end -->
          <h1 class="heading ourServices_heading">We Provide Best Services</h1>
        </div>
        <div class="container">
          <div class="ourServices_slider">
            <div v-for="(service, index) in services" :key="index" class="ourServices_box" v-bind:data-aos="'fade-up'" v-bind:data-aos-delay="service.delay">
              <div class="ourServices_box_body">
                <div class="ourServices_box_img_holder flex items-center">
                  <img v-bind:src="service.img" v-bind:width="service.width" v-bind:height="service.height" alt="" />
                </div>
                <h1 class="ourServices_box_heading">{{ service.heading }}</h1>
                <div class="ourServices_box_desc">
                  {{ service.description }}
                </div>
              </div>
              <router-link :to="service.link" class="ourServices_box_bottom flex items-center">
                <h1 class="ourServices_box_bottom_text">Read More</h1>
                <i class="fa fa-arrow-right ourServices_box_bottom_text"></i>
              </router-link>
            </div>
            <!-- ourServices_box end -->
          </div>
        </div>
      </div>
    </div>
  </template>