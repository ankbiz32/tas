// Initialize WOW animation 
new WOW().init();


// Hamburger animation & sidebar menu slider
let burger = document.querySelector('.hamburger');
let list = document.querySelector('.menu');
let upperLine = document.querySelector('.ham-line1');
let midLine = document.querySelector('.ham-line2');
let lowerLine = document.querySelector('.ham-line3');
let close = document.querySelector('.close-menu');

burger.addEventListener('click', () =>{        
        list.classList.toggle('slide');
        upperLine.classList.toggle('upanim');
        midLine.classList.toggle('midanim');
        lowerLine.classList.toggle('downanim');
        close.classList.toggle('is-open');
    });
close.addEventListener('click', () =>{        
        list.classList.remove('slide');
        upperLine.classList.toggle('upanim');
        midLine.classList.toggle('midanim');
        lowerLine.classList.toggle('downanim');
        close.classList.remove('is-open');
    });


// Product list dropdown
let plink = document.querySelector('.prod-link');
let plist = document.querySelector('.prod-list');
plink.addEventListener('mouseover', function(event) {
  plist.classList.add('show-prod');
});

plink.addEventListener('mouseleave', function(event) {
  if (!plist.contains(event.relatedTarget)){
    plist.classList.remove('show-prod');
  }
});
plist.addEventListener('mouseleave', function(event) {
  if (!plink.contains(event.relatedTarget)){
    plist.classList.remove('show-prod');
  }
});


// Service list dropdown
let slink = document.querySelector('.serv-link');
let slist = document.querySelector('.serv-list');
slink.addEventListener('mouseover', function(event) {
  slist.classList.add('show-serv');
});

slink.addEventListener('mouseleave', function(event) {
  if (!slist.contains(event.relatedTarget)){
    slist.classList.remove('show-serv');
  }
});
slist.addEventListener('mouseleave', function(event) {
  if (!slink.contains(event.relatedTarget)){
    slist.classList.remove('show-serv');
  }
});


// Modal
var modal = document.getElementById("regModal");
var pmodal = document.getElementById("pRegModal");
var span = document.getElementsByClassName("closeModal")[0];
var span2 = document.getElementsByClassName("closeModal")[1];

function showModal() {
  modal.style.display = "block";
}
function showPModal() {
  pmodal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
span2.onclick = function() {
  pmodal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal || event.target == pmodal) {
    modal.style.display = "none";
    pmodal.style.display = "none";
  }
}


// Solutions Tabs
function openSolution(evt, solutionName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(solutionName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
if(document.getElementById("defaultOpen")){
  document.getElementById("defaultOpen").click();
}



// intersection observer for Counter animation
let count = document.querySelector('.counts');
if(count){
  let observer = new IntersectionObserver((entries, observer) =>{
    entries.forEach(entry =>{
      if(entry.isIntersecting){
        counter_animate();
      }
    });
  },{threshold:0.45});
  observer.observe(count);
  function counter_animate(){
    const counters = document.querySelectorAll('.counter');
    const speed = 150; // The greater the slower

    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        // Lower inc to slow and higher to slow
        const inc = Math.ceil(target / speed);

        // console.log(inc);
        // console.log(count);

        // Check if target is reached
        if (count < target) {
          // Add inc to count and output in counter
          counter.innerText = count + inc;
          // Call function every ms
          setTimeout(updateCount, 1);
        } else {
          counter.innerText = target+ '+';
        }
      };

      updateCount();
    });
  }
}

