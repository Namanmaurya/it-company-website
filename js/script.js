// Counter Animation
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter-stat");
  const counterSection = document.querySelector(".section.counter");
  const speed = 2000;
  let animated = false;
  function countUp(element) {
    const target = +element.textContent;
    let count = 0;
    const increment = target / (speed / 50);

    const interval = setInterval(() => {
      count += increment;
      if (count >= target) {
        clearInterval(interval);
        element.textContent = target;
      } else {
        element.textContent = Math.floor(count);
      }
    }, 50);
  }

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
  }

  function triggerCounter() {
    if (!animated && isInViewport(counterSection)) {
      counters.forEach((counter) => countUp(counter));
      animated = true;
    }
  }

  window.addEventListener("scroll", triggerCounter);
  triggerCounter();
});

// testomonial

document.addEventListener("DOMContentLoaded", () => {
  const testimonials = document.querySelectorAll(".testimonial-card");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");
  let currentIndex = 0;

  const showSlide = (index) => {
    testimonials.forEach((testimonial, i) => {
      testimonial.classList.remove("active");
      if (i === index) {
        testimonial.classList.add("active");
      }
    });
  };

  const nextSlide = () => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    showSlide(currentIndex);
  };

  const prevSlide = () => {
    currentIndex =
      (currentIndex - 1 + testimonials.length) % testimonials.length;
    showSlide(currentIndex);
  };

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  setInterval(nextSlide, 5000);

  showSlide(currentIndex);
});

// scrollar

window.onscroll = function () {
  const btn = document.getElementById("scrollTopBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 55) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// scroll animation

document.addEventListener("DOMContentLoaded", () => {
  const scrollElements = document.querySelectorAll(".scroll-fade-up");

  const elementInView = (el, offset = 100) => {
    const elementTop = el.getBoundingClientRect().top;
    return elementTop <= window.innerHeight - offset;
  };

  const displayScrollElement = (element) => {
    element.classList.add("active");
  };

  const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
      if (elementInView(el)) {
        displayScrollElement(el);
      }
    });
  };

  window.addEventListener("scroll", handleScrollAnimation);
  handleScrollAnimation(); 
});
