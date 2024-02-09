
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
      <div class="teamSection">
        <div class="teamSection_h_box" data-aos="fade-up" data-aos-delay="00">
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
          <div class="team_section_left" data-aos="fade-up" data-aos-delay="100">
            <img src="/assets/img/team_bg2.png" width="500" height="375" alt="" />
          </div>
          <div class="teamSection_wrapper">
            <Swiper
              class="teamSection_slider"
              slidesPerView={4}
              spaceBetween={15}
              freeMode={true}
              pagination={false}
              navigation={true}
    
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
                    <a href="teamDetails">
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
                    <a href="teamDetails">
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
                    <a href="teamDetails">
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
                    <a href="teamDetails">
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
                    <a href="teamDetails">
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