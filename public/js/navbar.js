var itens = document.getElementById('itens');
var burguer = document.getElementById('burguer');
var header = document.querySelector('.header-fixed');

// Função para ocultar o menu se estiver fechado ao carregar a página
function hideMenuIfClosed() {
    if (window.innerWidth <= 576) {
        if (itens.style.display !== 'block') {
            itens.style.display = 'none';
        }
    }
}

document.addEventListener('DOMContentLoaded', hideMenuIfClosed);

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

///////////////////////////////////////////////////

function fixHeaderPosition() {
    var header = document.querySelector('.header-fixed');

    if (window.innerWidth < 576) {
        var scrollPosition = window.scrollY;
        if (scrollPosition > 0) {
            header.style.position = 'relative';
        } else {
            header.style.position = 'relative';
        }
    } else {
        header.style.position = 'relative';
    }
}

window.addEventListener('scroll', fixHeaderPosition);
window.addEventListener('resize', fixHeaderPosition);

// Chama a função ao carregar a página para garantir que o conteúdo do cabeçalho seja exibido corretamente
window.addEventListener('load', fixHeaderPosition);

///////////////////////////////////////////////////

window.addEventListener('resize', function () {
    if (window.innerWidth > 576) {
        itens.style.display = 'block';
    } else {
        itens.style.display = 'none';
    }
});
