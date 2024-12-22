import AOS from 'aos';
import 'aos/dist/aos.css';
document.addEventListener('livewire:navigated', () => {
    AOS.init();

  // المان‌هایی که قرار است انیمیشن روی آن‌ها اعمال شود
  const elements = document.querySelectorAll(".fade-up");

  // تعریف Intersection Observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // اضافه کردن کلاس 'visible' زمانی که المان به viewport وارد می‌شود
        entry.target.classList.add("visible");
      } else {
        // در صورت نیاز کلاس را حذف کنید زمانی که المان از viewport خارج می‌شود
        entry.target.classList.remove("visible");
      }
    });
  });

  // نظارت بر هر المان
  elements.forEach(el => observer.observe(el));





    const backToTopButton = document.getElementById('backToTop');
    // نظارت بر حرکت اسکرول صفحه
    window.addEventListener('scroll', function() {
      if (window.scrollY > 200) {
        backToTopButton.classList.add("visible");
          backToTopButton.classList.remove("invisible");
      } else {
        backToTopButton.classList.remove("visible");
          backToTopButton.classList.add("invisible");
      }
    });

    // اسکرول به بالای صفحه با حرکت نرم
    backToTopButton.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
})
