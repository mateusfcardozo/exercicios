
function hover(element) {
    element.style.backgroundColor = '#fff';
  }
  
  function unhover(element) {
    element.style.backgroundColor = '#ccc';
  }
  
  document.querySelectorAll('.sidebar ul li a').forEach(function(element) {
    element.addEventListener('mouseenter', hover);
    element.addEventListener('mouseleave', unhover);
  });
  