

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
        <Swiper
          class="clientsLogoSlider"
          slidesPerView={9}
          navigation={true}
          spaceBetween={15}
          freeMode={true}
          pagination={false}

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