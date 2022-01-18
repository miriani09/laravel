<div style="height: 65px; position: relative;"></div>
<!--Slider-->
<div id="slider">
    <div class="slide">
        <img src="{{asset('pics/site_img/slide-1.png')}}" class="img1">
    </div>

    <div class="slide">
        <img src="{{asset('pics/site_img/slide-2.png')}}" class="img1">
    </div>

    <div class="slide">
        <img src="{{asset('pics/site_img/slide-3.png')}}" class="img1">
    </div>

    <div class="slide">
        <img src="{{asset('pics/site_img/slide-4.png')}}" class="img1">
    </div>
    <div id="dots-con">
        <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
    </div>
    <!--Controlling arrows-->
    <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
               class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
          </svg>
        </span>
    <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
               class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
          </svg>
        </span>
</div>

<script src="{{asset('js/slide.js')}}">
    changeSlide();
</script>
