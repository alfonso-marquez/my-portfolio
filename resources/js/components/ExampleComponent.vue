<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="5000"
      fade
      controls
      indicators
      img-width="1024"
      img-height="800"
      style="text-shadow: 1px 1px 2px #333;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >
      <!-- Text slides with image -->
      <!-- <b-carousel-slide>
        <template v-slot:img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            src="image/header-alfonso.jpg"
            alt="image slot"
          >
        </template>
      </b-carousel-slide> -->

      <b-carousel-slide content-visible-up="md" caption="Volleyball" img-src="/image/volleyball-1.jpg">
        <p>
          Started playing in High School just for fun but never thought it would be part of who I am today. <br>
          As a Captain for some of my teams, it helped me develop my Leadership Skills. <br>
          <a href="https://www.youtube.com/channel/UCI7rCtpVLhc9ZP2sKjSPlSA" target="_blank"> See my Videos</a>
        </p>
      </b-carousel-slide>

      <b-carousel-slide content-visible-up="md" caption="Photography" img-src="/image/alfonso-2.jpg">
        <p>
            An interest I discovered lately which helped me see things differently and open up my perspective. <br>
            Having stills of my memories are a plus. <br>
          <a href="https://www.instagram.com/fonsomarquez/" target="_blank"> See my Instagram</a>
        </p>
      </b-carousel-slide>

      <b-carousel-slide content-visible-up="md" caption="Music" img-src="/image/top.jpg">
        <p>
          Music helped me cope with my daily struggles and especially while I am coding.<br>
          Big fan of Twenty One Pilots and The Maine 🤘
        </p>
         <iframe src="https://open.spotify.com/embed/playlist/1vME7SKuEmMUEeS2F7612E" width="500" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

        <!-- <a href="https://www.youtube.com/channel/UCI7rCtpVLhc9ZP2sKjSPlSA" target="_blank"></a> -->
      </b-carousel-slide>

      <!-- Slides with img slot -->
      <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
      <!-- <b-carousel-slide>
        <template v-slot:img>
          <img
            class="d-block img-fluid w-100"
            width="1024"
            height="480"
            src="image/header-alfonso.jpg"
            alt="image slot"
          >
        </template>
      </b-carousel-slide> -->

      <!-- Slide with blank fluid image to maintain slide aspect ratio -->
    </b-carousel>

    <!-- <p class="mt-4">
      Slide #: {{ slide }}<br>
      Sliding: {{ sliding }}
    </p> -->
  </div>
</template>

<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false

      }
    }
  }
</script>

<style>
        /* height:auto !important ; */
    .carousel-item h3 {
        font-size: 32px !important;
    }
    .carousel-item p {
        font-size: 20px !important;
        line-height: 20px !important;
    }
    .carousel-item img {
        height:auto!important ;
        width:100vw!important ;
    }
</style>