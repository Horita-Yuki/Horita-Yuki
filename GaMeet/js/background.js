'use strict';

particlesJS("particles-js", {
  particles: {
    number: { value: 7, density: { enable: false, value_area: 0 } },
    color: { value: "#1f1d36" },
    shape: {
      type: "edge",
      stroke: { width: 1, color: "#000000" },
      polygon: { nb_sides: 3 },
      image: { src: "../images/square.svg", width: 100, height: 100 },
    },
    opacity: {
      value: 1,
      random: true,
      anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false },
    },
    size: {
      value: 150,
      random: true,
      anim: { enable: false, speed: 40, size_min: 0.1, sync: false },
    },
    line_linked: {
      enable: false,
      distance: 0,
      color: "#000000",
      opacity: 0,
      width: 0,
    },
    move: {
      enable: true,
      speed: 3,
      direction: "none",
      random: true,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: { enable: false, rotateX: 0, rotateY: 0 },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: false, mode: "repulse" },
      onclick: { enable: false, mode: "push" },
      resize: true,
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 1 } },
      bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
      repulse: { distance: 200, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 },
    },
  },
  retina_detect: true,
});

// var ScreenHeight = document.getElementById('index').scrollHeight;
// var ScreenWidth = ScreenHeight * 4;
// $(function(){
//   $('#particles-js').css({
//     'height':`${ScreenHeight}px`,
//     // 'width':`${ScreenWidth}px`
//   });
//     $('canvas').css({
//       'height':`${ScreenHeight}px`,
//       // 'width':`${ScreenWidth}px`
//     });
// });