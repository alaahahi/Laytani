

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
             <div class="newsSection">
        <div class="newsSection_box2_1">
          <div class="newsSection_h_box" data-aos="fade-up" data-aos-delay="00">
            <div class="sub_heading_box  sub_heading_box_newsSection flex items-center">
            <div class="sub_heading_img_holder">
                <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
              </div>
              <h1 class="sub_heading_text">LETEST BLOG</h1>
              <div class="sub_heading_img_holder">
                <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
              </div>
            </div>
            <h1 class="heading newsSection_heading">Latest News & Feeds</h1>
          </div>
        </div>
        <div class="newsSection_wrapper flex">
          <div class="newsSection_box1" data-aos="fade-up" data-aos-delay="100">
            <img src="/assets/img/news_2.png" width="900" height="720" alt="" />
          </div>
          <div class="newsSection_box2">
            <div class="newsSection_slider_wrapper">
              <Swiper
                class="newsSection_slider"
                slidesPerView={3}
                spaceBetween={15}
                freeMode={true}
                pagination={false}
                navigation={true}
         
              >
                <SwiperSlide>
                  <div class="newsSection_box">
                    <div class="newsSection_box_img_holder flex items-center justify-center">
                      <img src="/assets/img/news1.png" width="323" height="225" alt="" />
                    </div>
                    <div class="newsSection_box_body">
                      <div class="newsSection_box_body_top flex justify-between items-center">
                        <div class="newsSection_box_body_top_box flex items-center gap-2">
                          <div class="newsSection_box_body_top_box_img_holder">
                            <img src="/assets/img/mbz3.png" width="45" height="45" alt="" />
                          </div>
                          <div class="newsSection_box_body_top_box_name">Admin</div>
                        </div>
                        <div class="newsSection_box_body_top_box">
                          28 Oct, 2022
                        </div>
                      </div>
                      <div class="newsSection_box_body_heading">Open source job report in Endings fewer.</div>
                      <div class="newsSection_box_body_heading2">
                        Open source job report and can
                        Be more than fewer.
                      </div>
                      <a href="blog">
                        <div class="flex newsSection_box_body_link">
                          READ MORE
                          <i class="fa-solid fa-arrow-right red-ar"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </SwiperSlide>
                <SwiperSlide>
                  <div class="newsSection_box">
                    <div class="newsSection_box_img_holder flex items-center justify-center">
                      <img src="/assets/img/news2.png" width="323" height="225" alt="" />
                    </div>
                    <div class="newsSection_box_body">
                      <div class="newsSection_box_body_top flex justify-between items-center">
                        <div class="newsSection_box_body_top_box flex items-center gap-2">
                          <div class="newsSection_box_body_top_box_img_holder">
                            <img src="/assets/img/mbz3.png" width="45" height="45" alt="" />
                          </div>
                          <div class="newsSection_box_body_top_box_name">Admin</div>
                        </div>
                        <div class="newsSection_box_body_top_box">
                          28 Oct, 2022
                        </div>
                      </div>
                      <div class="newsSection_box_body_heading">Open source job report in Endings fewer.</div>
                      <div class="newsSection_box_body_heading2">
                        Open source job report and can
                        Be more than fewer.
                      </div>
                      <a href="blog">
                        <div class="flex newsSection_box_body_link">
                          READ MORE
                          <i class="fa-solid fa-arrow-right red-ar"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </SwiperSlide>
                <SwiperSlide>
                  <div class="newsSection_box">
                    <div class="newsSection_box_img_holder flex items-center justify-center">
                      <img src="/assets/img/news1.png" width="323" height="225" alt="" />
                    </div>
                    <div class="newsSection_box_body">
                      <div class="newsSection_box_body_top flex justify-between items-center">
                        <div class="newsSection_box_body_top_box flex items-center gap-2">
                          <div class="newsSection_box_body_top_box_img_holder">
                            <img src="/assets/img/mbz3.png" width="45" height="45" alt="" />
                          </div>
                          <div class="newsSection_box_body_top_box_name">Admin</div>
                        </div>
                        <div class="newsSection_box_body_top_box">
                          28 Oct, 2022
                        </div>
                      </div>
                      <div class="newsSection_box_body_heading">Open source job report in Endings fewer.</div>
                      <div class="newsSection_box_body_heading2">
                        Open source job report and can
                        Be more than fewer.
                      </div>
                      <a href="blog">
                        <div class="flex newsSection_box_body_link">
                          READ MORE
                          <i class="fa-solid fa-arrow-right red-ar"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </SwiperSlide>
                <SwiperSlide>
                  <div class="newsSection_box">
                    <div class="newsSection_box_img_holder flex items-center justify-center">
                      <img src="/assets/img/news1.png" width="323" height="225" alt="" />
                    </div>
                    <div class="newsSection_box_body">
                      <div class="newsSection_box_body_top flex justify-between items-center">
                        <div class="newsSection_box_body_top_box flex items-center gap-2">
                          <div class="newsSection_box_body_top_box_img_holder">
                            <img src="/assets/img/mbz3.png" width="45" height="45" alt="" />
                          </div>
                          <div class="newsSection_box_body_top_box_name">Admin</div>
                        </div>
                        <div class="newsSection_box_body_top_box">
                          28 Oct, 2022
                        </div>
                      </div>
                      <div class="newsSection_box_body_heading">Open source job report in Endings fewer.</div>
                      <div class="newsSection_box_body_heading2">
                        Open source job report and can
                        Be more than fewer.
                      </div>
                      <a href="blog">
                        <div class="flex newsSection_box_body_link">
                          READ MORE
                          <i class="fa-solid fa-arrow-right red-ar"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </SwiperSlide>
              </Swiper>
            </div>
          </div>
        </div>
      </div>
</template>