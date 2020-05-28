<template>
  <div>
    <b-carousel
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      fade
      controls
      indicators
      img-width="1024"
      img-height="480"
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

      <b-carousel-slide caption="Volleyball" img-src="/image/volleyball.jpg">
        <p>
          Started playing in High School just for fun. I never thought it would be part of who I am today. <br>
          As a Captain for some of my teams, it helped me develop my Leadership Skills.
        </p>
      </b-carousel-slide>

      <b-carousel-slide caption="Photography" img-src="/image/alfonso-2.jpg">
        <p>
            Discovered my interest in it just recently. Made me see things differently and open up my perspective.
        </p>
      </b-carousel-slide>

      <b-carousel-slide caption="Music" img-src="/image/top.jpg">
        <p>
          Music helped me cope with my daily struggles and endeavors (esp. while coding 🤣)<br>
          Big fan of Twenty One Pilots and also The Maine.
        </p>
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
        title: null,
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
    .carousel-item img {
        height:100vh!important ;
    }
</style>