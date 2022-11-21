</div>
  
    <script src="assets/js/jquery-3.0.0.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->
    <script src="assets/js/jquery.stellar.min.js"></script>
    <!-- <script src="assets/js/YouTubePopUp.jquery.js"></script> -->
    <script src="assets/js/validator.js"></script>
    <!-- <script src="assets/js/autotype.js"></script> -->
    <script src="assets/js/bootstrap.menu.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.js'></script>
    <script src="assets/js/section-scroll.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <script>
        // Scroll Section

    animejsPlugins.scrollContainer({
        sectionSelector: '.section',
        wrapperSelector: '.sections',
        duration: 1000,
        easing: 'easeInOutQuad',
        onBegin: (index, anime) => {
          disappear()
        },
        onComplete: (index, anime) => {
          appear(index);
        } 
      })
      
      function appear(index) {
        anime({
        //   targets: `.section:nth-child(${index}) container`,
          opacity: [0, 1],
          duration: anime.random(300, 600),
          easing: 'easeInOutQuad'
        })
      }
      
      function disappear() {
        anime({
          targets: `container`,
          opacity: [1, 0],
          duration: anime.random(200, 400),
          easing: 'easeInOutQuad'
        })
      }

    </script>

    

</body>
</html>