
// Criando os botões de semestre do curso
function optDsm(option){
    // criando o conteúdo dos botões
    var optionsDsm = `<button class='s1' type='submit'>1° Semestre</button>
                      <button class='s2' type='submit'>2° Semestre</button>`
    // Inserindo os botões no botão criado
    if(option == 1)
    {
        document.querySelector('.botoes').innerHTML = optionsDsm;
    };
}
// Botões Sistema Navais
function optSn(option){
    var optionsSn =`
    <button class='s1' type='submit'>1° Semestre</button>
    <button class='s2' type='submit'>2° Semestre</button>
    <button class='s3' type='submit'>3° Semestre</button>
    <button class='s4' type='submit'>4° Semestre</button>
    <button class='s5' type='submit'>5° Semestre</button>
    <button class='s6' type='submit'>6° Semestre</button>`

    if(option == 2){
        document.querySelector('.botoes').innerHTML = optionsSn;
    }
}

//Botões Construção naval
function optCn(){

    var optionsCn =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsCn;
}
// Botões gestão da produção industrial
function optGpi(){
    var optionsSi =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsSi;
}
// Botões sistema para internet
function optSi(){
    var optionsSi =`<button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsSi;
}
// Botões gestão da tecnologia da informação
function optGti(){
    var optionsGti =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsGti;
}
//Botões meio ambiente e recursos hídricos
function optMr(){
    var optionsMr =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsMr;
}
//Botões logística
function optLog(){
    var optionsLog =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsLog;
}
function redirectToPage(select) {
    var selectedOption = select.options[select.selectedIndex];
    // recebendo id do curso
    var courseId = selectedOption.value;

    if(courseId == 1){
        optDsm(courseId);
        sem_dsm();
    }else if(courseId == 2){
        optSn(courseId);
        sem_sn();
    }else if(courseId == 3){
        optCn();
    }else if(courseId == 4){
        optGpi();
    }else if(courseId == 5){
        return alert('Curso modalidade EAD');
    }else if(courseId == 6){
        optMr();
    }else if(courseId == 7){
        optSi();
    }else if(courseId == 8){
        optGti();
    }else if(courseId == 9){
        optLog();
    }else(alert('Opção inválida!'))

}
// HORARIOS DSM
function sem_dsm(){
    const buttonS1 = document.querySelector('.s1');
    const buttonS2 = document.querySelector('.s2');
    const section1 = document.getElementById('section_1');
    const section2 = document.getElementById('section_2');

    if(buttonS1.addEventListener('click', () =>{
        if (section1.style.display === 'none') {
            section1.style.display = 'block';
            section2.style.display = 'none';

            // Clone the DSM1 template content into section1
            const template1 = document.getElementById('dsm_1').content.cloneNode(true);
            section1.innerHTML = '';  // Clear any previous content
            section1.appendChild(template1);
    }}));

    if(buttonS2.addEventListener('click', () => {
        if (section2.style.display === 'none') {
            section2.style.display = 'block';
            section1.style.display = 'none';

            // Clone the DSM2 template content into section2
            const template2 = document.getElementById('dsm_2').content.cloneNode(true);
            section2.innerHTML = '';  // Clear any previous content
            section2.appendChild(template2);
    }}));
}

// HORARIOS DSM
function sem_sn(){
    const buttonSn1 = document.querySelector('.s1');
    const buttonS2 = document.querySelector('.s2');
    const buttonS3 = document.querySelector('.s3');
    const buttonS4 = document.querySelector('.s4');
    const buttonS5 = document.querySelector('.s5');
    const buttonS6 = document.querySelector('.s6');
    const sectionSn1 = document.getElementById('section_1');
    const sectionSn2 = document.getElementById('section_2');

    if(buttonSn1.addEventListener('click', () =>{
        if (sectionSn1.style.display === 'none') {
            sectionSn1.style.display = 'block';
            sectionSn2.style.display = 'none';

            // Clone the DSM1 template content into section1
            const templateSn1 = document.getElementById('sn_1').content.cloneNode(true);
            sectionSn1.innerHTML = '';  // Clear any previous content
            sectionSn1.appendChild(templateSn1);
    }}));

}


