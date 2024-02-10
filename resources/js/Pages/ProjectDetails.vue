<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
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
    <MainLayout>
        <div class="sub_banner sub_banner--projects">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Project Details
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Our Projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="projects">
            <div class="container">
                <div class='blog_wrapper flex flex-wrap'>
                    <div class="blogRight">
                        <div class="blogRight_card" data-aos="fade-up" data-aos-delay="00">
                            <div class="blogRight_card_body">
                                <h1 class="blogRight_card_ser_li_h">
                                    Services List
                                </h1>
                                <div class="blogRight_card_ser_li_h_holder">
                                    <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
                                </div>
                                <div class="projectDetails_text flex gap-2 items-center text-white">
                                    <span class="red">Client Name : </span> Emmar 
                                </div>
                                <div class="projectDetails_text flex gap-2 items-center text-white">
                                    <span class="red">Consultant : </span> SkyTrip 
                                </div>
                                <div class="projectDetails_text flex gap-2 items-center text-white">
                                    <span class="red">Contract Duration : </span> 2 Years 
                                </div>
                                <div class="projectDetails_text flex gap-2 items-center text-white">
                                    <span class="red">Contract Value :  </span> 3.000.000 AED 
                                </div>
                                <div class="projectDetails_text flex gap-2 items-center text-white">
                                    <span class="red">City :  </span> Abu Dhabi
                                </div>
                            </div>
                        </div>
                        <div class="blogRight_card" data-aos="fade-up" data-aos-delay="100">
                            <div class="blogRight_card_body">
                                <h1 class="blogRight_card_ser_li_h">
                                    Share With
                                </h1>
                                <div class="blogRight_card_ser_li_h_holder">
                                    <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
                                </div>
                                <ul class="footer_social_media flex items-center">
                                <li class="footer_social_media_item footer_social_media_item_fb">
                                    <a href="#">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-facebook-f footer_social_media_link_icone"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer_social_media_item footer_social_media_item_twt">
                                    <a href="#">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-twitter footer_social_media_link_icone"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer_social_media_item footer_social_media_item_inst">
                                    <a href="#">
                                        <div class="footer_social_media_link flex items-center">
                                        <i class="fa-brands fa-instagram footer_social_media_link_icone"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blogleft">
                        <div class="tab_content">
                            <div class="tab_content_img_holder flex items-center justify-center" data-aos="fade-up" data-aos-delay="00">
                                <img src="/assets/img/tab1.png" width="1200" height="400" alt="" />
                            </div>
                            <h1 class="tab_content_heading" data-aos="fade-up" data-aos-delay="100">Building Construction</h1>
                            <div class="tab_content_desc" data-aos="fade-up" data-aos-delay="200">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
                            </div>
                        </div>
                        <h1 class="tab_content_heading" data-aos="fade-up" data-aos-delay="300">Professional</h1>
                        <div class="projectDetails_images">
                            <div class="projectDetails_images_holder" data-aos="fade-up" data-aos-delay="300">
                                <img src="/assets/img/p1.png" width="200" height="190" alt="" />
                            </div>
                            <div class="projectDetails_images_holder" data-aos="fade-up" data-aos-delay="400">
                                <img src="/assets/img/p2.png" width="200" height="190" alt="" />
                            </div>
                            <div class="projectDetails_images_holder" data-aos="fade-up" data-aos-delay="500">
                                <img src="/assets/img/p3.png" width="200" height="190" alt="" />
                            </div>
                            <div class="projectDetails_images_holder" data-aos="fade-up" data-aos-delay="600">
                                <img src="/assets/img/p4.png" width="200" height="190" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="container">
                <div class="sub_heading_box flex items-center sub_heading_box_related">
                    <div class="sub_heading_img_holder">
                        <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
                    </div>
                    <h1 class="sub_heading_text sub_heading_text_teamSection">Related Projects</h1>
                    <div class="sub_heading_img_holder">
                        <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
                    </div>
                </div>
                 <div class="related_wrapper flex items-center justify-between">
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
                        slidesPerView: 3,
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
                        slidesPerView: 4,
                    },
                    }"
                    >
                         <SwiperSlide>
                            <div class="related_box flex items-center justify-center">
                                <img src="/assets/img/p1.png" width="327" height="302" alt="" />
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="related_box flex items-center justify-center">
                                <img src="/assets/img/p2.png" width="327" height="302" alt="" />
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="related_box flex items-center justify-center">
                                <img src="/assets/img/p3.png" width="327" height="302" alt="" />
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="related_box flex items-center justify-center">
                                <img src="/assets/img/p4.png" width="327" height="302" alt="" />
                            </div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="related_box flex items-center justify-center">
                                <img src="/assets/img/p5.png" width="327" height="302" alt="" />
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>
        </div>
    </MainLayout>
</template>