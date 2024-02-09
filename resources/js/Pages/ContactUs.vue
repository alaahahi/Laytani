<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import DropMessage from '@/Components/DropMessage.vue';
import ContactArea from '@/Components/ContactArea.vue';
import Mapsec from '@/Components/Mapsec.vue';
import { Link } from "@inertiajs/inertia-vue3";


import WebsiteRanking from '@/Components/WorkProcess.vue';

</script>
<template>
    <MainLayout>
        <div class="sub_banner sub_banner--contact">
            <div class="container">
                <div class="sub_banner_wrapper">
                    <div class="sub_banner_box1">
                        <h1 class="sub_banner_heading">
                            Contact Us
                        </h1>
                        <div class="breadCrums flex items-center">
                            <div class="breadCrums_name">Home</div>
                            <div class="breadCrums_name_imf_holder flex items-center">
                                <img src="/assets/img/rightarrow.png" width="12" height="9" alt="" />
                            </div>
                            <div class="breadCrums_name">Contact Us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <div class="container">
                <div class="sub_heading_box flex items-center sub_heading_box--contact" data-aos="fade-up" data-aos-delay="00">
                    <div class="sub_heading_img_holder">
                        <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="" />
                    </div>
                    <h1 class="sub_heading_text">Contact Us</h1>
                    <div class="sub_heading_img_holder">
                        <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="" />
                    </div>
                </div>
                <div class="contact_sub_heading" data-aos="fade-up" data-aos-delay="100">
                    Any Question ? just write us a message !
                </div>
                <div class="form_submit">
                    <div class="form_submit_img_holder flex items-center">
                        <img src="/assets/img/mark.png" width='100' height='100' alt='' /> 
                    </div>
                    <div class="form_submit_successfull">Your message was sent successfully </div>
                    <div class="form_submit_successfull2">Thank you for connecting with us </div>
                </div>
                 <div class="contactFormWrapper">
                    <div class="contactBox1" >
                        <h1 class="contactBox1_heading" data-aos="fade-up" data-aos-delay="00">Contact information</h1>
                        <div class="contactBox1_desc" data-aos="fade-up" data-aos-delay="100">
                            Fill up the form and our Team will get back to you Within 24 hours. 
                        </div>
                        <a href='tel:+971502615675' data-aos="fade-up" data-aos-delay="200">
                            <div class="contact_link_wrapper flex items-center cursor-pointer">
                                <div class="contact_link_img_holder flex items-center">
                                    <img src="/assets/img/callwhite.svg" width='20' height='23' alt='' />
                                </div>
                                <div class="contact_link_text">+971 502615675</div>
                            </div>
                        </a>
                        <a href='mailto:info@skilledtech.com' data-aos="fade-up" data-aos-delay="300">
                            <div class="contact_link_wrapper flex items-center cursor-pointer">
                                <div class="contact_link_img_holder flex items-center">
                                    <img src="/assets/img/mailwhite.svg" width='20' height='23' alt='' />
                                </div>
                                <div class="contact_link_text">
                                    info@skilledtech.com
                                </div>
                            </div>
                        </a>
                        <a href='https://goo.gl/maps/sTUSqcfJ7uqntdBp6' data-aos="fade-up" data-aos-delay="400">
                            <div target="_blank" class="contact_link_wrapper flex items-center  cursor-pointer contact_link_wrapper2">
                                <div class="contact_link_img_holder flex items-center">
                                    <img src="/assets/img/location.svg" width='16' height='22' alt='' />
                                </div>
                                <div class="contact_link_text">
                                    17 st sirt, Alnhyan, Abu Dhabi 
                                </div>
                            </div>
                        </a>
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
                    <div class="contactBox2">
                        <form action="" class="Contactform" data-aos="fade-up" data-aos-delay="500">
                            <input type="text" class="Contactform_input" placeholder='First Name' />
                            <input type="text" class="Contactform_input" placeholder='Last Name' />
                            <input type="text" class="Contactform_input" placeholder='Phone' />
                            <input type="text" class="Contactform_input" placeholder='mail' />
                            <textarea name="" id="" cols="30" rows="10" class="Contactform_input Contactform_input_msg" placeholder='Your Message'></textarea>
                            <button class="submit_button">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>