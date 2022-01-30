document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {indicators:true, duration:100});
    setInterval(function() {
        instances[0].next();
      }, 2000);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.getElementById('product').addEventListener('click', function() {
    window.scroll({
        top: 1000,
        left: 0,
        behavior: 'smooth'
      });
});
document.getElementById('top1').addEventListener('click', function() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
});
document.getElementById('checkout').addEventListener('click', function() {
    document.getElementById('info').style.transform = 'translateX(-50%)';
});