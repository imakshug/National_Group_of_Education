let lastScrollTop = 0;

window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    let header = document.getElementById("header");

    if (currentScroll > lastScrollTop) {
        // Scrolling down
        header.classList.remove("navbar-solid");
    } else {
        // Scrolling up or at the top
        header.classList.add("navbar-solid");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Ensure positive scroll value
});

let header = document.getElementById("header");
header.classList.add("navbar-solid");

window.addEventListener('scroll', function() {
  header.classList.add("navbar-solid");
});

// Menu Button 
// function toggleMenu() {
//   var navbar = document.getElementById("navbar");
//   navbar.classList.toggle("menu-open");
// }

// function toggleMenu() {
//   var menuBtn = document.querySelector('.menu-btn');
//   menuBtn.classList.toggle('clicked');
// }

function toggleMenu() {
  var menuBtn = document.querySelector('.menu-btn');
  var navbar = document.getElementById('navbar');
  
  menuBtn.classList.toggle('clicked');
  navbar.classList.toggle('menu-open');
  menuBtn.style.display= menuBtn.style.display === 'flex'  ? 'none' : 'flex';
}

// let menuIcon = document.querySelector('#menu-icon');
// menuIcon.onclick = () => {
//   menuIcon.classList.toggle('bx-x');
//   navbar.classList.toggle('active');
// }


// Logo se home page pr phuchna.................. 
document.getElementById("logoContainer").addEventListener("click", function() {
  window.location.href = "#home";
});

// partners wala....... 
document.addEventListener('DOMContentLoaded', function() {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function(event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});

// about us 
const arrowBtns = document.querySelectorAll('.arrow-btn')
const cardBtns = document.querySelectorAll('.card')
let currentCard = 0;
let dir = 1;
moveCards()

arrowBtns.forEach((btn,i)=>{
  btn.onpointerenter = (e)=> gsap.to(btn, {
    ease:'expo',
    'box-shadow':'0 3px 4px #00000050'
  })
  
  btn.onpointerleave = (e)=> gsap.to(btn, {
    ease:'expo',
    'box-shadow':'0 6px 8px #00000030'
  })
  
  btn.onclick = (e)=> {
    dir = (i==0)? 1:-1
    if (i==0) {
      currentCard--
      currentCard = Math.max(0, currentCard)
    }
    else {
      currentCard++
      currentCard = Math.min(4, currentCard)
    }
    moveCards(0.75)
  }
})

cardBtns.forEach((btn,i)=>{
  btn.onpointerenter = (e)=> gsap.to(btn, {
    ease:'power3',
    overwrite:'auto',
    'box-shadow':()=>(i==currentCard)?'0 6px 11px #00000030':'0 6px 11px #00000030'
  })
  
  btn.onpointerleave = (e)=> gsap.to(btn, {
    ease:'power3',
    overwrite:'auto',
    'box-shadow':()=>(i==currentCard)?'0 6px 11px #00000030':'0 0px 0px #00000030'
  })

  btn.onclick = (e)=> {
    dir = (i<currentCard)? 1:-1
    currentCard = i
    moveCards(0.75)
  }
})



function moveCards(dur=0){
  gsap.timeline({defaults:{ duration:dur, ease:'power3', stagger:{each:-0.03*dir} }})
    .to('.card', {
      x:-270*currentCard,
      y:(i)=>(i==currentCard)?0:15,
      height:(i)=>(i==currentCard)?270:240,
      ease:'elastic.out(0.4)'
    }, 0)
    .to('.card', {
      cursor:(i)=>(i==currentCard)?'default':'pointer',
      'box-shadow':(i)=>(i==currentCard)?'0 6px 11px #00000030':'0 0px 0px #00000030',
      border:(i)=>(i==currentCard)?'2px solid #26a':'0px solid #fff',
      background:(i)=>(i==currentCard)?'radial-gradient(100% 100% at top, #fff 0%, #fff 99%)':'radial-gradient(100% 100% at top, #fff 20%, #eee 175%)',
      ease:'expo'
    }, 0)
    .to('.icon svg', {
      attr:{
        stroke:(i)=>(i==currentCard)?'transparent':'#36a',  
        fill:(i)=>(i==currentCard)?'#36a':'transparent'
      }
    }, 0)
    .to('.arrow-btn-prev', {
      autoAlpha:(currentCard==0)?0:1
    }, 0)
    .to('.arrow-btn-next', {
      autoAlpha:(currentCard==4)?0:1
    }, 0)
    .to('.card h4', {
      y:(i)=>(i==currentCard)?0:8,    
      opacity:(i)=>(i==currentCard)?1:0,
    }, 0)
}


// popup function 
function openPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}

function toggleMenu() {
  var navbar = document.getElementById("navbar");
  navbar.style.display = navbar.style.display === "none" ? "flex" : "none";
}

