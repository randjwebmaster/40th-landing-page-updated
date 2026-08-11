(function () {
  var section = document.querySelector('.era-scroll');
  if (!section) return;
  var panels = [].slice.call(section.querySelectorAll('.era-panel'));
  var rail   = section.querySelector('.era-rail');
  var btns   = rail ? [].slice.call(rail.querySelectorAll('button')) : [];

  if (!('IntersectionObserver' in window)) {
    panels.forEach(function (p) { p.classList.add('in'); });
    return;
  }

  var revealIO = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.32 });
  panels.forEach(function (p) { revealIO.observe(p); });

  var activeIO = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        var i = panels.indexOf(e.target);
        btns.forEach(function (b, bi) { b.classList.toggle('active', bi === i); });
      }
    });
  }, { threshold: 0.5 });
  panels.forEach(function (p) { activeIO.observe(p); });

  var sectionIO = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (rail) rail.classList.toggle('show', e.isIntersecting && e.intersectionRatio > 0.04);
    });
  }, { threshold: [0, 0.04, 0.1] });
  sectionIO.observe(section);

  btns.forEach(function (b, i) {
    b.addEventListener('click', function () {
      var p = panels[i];
      if (!p) return;
      var y = p.getBoundingClientRect().top + window.pageYOffset;
      window.scrollTo({ top: y, behavior: 'smooth' });
    });
  });
})();
