 let currentIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    function showSlide(index) {
      if (index < 0) {
        index = totalSlides - 1;
      } else if (index >= totalSlides) {
        index = 0;
      }

      currentIndex = index;

      const offset = -currentIndex * 100;
      document.querySelector('.carousel-container').style.transform = `translateX(${offset}%)`;
    }

    function prevSlide() {
      showSlide(currentIndex - 1);
    }

    function nextSlide() {
      showSlide(currentIndex + 1);
    }

    // Auto slide change (optional)
    setInterval(() => {
      nextSlide();
    }, 5000); // Change slide every 5 seco