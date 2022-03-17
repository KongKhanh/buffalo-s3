<style>
    .theme-loader {
    height: 100%;
    width: 100%;
    background: #fff;
    position: fixed;
    z-index: 999999;
    top: 0;
    left: 0;
  }
  
  .theme-loader .loader-track {
    left: 50%;
    top: 50%;
    position: absolute;
    display: block;
    width: 50px;
    height: 50px;
    margin: -25px 0 0 -25px;
  }
  
  .theme-loader .loader-track .preloader-wrapper {
    display: inline-block;
    position: relative;
    width: 50px;
    height: 50px;
    animation: container-rotate 1568ms linear infinite;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    border-color: #11c15b;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer.spinner-blue {
    border-color: #448aff;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer.spinner-red {
    border-color: #ff5252;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer.spinner-yellow {
    border-color: #ffe100;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer.spinner-green {
    border-color: #11c15b;
    animation: fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  @keyframes fill-unfill-rotate {
    12.5% {
      transform: rotate(135deg);
    }
    25% {
      transform: rotate(270deg);
    }
    37.5% {
      transform: rotate(405deg);
    }
    50% {
      transform: rotate(540deg);
    }
    62.5% {
      transform: rotate(675deg);
    }
    75% {
      transform: rotate(810deg);
    }
    87.5% {
      transform: rotate(945deg);
    }
    to {
      transform: rotate(1080deg);
    }
  }
  
  @keyframes blue-fade-in-out {
    from {
      opacity: 1;
    }
    25% {
      opacity: 1;
    }
    26% {
      opacity: 0;
    }
    89% {
      opacity: 0;
    }
    90% {
      opacity: 1;
    }
    100% {
      opacity: 1;
    }
  }
  
  @keyframes red-fade-in-out {
    from {
      opacity: 0;
    }
    15% {
      opacity: 0;
    }
    25% {
      opacity: 1;
    }
    50% {
      opacity: 1;
    }
    51% {
      opacity: 0;
    }
  }
  
  @keyframes yellow-fade-in-out {
    from {
      opacity: 0;
    }
    40% {
      opacity: 0;
    }
    50% {
      opacity: 1;
    }
    75% {
      opacity: 1;
    }
    76% {
      opacity: 0;
    }
  }
  
  @keyframes green-fade-in-out {
    from {
      opacity: 0;
    }
    65% {
      opacity: 0;
    }
    75% {
      opacity: 1;
    }
    90% {
      opacity: 1;
    }
    100% {
      opacity: 0;
    }
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .gap-patch {
    position: absolute;
    top: 0;
    left: 45%;
    width: 10%;
    height: 100%;
    overflow: hidden;
    border-color: inherit;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .gap-patch.circle {
    width: 1000%;
    left: -450%;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper {
    display: inline-block;
    position: relative;
    width: 50%;
    height: 100%;
    overflow: hidden;
    border-color: inherit;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper .circle {
    width: 200%;
    height: 100%;
    border-width: 3px;
    border-style: solid;
    border-color: inherit;
    border-bottom-color: transparent !important;
    border-radius: 50%;
    animation: none;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper.left {
    float: left;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper.left .circle {
    left: 0;
    border-right-color: transparent !important;
    transform: rotate(129deg);
    animation: left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper.right {
    float: right;
  }
  
  .theme-loader .loader-track .preloader-wrapper .spinner-layer .circle-clipper.right .circle {
    left: -100%;
    border-left-color: transparent !important;
    transform: rotate(-129deg);
    animation: right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
  }
  
  @keyframes left-spin {
    from {
      transform: rotate(130deg);
    }
    50% {
      transform: rotate(-5deg);
    }
    to {
      transform: rotate(130deg);
    }
  }
  
  @keyframes right-spin {
    from {
      transform: rotate(-130deg);
    }
    50% {
      transform: rotate(5deg);
    }
    to {
      transform: rotate(-130deg);
    }
  }
  
  @keyframes left-spin {
    from {
      transform: rotate(130deg);
    }
    50% {
      transform: rotate(-5deg);
    }
    to {
      transform: rotate(130deg);
    }
  }
  
  @keyframes right-spin {
    from {
      transform: rotate(-130deg);
    }
    50% {
      transform: rotate(5deg);
    }
    to {
      transform: rotate(-130deg);
    }
  }
  
  @keyframes fade-out {
    from {
      opacity: 1;
    }
    to {
      opacity: 0;
    }
  }
  
  @keyframes container-rotate {
    to {
      transform: rotate(360deg);
    }
  }
</style>


<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<script>

"use strict";

$(document).ready(function() {
    
    $(".theme-loader").animate({
        opacity: "0"
    },1000);

    setTimeout(function() {

        $(".theme-loader").remove();
    }, 1000);
});
</script>