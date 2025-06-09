<template>
  <div class="carrusel">
    <!-- Botó per retrocedir -->
    <button @click="prevSlide" class="carrusel-btn left">‹</button>

    <!-- Contingut dinàmic: imatge o iframe -->
    <div class="carrusel-div">
      <img
        v-if="currentSlide.type === 'image'"
        :src="currentSlide.src"
        :alt="currentSlide.title"
        class="carrusel-img"
      />
      <iframe
        v-else-if="currentSlide.type === 'iframe'"
        :src="currentSlide.src"
        frameborder="0"
        allowfullscreen
        class="carrusel-iframe"
      ></iframe>
    </div>

    <!-- Botó per avançar -->
    <button @click="nextSlide" class="carrusel-btn right">›</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slides: [
        { id: 1, type: 'image', src: 'media/eventoPrincipal.webp', title: 'Slide 1' },
        { id: 2, type: 'iframe', src: 'https://www.youtube.com/watch?v=7XFIcPk3cK4&pp=ygUabW9iaWxlIHdvcmxkIGNvbmdyZXNzIDIwMjU%3D', title: 'Iframe' },
        { id: 3, type: 'image', src: 'media/evento.webp', title: 'Slide 3' },
      ],
      currentIndex: 0,
      intervalId: null,
    };
  },
  computed: {
    currentSlide() {
      return this.slides[this.currentIndex];
    },
  },
  methods: {
    nextSlide() {
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
    },
    prevSlide() {
      this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
    },
    startAutoSlide() {
      this.intervalId = setInterval(this.nextSlide, 5000); // Canvia cada 5 segons
    },
    stopAutoSlide() {
      clearInterval(this.intervalId);
    },
  },
  mounted() {
    this.startAutoSlide();
  },
  beforeDestroy() {
    this.stopAutoSlide();
  },
};
</script>

<style>
.carrusel {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  width: 100%;
  max-width: 1000px;
  margin: auto;
  overflow: hidden;
}

.carrusel-div {
  width: 100%;
  text-align: center;
}

.carrusel-img,
.carrusel-iframe {
  width: 100%;
  height: auto;
  border-radius: 10px;
  transition: opacity 1s ease-in-out;
}

.carrusel-iframe {
  height: 500px; /* o el que vulguis */
}

.carrusel-btn {
  background-color: #B715A6;
  color: white;
  border: none;
  border-radius: 100%;
  cursor: pointer;
  font-size: 2rem;
  padding: 2px 18px 3px 18px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.carrusel-btn.left {
  left: 10px;
}

.carrusel-btn.right {
  right: 10px;
}
</style>
