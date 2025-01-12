document.addEventListener('livewire:navigated', () => {

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
