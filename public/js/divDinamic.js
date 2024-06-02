(function () {
    let l1 = document.querySelector('#semestre1');
    let l2 = document.querySelector('#semestre2');
    let l3 = document.querySelector('#semestre3');
    let l4 = document.querySelector('#semestre4');
    let l5 = document.querySelector('#semestre5');
    let l6 = document.querySelector('#semestre6');

    l1.addEventListener('click', function () {
        document.querySelector('#table1').classList.remove('hidden');
        document.querySelector('#table2').classList.add('hidden');
        document.querySelector('#table3').classList.add('hidden');
        document.querySelector('#table4').classList.add('hidden');
        document.querySelector('#table5').classList.add('hidden');
        document.querySelector('#table6').classList.add('hidden');
    });

    l2.addEventListener('click', function () {
        document.querySelector('#table1').classList.add('hidden');
        document.querySelector('#table2').classList.remove('hidden');
        document.querySelector('#table3').classList.add('hidden');
        document.querySelector('#table4').classList.add('hidden');
        document.querySelector('#table5').classList.add('hidden');
        document.querySelector('#table6').classList.add('hidden');
    });

    l3.addEventListener('click', function () {
        document.querySelector('#table1').classList.add('hidden');
        document.querySelector('#table2').classList.add('hidden');
        document.querySelector('#table3').classList.remove('hidden');
        document.querySelector('#table4').classList.add('hidden');
        document.querySelector('#table5').classList.add('hidden');
        document.querySelector('#table6').classList.add('hidden');
    });

    l4.addEventListener('click', function () {
        document.querySelector('#table1').classList.add('hidden');
        document.querySelector('#table2').classList.add('hidden');
        document.querySelector('#table3').classList.add('hidden');
        document.querySelector('#table4').classList.remove('hidden');
        document.querySelector('#table5').classList.add('hidden');
        document.querySelector('#table6').classList.add('hidden');
    });

    l5.addEventListener('click', function () {
        document.querySelector('#table1').classList.add('hidden');
        document.querySelector('#table2').classList.add('hidden');
        document.querySelector('#table3').classList.add('hidden');
        document.querySelector('#table4').classList.add('hidden');
        document.querySelector('#table5').classList.remove('hidden');
        document.querySelector('#table6').classList.add('hidden');
    });

    l6.addEventListener('click', function () {
        document.querySelector('#table1').classList.add('hidden');
        document.querySelector('#table2').classList.add('hidden');
        document.querySelector('#table3').classList.add('hidden');
        document.querySelector('#table4').classList.add('hidden');
        document.querySelector('#table5').classList.add('hidden');
        document.querySelector('#table6').classList.remove('hidden');
    });
})();