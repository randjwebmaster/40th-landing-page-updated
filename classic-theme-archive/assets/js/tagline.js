(function () {
  var tag = document.querySelector('.logo-tagline');
  if (!tag) return;

  tag.style.setProperty('--rev', '0deg');

  var FULL = 150;
  var STEPS = 27;
  var STEP_MS = 95;
  var timer = null;

  function play() {
    if (timer) clearInterval(timer);
    var s = 0;
    tag.style.setProperty('--rev', '0deg');
    timer = setInterval(function () {
      s++;
      tag.style.setProperty('--rev', (FULL * s / STEPS) + 'deg');
      if (s >= STEPS) {
        clearInterval(timer);
        timer = null;
        tag.style.setProperty('--rev', FULL + 'deg');
      }
    }, STEP_MS);
  }

  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) setTimeout(play, 400); });
    }, { threshold: 0.5 });
    io.observe(tag);
  } else {
    setTimeout(play, 400);
  }
})();
