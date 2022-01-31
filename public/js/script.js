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
    if(check()){
        for (const key in info) {
            console.warn(document.getElementById(key));
            if(key != 'size'){
                document.getElementById(key).value = info[key];
                if(key == 'address'){
                    document.getElementById('detail-address').innerHTML = info[key] +','+ info['city'] +','+ info['zip'] +' '+ info['state'];
                }else if(key == 'prize'){
                    document.getElementById('detail-prize').innerHTML = info[key];
                    document.getElementById('detail-total').innerHTML = info[key];
                }
            }else{
                document.getElementById('detail-size').innerHTML = info[key];
            }
        }
        document.getElementById('second-half').style.visibility = 'visible';
        document.getElementById('info').style.transform = 'translateX(-50%)';
    }
    
});
document.getElementById('back').addEventListener('click', function() {
    document.getElementById('second-half').style.visibility = 'hidden';
    document.getElementById('info').style.transform = 'translateX(0)';
    document.getElementById('info').classList.re;
    
});

//// Functions
function onClick(event, size, prize) {
    info.size = size;
    info.prize = prize;
    for (const value of document.querySelectorAll(".box-size.active")) {
        value.classList.remove("active")
    }
    event.target.classList.add("active");
}
var info = {
    firstname: null,
    lastname: null,
    email: null,
    address: null,
    contact: null,
    city: null,
    zip: null,
    state: null,
    size: 4,
    prize: 1800,
};
function onChange(event, type) {
    info[type] =  event.target.value;
}
function check() {
    console.warn(info);
    for (const index in info) {
        if(!info[index] && index != 'prize'){
            M.toast({html: index.toUpperCase() + ' Missing Please Fill In'})
            return false
        }
    }
    return true
}
