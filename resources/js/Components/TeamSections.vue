
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
      <div class="teamSection">
        <div class="teamSection_h_box" v-scroll-reveal-fade-up="{delay:'0'}">
          <div class="sub_heading_box flex items-center">
            <div class="sub_heading_img_holder">
              <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
            </div>
            <h1 class="sub_heading_text sub_heading_text_teamSection">Team Members</h1>
            <div class="sub_heading_img_holder">
              <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
            </div>
          </div>
          <h1 class="heading heading_teamSection">Our Professional Team</h1>
        </div>
        <div class="team_section_top_wrapper flex">
          <div class="team_section_left"  v-scroll-reveal-fade-up="{delay:'100'}" >
            <img src="/assets/img/team_bg2.png" width="500" height="375" alt="" />
          </div>
          <div class="teamSection_wrapper">
            <swiper
                    class="client-slider  owl-theme pb-5 mx-5"
                    ref="{swiperRef}"
                    :modules="[Autoplay]"
                    :navigation="false"
                    :slides-per-view="4.2"
                    :space-between="30"
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
                    }"
                    >
              <SwiperSlide>
                <div class="teamSection_box">
                  <div class="teamSection_box_img_holder">
                    <img
                      src="/assets/img/team1.png"
                      width="222"
                      height="186"
                      alt="Construction Industry"
                    />
                    <a href="team-details/1">
                      <div class="teamSection_box_img_holder_text">View</div>
                    </a>
                  </div>
                  <h1 class="teamSection_box_heading">Mohammed Aziz</h1>
                  <div class="teamSection_box_desc">CTO</div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="teamSection_box">
                  <div class="teamSection_box_img_holder">
                    <img
                      src="/assets/img/team2.png"
                      width="222"
                      height="186"
                      alt="Construction Industry"
                    />
                    <a href="team-details/1">
                      <div class="teamSection_box_img_holder_text">View</div>
                    </a>
                  </div>
                  <h1 class="teamSection_box_heading">Hamza Omer</h1>
                  <div class="teamSection_box_desc">CTO</div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="teamSection_box">
                  <div class="teamSection_box_img_holder">
                    <img
                      src="/assets/img/team3.png"
                      width="222"
                      height="186"
                      alt="Construction Industry"
                    />
                    <a href="team-details/1">
                      <div class="teamSection_box_img_holder_text">View</div>
                    </a>
                  </div>
                  <h1 class="teamSection_box_heading">Mohammed Ahsan</h1>
                  <div class="teamSection_box_desc">CTO</div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="teamSection_box">
                  <div class="teamSection_box_img_holder">
                    <img
                      src="/assets/img/team2.png"
                      width="222"
                      height="186"
                      alt="Construction Industry"
                    />
                    <a href="team-details/1">
                      <div class="teamSection_box_img_holder_text">View</div>
                    </a>
                  </div>
                  <h1 class="teamSection_box_heading">Hamza Omer</h1>
                  <div class="teamSection_box_desc">CTO</div>
                </div>
              </SwiperSlide>
              <SwiperSlide>
                <div class="teamSection_box">
                  <div class="teamSection_box_img_holder">
                    <img
                      src="/assets/img/team2.png"
                      width="222"
                      height="186"
                      alt="Construction Industry"
                    />
                    <a href="team-details/1">
                      <div class="teamSection_box_img_holder_text">View</div>
                    </a>
                  </div>
                  <h1 class="teamSection_box_heading">Hamza Omer</h1>
                  <div class="teamSection_box_desc">CTO</div>
                </div>
              </SwiperSlide>
            </Swiper>
          </div>
        </div>
      </div>
</template>