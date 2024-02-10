<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { ref, onUnmounted } from "vue";



const isActive = ref(0);

const openTab = () => {
  isActive.value =  !isActive.value;
};
</script>
<template>
    <MainLayout>
        <div class="sub_banner sub_banner--blog">
        <div class="container">
          <div class="sub_banner_wrapper">
            <div class="sub_banner_box1">
              <h1 class="sub_banner_heading">Blog</h1>
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
              <div
                class="blogRight_card"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <div class="blogRight_card_header">
                  <h1 class="blogRight_card_header_heading">
                    Popular Topics
                  </h1>
                </div>
                <div class="blogRight_card_body">
                  <div class="famous_topics_wrapper flex flex-wrap">
                    <div class="famous_topics">Planning</div>
                    <div class="famous_topics">Planning</div>
                    <div class="famous_topics">Planning</div>
                    <div class="famous_topics">Planning</div>
                    <div class="famous_topics">Planning</div>
                  </div>
                </div>
              </div>
              <div
                class="blogRight_card"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <div class="blogRight_card_header">
                  <h1 class="blogRight_card_header_heading">Trends</h1>
                </div>
                <div class="blogRight_card_body">
                  <div class="blogRight_news_wrapper flex flex-wrap">
                    <a href="/assets/img/news">
                      <div class="blogRight_news flex">
                        <div class="blogRight_news_img">
                          <img
                            src="/assets/img/news1.png"
                            width="75"
                            height="69"
                            alt=""
                          />
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
                    <a href="/assets/img/news">
                      <div class="blogRight_news flex">
                        <div class="blogRight_news_img">
                          <img
                            src="/assets/img/news1.png"
                            width="75"
                            height="69"
                            alt=""
                          />
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
                    <a href="/assets/img/news">
                      <div class="blogRight_news flex">
                        <div class="blogRight_news_img">
                          <img
                            src="/assets/img/news1.png"
                            width="75"
                            height="69"
                            alt=""
                          />
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
               <div
                class="blogRight_card"
                data-aos="fade-up"
                data-aos-delay="300"
              >
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
                          <img src="/assets/img/twt.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="twt_news_wrapper">
                    <a href="#">
                      <div class="flex justify-between">
                        <div class="twt_news_box2">
                          <img src="/assets/img/twt.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="twt_news_wrapper">
                    <a href="#">
                      <div class="flex justify-between">
                        <div class="twt_news_box2">
                          <img src="/assets/img/twt.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
               <div
                class="blogRight_card"
                data-aos="fade-up"
                data-aos-delay="400"
              >
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
                          <img src="/assets/img/fb.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="twt_news_wrapper">
                    <a href="#">
                      <div class="flex justify-between">
                        <div class="twt_news_box2">
                          <img src="/assets/img/fb.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="twt_news_wrapper">
                    <a href="#">
                      <div class="flex justify-between">
                        <div class="twt_news_box2">
                          <img src="/assets/img/fb.svg" width="25" height="25" alt="" />
                        </div>
                        <div class="twt_news_box1">
                          <div class="twt_news_box1_h">
                            making it look like readable English. Many desktop
                            publishing
                          </div>
                          <div class="twt_news_box1_p">25/10/2022</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
             </div>
             <div class="blogleft">
              <div class="blogDetails">
                <div
                  class="blogDetails_holder relative flex items-center justify-center"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  <div class="blogDetails_holder_bg"></div>
                  <img
                    src="/assets/img/blogdetails.png"
                    width="1200"
                    height="600"
                    alt=""
                  />
                  <div class="blogDetails_holder_inner">
                    <div
                      class="blogDetails_holder_inner_b1 flex items-center"
                      data-aos="fade-right"
                      data-aos-delay="200"
                    >
                      <div class="blogDetails_holder_inner_b1_holder">
                        <img
                          src="/assets/img/mbz3.png"
                          width="55"
                          height="55"
                          alt=""
                        />
                      </div>
                      <div class="blogDetails_holder_inner_b1_text">
                        By : Admin
                      </div>
                    </div>
                    <div
                      class="blogDetails_holder_inner_b2 flex items-center"
                      data-aos="fade-right"
                      data-aos-delay="300"
                    >
                      <div class="blogDetails_holder_inner_b2_holder">
                        <img
                          src="/assets/img/comment_white.svg"
                          width="22"
                          height="22"
                          alt=""
                        />
                      </div>
                      <div class="blogDetails_holder_inner_b2_text">77</div>
                      <div class="blogDetails_holder_inner_b2_text2">
                        تعليقاً
                      </div>
                    </div>
                    <div
                      class="blogDetails_holder_inner_b3 flex items-center"
                      data-aos="fade-right"
                      data-aos-delay="400"
                    >
                      <div class="blogDetails_holder_inner_b2_text3">
                        6 Hours Ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blogDetails_body">
                  <h1
                    class="blogDetails_body_heading"
                    data-aos="fade-up"
                    data-aos-delay="500"
                  >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sequi!
                  </h1>
                  <div
                    class="blogDetails_body_desc"
                    data-aos="fade-right"
                    data-aos-delay="800"
                  >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid voluptatibus 
                    animi dolor cupiditate totam saepe, quasi placeat rerum consequatur reiciendis
                    cum ipsa necessitatibus asperiores ex assumenda aliquam iusto eos at accusamus
                    omnis exercitationem magni possimus voluptates inventore! Eos, illum consequatur
                    cumque ex doloremque excepturi sapiente minima nisi laborum sed omnis debitis
                    officia suscipit magnam atque facere odio. Velit natus tempora voluptate cum
                    dolores quasi, voluptates expedita ipsa tempore sit architecto sed perspiciatis 
                    praesentium? Molestias ut, minima quis officia ipsum rem fuga dicta neque animi 
                    quod quos ipsa suscipit deserunt quae necessitatibus ipsam deleniti doloribus 
                    cum recusandae excepturi beatae. Optio, sed.
                  </div>
                  <div
                    class="blogDetails_wrapper"
                    data-aos="fade-right"
                    data-aos-delay="500"
                  >
                    <div class="blogDetails_tab">Buil</div>
                    <div class="blogDetails_tab">City</div>
                    <div class="blogDetails_tab">Workers</div>
                    <div class="blogDetails_tab">Look</div>
                  </div>
                </div>
                <div class="blogDetails_footer">
                  <form class="post_form ">
                    <input
                      type="text"
                      placeholder="Comment"
                      class="blogDetails_footer_input"
                    />
                    <button class="blogDetails_footer_submit">Publish</button>
                  </form>
                </div>
              </div>
               <div :class="isActive ? 'blogDetails_accordian active' : 'blogDetails_accordian' ">
                    <div class="blogDetails_accordian_header  flex items-center justify-between"  @click="openTab">
                        <div class="blogDetails_accordian_header_box1 flex items-center">
                            <h1 class="blogDetails_accordian_heading">Comments</h1>
                            <div class="blogDetails_accordian_noti  flex items-center justify-center">3</div>        
                        </div>
                        <div class="blogDetails_accordian_header_box2">
                            <div class="blogDetails_accordian_header_box2_img_holder_plus dark-none">
                                <img src="/assets/img/plus_black.svg" width="14"  height="14"  alt="" />
                            </div>
                            <div class="blogDetails_accordian_header_box2_img_holder_minus dark-none">
                                <img src="/assets/img/minus_black.svg" width="14"  height="14"  alt="" />
                            </div>
                            <div class="blogDetails_accordian_header_box2_img_holder_plus d-none dark-show">
                                <img src="/assets/img/plus_white.svg" width="14"  height="14"  alt="" />
                            </div>
                        </div>
                    </div>
                    <div class='blogDetails_accordian_content flex justify-between'>
                        <div class="blogDetails_accordian_content_box1 flex items-center justify-center">
                            <div class="blogDetails_accordian_content_box1_img_holder flex items-center justify-center dark-none">
                                <img src="/assets/img/accd.svg" width="33"  height="27"  alt="" />
                            </div>
                            <div class="blogDetails_accordian_content_box1_img_holder flex items-center justify-center d-none dark-show">
                                <img src="/assets/img/acc_white.svg" width="33"  height="27"  alt="" />
                            </div>
                            <div class="blogDetails_accordian_content_box1_content">
                                <h1 class="blogDetails_accordian_content_box1_content_name">Guest </h1>
                                <div class="blogDetails_accordian_content_box1_content_p">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, id recusandae! Cum asperiores similique ipsa?
                                </div>
                            </div>
                        </div>
                        <div class="blogDetails_accordian_content_box2">Just Now</div>
                    </div>
                </div>
            </div>
           
          </div>
        
        </div>
       
      </div>
    </MainLayout>
</template>