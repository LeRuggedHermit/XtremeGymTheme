 <!--Sidfot: -->
 <footer>
      <small>&#169; Simon Brandtman - 2024</small>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", (event) => {
        gsap.registerPlugin(
          Flip,
          ScrollTrigger,
          Observer,
          ScrollToPlugin,
          Draggable,
          MotionPathPlugin,
          EaselPlugin,
          PixiPlugin,
          TextPlugin,
          RoughEase,
          ExpoScaleEase,
          SlowMo,
          CustomEase
        );
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
