
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import 'swiper/css/navigation';
import { Autoplay } from "swiper/modules";
import { Link } from "@inertiajs/inertia-vue3";
import MainLayout from '@/Layouts/MainLayout.vue';

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
        <div class="sub_banner sub_banner--blog">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Blog
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Blog</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="container">
                <div class="blog_wrapper flex flex-wrap">
                    <div class="blogRight">
                        <div class="blogRight_card"  v-scroll-reveal-fade-up="{delay:'100'}" > 
                            <div class="blogRight_card_header">
                                <h1 class="blogRight_card_header_heading">Popular Topics</h1>
                            </div>
                            <div class="blogRight_card_body">
                                <div class="famous_topics_wrapper flex flex-wrap">
                                    <div class="famous_topics">
                                        Planning
                                    </div>
                                    <div class="famous_topics">
                                        Planning
                                    </div>
                                    <div class="famous_topics">
                                        Planning
                                    </div>
                                    <div class="famous_topics">
                                        Planning
                                    </div>
                                    <div class="famous_topics">
                                        Planning
                                    </div>
                                </div>
                            </div>
                        </div>
             
                         <div class="blogRight_card"  v-scroll-reveal-fade-up="{delay:'100'}">
                            <div class="blogRight_card_header">
                                <h1 class="blogRight_card_header_heading">Trends</h1>
                            </div>
                            <div class="blogRight_card_body">
                                <div class="blogRight_news_wrapper flex flex-wrap">
                                    <a href='/news'>
                                        <div class="blogRight_news flex">
                                            <div class="blogRight_news_img">
                                                <img src="/assets/img/news1.png" width="75"  height="69"  alt="" />
                                            </div>
                                            <div class="blogRight_news_content">
                                                <div class="blogRight_news_content_heading">
                                                    It is a long established fact that a reader 
                                                </div>
                                                <div class="blogRight_news_content_date">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blogRight_news_wrapper flex flex-wrap">
                                    <a href='/news'>
                                        <div class="blogRight_news flex">
                                            <div class="blogRight_news_img">
                                                <img src="/assets/img/news1.png" width="75"  height="69"  alt="" />
                                            </div>
                                            <div class="blogRight_news_content">
                                                <div class="blogRight_news_content_heading">
                                                    It is a long established fact that a reader 
                                                </div>
                                                <div class="blogRight_news_content_date">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blogRight_news_wrapper flex flex-wrap">
                                    <a href='/news'>
                                        <div class="blogRight_news flex">
                                            <div class="blogRight_news_img">
                                                <img src="/assets/img/news1.png" width="75"  height="69"  alt="" />
                                            </div>
                                            <div class="blogRight_news_content">
                                                <div class="blogRight_news_content_heading">
                                                    It is a long established fact that a reader 
                                                </div>
                                                <div class="blogRight_news_content_date">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                         <div class="blogRight_card" v-scroll-reveal-fade-up="{delay:'200'}">
                            <div class="blogRight_card_header">
                                <h1 class="blogRight_card_header_heading">
                                    Letset From Twitter
                                </h1>
                            </div>
                            <div class="blogRight_card_body">
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/twt.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/twt.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/twt.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                         <div class="blogRight_card" v-scroll-reveal-fade-up="{delay:'300'}">
                            <div class="blogRight_card_header">
                                <h1 class="blogRight_card_header_heading">
                                    Letset From Facebook
                                </h1>
                            </div>
                            <div class="blogRight_card_body">
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/fb.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/fb.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="twt_news_wrapper">
                                    <a href="#">
                                        <div class="flex justify-between">
                                            <div class="twt_news_box2">
                                                <img src="/assets/img/fb.svg" width="25"  height="25"  alt="" />
                                            </div>
                                            <div class="twt_news_box1">
                                                <div class="twt_news_box1_h">
                                                    making it look like readable English. 
                                                    Many desktop publishing 
                                                </div>
                                                <div class="twt_news_box1_p">
                                                    25/10/2022
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>
 
                    <div class="blogleft">
                        <div class="blogleft_top" v-scroll-reveal-fade-up="{delay:'100'}">
                            <h1 class="blogleft_top_heading">For You</h1>
                        </div>
                        <div class="blogBox_Wrapper">
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'200'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/construction-site (1).png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                            
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'300'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/construction-worker-construction.png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'400'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/cutting-metal-with-plasma-equipment copy.png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'500'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/cutting-metal-with-plasma-equipment copy.png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'600'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/empty-asphalt-road-towards-modern-city.png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="blogBox" v-scroll-reveal-fade-up="{delay:'700'}">
                                <a href="blog-details/1">
                                    <div class="blogBox_img_holder">
                                        <img src="/assets/img/construction-site (1).png" width="374"  height="233"  alt="" />
                                    </div>
                                    <div class="blogBox_profile_wrapper">
                                        <div class="blogBox_profile_img_holder">
                                            <img src="/assets/img/blogslider2.jpg" width="57"  height="57"  alt="" />
                                        </div>
                                        <div class="blogBox_profile_content">
                                            <h1 class="blogBox_profile_name">Ahsan</h1>
                                            <div class="blogBox_profile_time">56 hours ago </div>
                                        </div>
                                    </div>
                                    <h1 class="blogBox_heading">
                                        Lorem ipsum dolor sit amet.
                                    </h1>
                                    <div class="blogBox_desc">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia velit excepturi ex autem, vitae optio.
                                    </div>
                                    <div class="blogBox_comment">
                                        <div class="blogBox_comment_mini">
                                            <div class="blogBox_comment_mini_img_holder dark-none">
                                                <img src="/assets/img/blogcomment.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_mini_img_holder d-none dark-show">
                                                <img src="/assets/img/comment_white.svg" width="22"  height="22"  alt="" />
                                            </div>
                                            <div class="blogBox_comment_text">
                                                Comments
                                            </div>
                                            <div class="blogBox_comment_counter">
                                                70
                                            </div>
                                        </div>
                                        <div class="blogBox_comment_button">
                                            More
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="blog_slider">
                            <div class="blog_slider_heading" v-scroll-reveal-fade-up="{delay:'0'}">Latest news</div>
                            <div class="blog_slider_wrapper" v-scroll-reveal-fade-up="{delay:'200'}">
                                <swiper
                                ref="{swiperRef}"
                                :modules="[Autoplay]"
                                :navigation="false"
                                :slides-per-view="4"
                                :space-between="15"
                                :speed="1200"
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
                                    992: {
                                        slidesPerView: 2,
                                        },
                                    1200: {
                                        slidesPerView: 3,
                                        spaceBetween: 10
                                    },
                                    1400: {
                                        slidesPerView: 3,
                                        spaceBetween: 20
                                    },
                                    1600: {
                                        slidesPerView: 4,
                                    }
                                            }"
                                >
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/services1.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/engineer-construction-site.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/empty-asphalt-road-towards-modern-city.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/engineer-construction-site.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/empty-asphalt-road-towards-modern-city.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                    <SwiperSlide>
                                        <div class="blog_sliderBox">
                                            <div class="blog_sliderBox_img_holder">
                                                <img src="/assets/img/cutting-metal-with-plasma-equipment copy.png" width="390"  height="230"  alt="" />
                                            </div>
                                            <div class="blog_sliderBox_body">
                                                <h1 class="blog_sliderBox_heading">
                                                    Lorem ipsum dolor sit amet.
                                                </h1>
                                                <div class="blogBox_profile_wrapper1 flex items-center gap-2">
                                                    <div class="blogBox_profile_img_holder1 flex items-center">
                                                        <img src="/assets/img/newsletter.jpg" width="32"  height="32"  alt="" />
                                                    </div>
                                                    <div class="blogBox_profile_content1">
                                                        <h1 class="blogBox_profile_name1">Agsan</h1>
                                                        <div class="blogBox_profile_time1">6 mint ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </SwiperSlide>
                                </Swiper>
                            </div>
                        </div>
                        
                    </div>
                 </div>
             </div>
         </div>
    </MainLayout>
</template>