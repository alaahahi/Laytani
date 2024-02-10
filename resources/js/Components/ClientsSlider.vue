

<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";

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
               <div class="clients_slider">
      <div class="clients_slider_wrapper">
        <swiper
                    class="client-slider  owl-theme pb-5 mx-5"
                    ref="{swiperRef}"
                    :modules="[Autoplay]"
                    :navigation="false"
                    :slides-per-view="7"
                    :space-between="30"
                    :speed="800"
                    @swiper="setSwiperRef"
                    :autoplay="{
                    delay:2000,
                    disableOnInteraction: false,
                    }"
                      :breakpoints="{
                 0: {
              slidesPerView: 3,
            },
            540: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 5,
            },
            991: {
              slidesPerView: 5,
            },
            1200: {
              slidesPerView: 5,
            },
            1400: {
              slidesPerView: 5,
            },
            1600: {
              slidesPerView: 7,
            },
                    }"

                    >
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client1.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client2.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client3.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client4.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client1.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client2.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client3.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client4.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
          <SwiperSlide>
            <div class="clients_slider_box">
              <img src="/assets/img/client2.png" width="100" height="100" alt="" />
            </div>
          </SwiperSlide>
        </Swiper>
      </div>
    </div>
</template>