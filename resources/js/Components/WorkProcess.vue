<template>
<div className="workProcess">
  <div className="container">
    <div className="sub_heading_box flex items-center"  v-scroll-reveal-fade-up="{delay:'100'}" >
      <div className="sub_heading_img_holder">
        <img src="/assets/img/sub_heading_left.svg" width="58" height="3" alt="Construction Industry" />
      </div>
      <h1 className="sub_heading_text sub_heading_text_workProcess">How We Work</h1>
      <div className="sub_heading_img_holder">
        <img src="/assets/img/sub_heading_right.svg" width="58" height="3" alt="Construction Industry" />
      </div>
    </div>
    {/* sub_heading_box end */}
    <h1 className="heading heading_workProcess" v-scroll-reveal-fade-up="{delay:'200'}">Our Work Process</h1>
    <div className="workProcess_wrapper">
      <div className="workProcess_box"   v-scroll-reveal-zoom-in="{delay:'100'}">
        <div className="workProcess_box_mini"  v-scroll-reveal-zoom-in="{delay:'200'}">
          <img src="/assets/img/WorkProcessIcone1.svg" width="24" height="35" alt="Construction Industry" />
        </div>
        <div className="workProcess_box_inner">
          <h1 className="workProcess_box_inner_heading">Planning</h1>
          <div className="workProcess_box_inner_text">
            Uniquely orchestrale
            Seamless potentialities
            Via - Real Time
          </div>
        </div>
      </div>
      <div className="workProcess_box_arrow" v-scroll-reveal-fade-right="{delay:'100'}">
        <img src="/assets/img/icon_top.png" width="395" height="97" alt="Construction Industry" />
      </div>
      <div className="workProcess_box"   v-scroll-reveal-zoom-in="{delay:'100'}">
        <div className="workProcess_box_mini"   v-scroll-reveal-zoom-in="{delay:'300'}">
          <img src="/assets/img/WorkProcessIcone2.svg" width="34" height="31" alt="Construction Industry" />
        </div>
        <div className="workProcess_box_inner">
          <h1 className="workProcess_box_inner_heading">Design</h1>
          <div className="workProcess_box_inner_text">
            Uniquely orchestrale
            Seamless potentialities
            Via - Real Time
          </div>
        </div>
      </div>
      <div className="workProcess_box_arrow workProcess_box_arrow2" v-scroll-reveal-fade-right="{delay:'200'}">
        <img src="/assets/img/icon_bottom.png" width="395" height="97" alt="Construction Industry" />
      </div>
      <div className="workProcess_box" v-scroll-reveal-zoom-in="{delay:'200'}">
        <div className="workProcess_box_mini"  v-scroll-reveal-zoom-in="{delay:'400'}">
          <img src="/assets/img/WorkProcessIcone3.svg" width="34" height="31" alt="Construction Industry" />
        </div>
        <div className="workProcess_box_inner">
          <h1 className="workProcess_box_inner_heading">Construct</h1>
          <div className="workProcess_box_inner_text">
            Uniquely orchestrale
            Seamless potentialities
            Via - Real Time
          </div>
        </div>
      </div>
      <div className="workProcess_box_arrow" v-scroll-reveal-fade-right="{delay:'300'}">
        <img src="/assets/img/icon_top.png" width="395" height="97" alt="Construction Industry" />
      </div>
      <div className="workProcess_box" v-scroll-reveal-zoom-in="{delay:'300'}">
        <div className="workProcess_box_mini"  v-scroll-reveal-zoom-in="{delay:'500'}">
          <img src="/assets/img/WorkProcessIcone4.svg" width="34" height="31" alt="Construction Industry" />
        </div>
        <div className="workProcess_box_inner">
          <h1 className="workProcess_box_inner_heading">Finishing</h1>
          <div className="workProcess_box_inner_text">
            Uniquely orchestrale
            Seamless potentialities
            Via - Real Time
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</template>
