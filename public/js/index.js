// Acessibilidade
new window.VLibras.Widget('https://vlibras.gov.br/app');

// responsividade
var itens = document.getElementById('itens');
var burguer = document.getElementById('burguer');
var header = document.querySelector('.header-fixed');

document.addEventListener('click', function (event) {
  if (window.innerWidth <= 576 && !itens.contains(event.target) && event.target !== burguer) {
    itens.style.display = 'none';
  }
});

var linksDoMenu = document.querySelectorAll('#itens a');
linksDoMenu.forEach(function (link) {
  link.addEventListener('click', function (event) {
    if (window.innerWidth <= 576) {
      var targetId = link.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);
      var targetOffset = targetElement.offsetTop;

      window.scrollTo({
        top: targetOffset,
        behavior: 'smooth'
      });

      itens.style.display = 'none';

      event.preventDefault();
    }
  });
});

function clickMenu() {
  if (window.innerWidth <= 576) {
    itens.style.display = (itens.style.display === 'block') ? 'none' : 'block';
  }
}

window.addEventListener('scroll', function () {
  if (window.innerWidth < 576) {
    var scrollPosition = window.scrollY;
    if (scrollPosition > 0) {
      header.style.position = 'fixed';
    } else {
      header.style.position = 'relative';
    }
  } else {
    header.style.position = 'relative';
  }
});

window.addEventListener('resize', function () {
  if (window.innerWidth > 576) {
    itens.style.display = 'block';
  } else {
    itens.style.display = 'none';
  }
});
