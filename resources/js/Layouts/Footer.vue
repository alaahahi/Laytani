
<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from "@inertiajs/inertia-vue3";

const showButton = ref(false);

const handleScroll = () => {
  // Show/hide the button based on scroll position
  showButton.value = window.scrollY > 150;
};

const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll);
});


import ClientsSlider from '@/Components/ClientsSlider.vue';

</script>

<template>
    <ClientsSlider />
    <div class='footer_m'>
      <div class="footer_top">
        <div class="footer_outer_wrapper flex items-start justify-between">
          <div class="footer_top_box footer_top_box1">
            <div class="footer_top_box_logo_holder">
              <img src="/assets/img/footer_logo.png" width="196" height="66" alt="" />
            </div>
            <div class="footer_top_box_desc">
              it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using 
            </div>
            <ul class="footer_social_media flex items-center">
                <li class="footer_social_media_item footer_social_media_item_fb">
                    <a href="/">
                        <div class="footer_social_media_link flex items-center">
                        <i class="fa-brands fa-facebook-f footer_social_media_link_icone"></i>
                        </div>
                    </a>
                </li>
                <li class="footer_social_media_item footer_social_media_item_twt">
                    <a href="/">
                        <div class="footer_social_media_link flex items-center">
                        <i class="fa-brands fa-twitter footer_social_media_link_icone"></i>
                        </div>
                    </a>
                </li>
                <li class="footer_social_media_item footer_social_media_item_inst">
                    <a href="/">
                        <div class="footer_social_media_link flex items-center">
                        <i class="fa-brands fa-instagram footer_social_media_link_icone"></i>
                        </div>
                    </a>
                </li>
            </ul>
          </div>
          <div class="footer_top_box footer_top_box2">
            <h1 class="footer_top_box_heading">Useful Links</h1>
            <div class="footer_top_box_heading_below">
              <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
            </div>
            <ul class="footer_list">
              <li class="footer_list_item">
                <Link href="about">
                  <div class="footer_list_link">
                    About us
                  </div>
                </Link>
              </li>
              <li class="footer_list_item">
                <Link href="services">
                  <div class="footer_list_link">
                    Services 
                  </div>
                </Link>
              </li>
              <li class="footer_list_item">
                <Link href="projects">
                  <div class="footer_list_link">
                    Projects 
                  </div>
                </Link>
              </li>
              <li class="footer_list_item">
                <Link href="blog">
                  <div class="footer_list_link">
                    Blogs 
                  </div>
                </Link>
              </li>
              <li class="footer_list_item">
                <Link href="contact">
                  <div class="footer_list_link">
                    Contact us 
                  </div>
                </Link>
              </li>
            </ul>
          </div>
          <div class="footer_top_box footer_top_box3">
            <h1 class="footer_top_box_heading">Contact Us</h1>
            <div class="footer_top_box_heading_below">
              <img src="/assets/img/fotter_heading_bottom.svg" width="58" height="3" alt="" />
            </div>
            <ul class="footer_contact_list">
              <li class="footer_contact_list_item">
                <a href="tel:+971567895215">
                  <div class="footer_contact_list_wrapper flex gap-2">
                      <div class="footer_contact_list_item_img">
                        <img src="/assets/img/callwhite.svg" width="20" height="20" alt="" />
                      </div>
                      <div class="footer_list_link">
                        +971 567895215
                      </div>
                  </div>
                </a>
              </li>
              <li class="footer_contact_list_item">
                <a href="mailto:info@alaytani.com">
                  <div class="footer_contact_list_wrapper flex gap-2">
                      <div class="footer_contact_list_item_img">
                        <img src="/assets/img/mailwhite.svg" width="17" height="14" alt="" />
                      </div>
                      <div class="footer_list_link">
                        info@alaytani.com
                      </div>
                  </div>
                </a>
              </li>
              <li class="footer_contact_list_item">
                <a href="mailto:info@alaytani.com">
                  <div class="footer_contact_list_wrapper flex gap-2">
                      <div class="footer_contact_list_item_img">
                        <img src="/assets/img/location.svg" width="14" height="18" alt="" />
                      </div>
                      <div class="footer_list_link">
                        UAE, Abu Dhabi 
                        Al Khaldia City
                      </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer_top_box footer_top_box4">
            <h1 class="footer_top_box_heading">Subscribe</h1>
            <div class="footer_top_box_heading_below">
              <img src="/assets/img/rectangle.svg" width="58" height="3" alt="" />
            </div>
            <div class="footer_top_box_desc">
              Subscribe For Our Latest News & Articles
            </div>
            <form action="" class="subscribe_form flex items-center">
              <input type="text" class="subscribe_form_input" placeholder='Email' />
              <button class="subscribe_form_btn">
                <img src="/assets/img/subscribe.svg" width="22" height="17" alt="" />
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer_bottom flex items-center justify-between">
        <div class="flex poweredby_wrapper gap-2">
          <div class="poweredby">Powered By </div>
          <a href='https://skilledtech.co/'>
            <div  class="poweredbyLink">
              Skilled Tech
            </div>
          </a>
        </div>
        <div class="copyright flex items-center gap-2">
          <div>
            <img src="/assets/img/cop.png" width="16" height="16" alt="" />
          </div>
          Copyright 2022 By <div class="red"> Al Laytani </div>All right reserved 
        </div>
        <div class=" flex items-center gap-3">
          <a href="/">
            <div class="copyright">
              Terms & Conditions 
            </div>
          </a>
          <div class="bor"></div>
          <a href="/">
            <div class="copyright">
            Privacy Policy 
            </div>
          </a>
        </div>
      </div>
      <div class="scroll-to-top" @click="scrollToTop" v-if="showButton"><div class="top"><img  src="/assets/img/uparrow.png" width="16" height="12"></div></div>
    </div>
</template>