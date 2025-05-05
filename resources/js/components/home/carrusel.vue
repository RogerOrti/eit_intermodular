<template>
  <div class="carrusel">
    <!-- Botón para retroceder -->
    <button @click="prevSlide" class="carrusel-btn left">‹</button>

    <!-- Contenedor de la imagen actual -->
    <div class="carrusel-div">
      <img :src="slides[currentIndex].image" :alt="slides[currentIndex].title" class="carrusel-img" />
    </div>

    <!-- Botón para avanzar -->
    <button @click="nextSlide" class="carrusel-btn right">›</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slides: [
        { id: 1, image: 'media/eventoPrincipal.png', title: 'Slide 1' },
        { id: 2, image: 'media/evento.png', title: 'Slide 2' },
        { id: 3, image: 'media/evento.png', title: 'Slide 3' },
      ],
      currentIndex: 0, // Índice de la diapositiva actual
    };
  },
  methods: {
    nextSlide() {
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
    },
    prevSlide() {
      this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
    },
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

.carrusel-img {
  width: 100%;
  height: auto;
  border-radius: 10px;
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