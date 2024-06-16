// GARANTINDO QUE O CONTEÚDO ESTEJA CARREGANDO ANTES DO SCRIPT TRABALHAR
document.addEventListener('DOMContentLoaded', (event) => {
    //CRIANDO OS BOTÕES DE DSM
    function optDsm(option) {
        var optionsDsm = `<button class='dsm-s1' type='button'>1° Semestre</button>
                          <button class='dsm-s2' type='button'>2° Semestre</button>`;
        if (option == 1) {
            // INSERE OS BOTÕES DE DSM
            document.querySelector('.botoes').innerHTML = optionsDsm;
            // ADICIONA OUVINTES DE EVENTO AOS BOTÕES DSM
            addDsmListeners();
        }
    }
    // CRIANDO OS BOTÕES DE SN
    function optSn(option) {
        // CRIANDO OS BOTÕES DE SN
        var optionsSn = `<button class='sn-s1' type='button'>1° Semestre</button>
                         <button class='sn-s2' type='button'>2° Semestre</button>
                         <button class='sn-s3' type='button'>3° Semestre</button>
                         <button class='sn-s4' type='button'>4° Semestre</button>
                         <button class='sn-s5' type='button'>5° Semestre</button>
                         <button class='sn-s6' type='button'>6° Semestre</button>`;
        if (option == 2) {
            // INSERE OS BOTÕES DE SN NO HTML
            document.querySelector('.botoes').innerHTML = optionsSn;
            // ADICIONANDO OUVINTES PARA GARANTIR QUE O BOTÃO CORRETO SEJA ACIONADO
            addSnListeners();
        }
    }

    // CONSTRUÇÃO NAVAL
    function optCn(option) {
        // CRIANDO OS BOTÕES
        var optionsCn = `<button class='cn-s1' type='button'>1° Semestre</button>
                             <button class='cn-s2' type='button'>2° Semestre</button>
                             <button class='cn-s3' type='button'>3° Semestre</button>
                             <button class='cn-s4' type='button'>4° Semestre</button>
                             <button class='cn-s5' type='button'>5° Semestre</button>
                             <button class='cn-s6' type='button'>6° Semestre</button>`;
        // INSERE OS BOTÕES NO HTML
        if(option == 3){
            document.querySelector('.botoes').innerHTML = optionsCn;
        // Adicione event listeners se necessário
            addCnListeners();
        }
    }

    // GESTÃO DA PRODUÇÃO INDUSTRIAL
    function optGpi(option){
         // CRIANDO OS BOTÕES
         var optionsGp = `<button class='gp-s1' type='button'>1° Semestre</button>
         <button class='gp-s2' type='button'>2° Semestre</button>
         <button class='gp-s3' type='button'>3° Semestre</button>
         <button class='gp-s4' type='button'>4° Semestre</button>
         <button class='gp-s5' type='button'>5° Semestre</button>
         <button class='gp-s6' type='button'>6° Semestre</button>`;

         if(option == 4){
            document.querySelector('.botoes').innerHTML = optionsGp;
            addGpListeners();
         }
    }

    function optMa(option){
        var optionsMa = `
            <button class='ma-s1' type='button'>1° Semestre</button>
            <button class='ma-s2' type='button'>2° Semestre</button>
            <button class='ma-s3' type='button'>3° Semestre</button>
            <button class='ma-s4' type='button'>4° Semestre</button>
            <button class='ma-s5' type='button'>5° Semestre</button>
            <button class='ma-s6' type='button'>6° Semestre</button>`;

        if(option == 6){
            document.querySelector('.botoes').innerHTML = optionsMa;
            addMaListeners();
        }
    }
    // FUNÇÃO PARA ADICIONAR OUVINTES DE EVENTO AOS BOTÕES DSM
    function addDsmListeners() {
        const buttonS1 = document.querySelector('.dsm-s1');
        const buttonS2 = document.querySelector('.dsm-s2');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonS1.addEventListener('click', () => displayContent('dsm', 1));
        buttonS2.addEventListener('click', () => displayContent('dsm', 2));
    }

    // FUNÇÃO PARA ADICIONAR OUVINTES DE EVENTO AOS BOTÕES DE SN
    function addSnListeners() {
        const buttonSn1 = document.querySelector('.sn-s1');
        const buttonSn2 = document.querySelector('.sn-s2');
        const buttonSn3 = document.querySelector('.sn-s3');
        const buttonSn4 = document.querySelector('.sn-s4');
        const buttonSn5 = document.querySelector('.sn-s5');
        const buttonSn6 = document.querySelector('.sn-s6');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonSn1.addEventListener('click', () => displayContent('sn', 1));
        buttonSn2.addEventListener('click', () => displayContent('sn', 2));
        buttonSn3.addEventListener('click', () => displayContent('sn', 3));
        buttonSn4.addEventListener('click', () => displayContent('sn', 4));
        buttonSn5.addEventListener('click', () => displayContent('sn', 5));
        buttonSn6.addEventListener('click', () => displayContent('sn', 6));
    }

    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE CN
    function addCnListeners() {
        const buttonCn1 = document.querySelector('.cn-s1');
        const buttonCn2 = document.querySelector('.cn-s2');
        const buttonCn3 = document.querySelector('.cn-s3');
        const buttonCn4 = document.querySelector('.cn-s4');
        const buttonCn5 = document.querySelector('.cn-s5');
        const buttonCn6 = document.querySelector('.cn-s6');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonCn1.addEventListener('click', () => displayContent('cn', 1));
        buttonCn2.addEventListener('click', () => displayContent('cn', 2));
        buttonCn3.addEventListener('click', () => displayContent('cn', 3));
        buttonCn4.addEventListener('click', () => displayContent('cn', 4));
        buttonCn5.addEventListener('click', () => displayContent('cn', 5));
        buttonCn6.addEventListener('click', () => displayContent('cn', 6));
    }

    // FUNÇÃO PARA ADICIONAR OUVINTES AOS BOTÕES DE GPI
    function addGpListeners() {
        const buttonGp1 = document.querySelector('.gp-s1');
        const buttonGp2 = document.querySelector('.gp-s2');
        const buttonGp3 = document.querySelector('.gp-s3');
        const buttonGp4 = document.querySelector('.gp-s4');
        const buttonGp5 = document.querySelector('.gp-s5');
        const buttonGp6 = document.querySelector('.gp-s6');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonGp1.addEventListener('click', () => displayContent('gp', 1));
        buttonGp2.addEventListener('click', () => displayContent('gp', 2));
        buttonGp3.addEventListener('click', () => displayContent('gp', 3));
        buttonGp4.addEventListener('click', () => displayContent('gp', 4));
        buttonGp5.addEventListener('click', () => displayContent('gp', 5));
        buttonGp6.addEventListener('click', () => displayContent('gp', 6));
    }

    function addMaListeners() {
        const buttonMa1 = document.querySelector('.ma-s1');
        const buttonMa2 = document.querySelector('.ma-s2');
        const buttonMa3 = document.querySelector('.ma-s3');
        const buttonMa4 = document.querySelector('.ma-s4');
        const buttonMa5 = document.querySelector('.ma-s5');
        const buttonMa6 = document.querySelector('.ma-s6');
        // ADICIONANDO OUVINTES DE CLICK AOS BOTÕES DE DSM
        buttonMa1.addEventListener('click', () => displayContent('ma', 1));
        buttonMa2.addEventListener('click', () => displayContent('ma', 2));
        buttonMa3.addEventListener('click', () => displayContent('ma', 3));
        buttonMa4.addEventListener('click', () => displayContent('ma', 4));
        buttonMa5.addEventListener('click', () => displayContent('ma', 5));
        buttonMa6.addEventListener('click', () => displayContent('ma', 6));
    }

    // FUNÇÃO PARA EXIBIR O CONTEÚDO DO SEMESTRE
    function displayContent(course, semester) {
        const section1 = document.getElementById('section_1');
        const section2 = document.getElementById('section_2');
        const section3 = document.getElementById('section_3');
        const section4 = document.getElementById('section_4');
        const section5 = document.getElementById('section_5');
        const section6 = document.getElementById('section_6');

        // ESCONDE AS SEÇÕES INICIALMENTE
        section1.style.display = 'none';
        section2.style.display = 'none';
        section3.style.display = 'none';
        section4.style.display = 'none';
        section5.style.display = 'none';
        section6.style.display = 'none';

        // EXIBE E CARREGA O CONTEÚDO CORRESPONDENTE DO CURSO PARA CADA SEMESTRE
            //DSM 1 SEMESTRE
        if (course === 'dsm' && semester === 1) {
            section1.style.display = 'block';
            const template = document.getElementById('dsm_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            // muda a altura da main para auto
            ajustarAltura();
            // DSM 2 SEMESTRE
        } else if (course === 'dsm' && semester === 2) {
            section2.style.display = 'block';
            const template = document.getElementById('dsm_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // SN 1 SEMESTRE
        } else if (course === 'sn' && semester === 1) {
            section1.style.display = 'block';
            const template = document.getElementById('sn_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // SN 2 SEMESTRE
        }else if (course === 'sn' && semester === 2) {
            section2.style = 'block';
            const template = document.getElementById('sn_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // SN 3 SEMESTRE
        }else if (course === 'sn' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('sn_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // SN 4 SEMESTRE
        }else if (course === 'sn' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('sn_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // SN 5 SEMESTRE
        }else if (course === 'sn' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('sn_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // SN 6 SEMESTRE
        }else if (course === 'sn' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('sn_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
            // CN 1 SEMESTRE
        }else if (course === 'cn' && semester === 1){
            section1.style = 'block';
            const template = document.getElementById('cn_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // CN 2 SEMESTRE
        }else if (course === 'cn' && semester === 2){
            section2.style = 'block';
            const template = document.getElementById('cn_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // CN 3 SEMESTRE
        }else if (course === 'cn' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('cn_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // CN 4 SEMESTRE
        }else if (course === 'cn' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('cn_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // CN 5 SEMESTRE
        }else if (course === 'cn' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('cn_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // CN 6 SEMESTRE
        }else if (course === 'cn' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('cn_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
            // GPI 1 SEMESTRE
        }else if (course === 'gp' && semester === 1){
            section1.style = 'block';
            const template = document.getElementById('gp_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // GPI 2 SEMESTRE
        }else if (course === 'gp' && semester === 2){
            section2.style = 'block';
            const template = document.getElementById('gp_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // GPI 3 SEMESTRE
        }else if (course === 'gp' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('gp_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // GPI 4 SEMESTRE
        }else if (course === 'gp' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('gp_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // GPI 5 SEMESTRE
        }else if (course === 'gp' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('gp_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // GPI 6 SEMESTRE
        }else if (course === 'gp' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('gp_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
            // MA 1 SEMESTRE
        }else if (course === 'ma' && semester === 1){
            section1.style = 'block';
            const template = document.getElementById('ma_1').content.cloneNode(true);
            section1.innerHTML = '';
            section1.appendChild(template);
            ajustarAltura();
            // MA 2 SEMESTRE
        }else if (course === 'ma' && semester === 2){
            section2.style = 'block';
            const template = document.getElementById('ma_2').content.cloneNode(true);
            section2.innerHTML = '';
            section2.appendChild(template);
            ajustarAltura();
            // MA 3 SEMESTRE
        }else if (course === 'ma' && semester === 3){
            section3.style = 'block';
            const template = document.getElementById('ma_3').content.cloneNode(true);
            section3.innerHTML = '';
            section3.appendChild(template);
            ajustarAltura();
            // MA 4 SEMESTRE
        }else if (course === 'ma' && semester === 4){
            section4.style = 'block';
            const template = document.getElementById('ma_4').content.cloneNode(true);
            section4.innerHTML = '';
            section4.appendChild(template);
            ajustarAltura();
            // MA 5 SEMESTRE
        }else if (course === 'ma' && semester === 5){
            section5.style = 'block';
            const template = document.getElementById('ma_5').content.cloneNode(true);
            section5.innerHTML = '';
            section5.appendChild(template);
            ajustarAltura();
            // MA 6 SEMESTRE
        }else if (course === 'ma' && semester === 6){
            section6.style = 'block';
            const template = document.getElementById('ma_6').content.cloneNode(true);
            section6.innerHTML = '';
            section6.appendChild(template);
            ajustarAltura();
        }

        // Adicione lógica para outros semestres e cursos aqui conforme necessário
    }
    // FUNÇÃO PARA MUDAR ALTURA
    const mainEl = document.getElementById('main-container');
    function ajustarAltura(){
    mainEl.style.height = 'auto';
    }

    // FUNÇÃO PARA REDIRECIONAR PARA A PÁGINA DO CURSO SELECIONADO
    function redirectToPage(select) {
        var selectedOption = select.options[select.selectedIndex];
        var courseId = selectedOption.value;
        // VERIFICA O ID DO CURSO SELECIONADO E CHAMA A FUNÇÃO CORRESPONDETE
        if (courseId == 1) {
            optDsm(courseId);
        } else if (courseId == 2) {
            optSn(courseId);
        } else if (courseId == 3) {
            optCn(courseId);
        } else if (courseId == 4) {
            optGpi(courseId);
        } else if (courseId == 5) {
            alert('Curso modalidade EAD');
        } else if (courseId == 6) {
            optMa(courseId);
        } else if (courseId == 7) {
            optSi();
        } else if (courseId == 8) {
            optGti();
        } else if (courseId == 9) {
            optLog();
        } else {
            alert('Opção inválida!');
        }
    }

    // EXPORTAR A FUNÇÃO REDIRECT PARA QUE ELA POSSA SER USADA
    window.redirectToPage = redirectToPage;
    // Adicione outras funções de opt conforme necessário, semelhante ao optCn
});
