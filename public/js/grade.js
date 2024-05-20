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
function optGpi(){
    var optionsSi =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsSi;
}
function optSn(){
    var optionsSn =`<button class='s1' type='submit'>1° Semestre</button>
    <button class='s2' type='submit'>2° Semestre</button>
    <button class='s3' type='submit'>3° Semestre</button>
    <button class='s4' type='submit'>4° Semestre</button>
    <button class='s5' type='submit'>5° Semestre</button>
    <button class='s6' type='submit'>6° Semestre</button>`

    document.querySelector('.botoes').innerHTML = optionsSn;
}
function optCn(){

    var optionsCn =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsCn;
}
function optSi(){
    var optionsSi =`<button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsSi;
}
function optGti(){
    var optionsGti =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsGti;
}
function optMr(){
    var optionsMr =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsMr;
}
function optLog(){
    var optionsLog =`<button class='s1' type='submit'>1° Semestre</button>
                    <button class='s2' type='submit'>2° Semestre</button>
                    <button class='s3' type='submit'>3° Semestre</button>
                    <button class='s4' type='submit'>4° Semestre</button>
                    <button class='s5' type='submit'>5° Semestre</button>
                    <button class='s6' type='submit'>6° Semestre</button>`
    document.querySelector('.botoes').innerHTML = optionsLog;
}

function semestre(){
    const sem1El = document.querySelector('.s1')
    const sem2El = document.querySelector('.s2')
    if(sem1El.addEventListener('click', ()=>{
        sem1Dsm();
    }));
    if(sem2El.addEventListener('click', ()=>{
        sem2Dsm();
    }));

}

function sem1Dsm(){
    var conteudo = `<h2 style='text-align:center'>1° Semestre</h2>

                    <div id="seg">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathSeg}></th>
                                    <th>Modelagem de Banco de Dados<br/>Prof: Hélio<br/>7:45 às 9:20<br/>Laboratório 04</th>
                                    <th>Modelagem de Banco de Dados<br/>Prof: Hélio<br/>9:30 às 11:20<br/>Laboratório 04</th>
                                    <th>Engenharia de Software I<br/>Prof: Cida<br/>11:30 às 13:00<br/>Laboratório 04</th>
                                    </div>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="ter">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathTer}></th>
                                    <th class="uno">Design Digital<br/>Prof: Anderson<br/>7:45 às 9:20<br/>Laboratório NIC</th>
                                    <th class="dos">Design Digital<br/>Prof: Anderson<br/>9:30 às 11:20<br/>Laboratório NIC</th>
                                    <th class="tres">Engenharia de Software I<br/>Prof: Cida<br/>11:30 às 13:00<br/>Laboratório NIC</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="qua">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathQua}></th>
                                    <th class="unoesp">Sistemas Operacionais<br/>e<br/>Redes de Computadores<br/>Prof: Buscariolo<br/>9:30 às 11:20<br/>Laboratório 02</th></th>
                                    <th class="dos">Sistemas Operacionais<br/>e<br/>Redes de Computadores<br/>Prof: Buscariolo<br/>9:30 às 11:20<br/>Laboratório 02</th>
                                    <th class="tres">Sistemas Operacionais<br/>e<br/>Redes de Computadores<br/>Prof: Buscariolo<br/>11:30 às 13:00<br/>Laboratório 02</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="qui">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathQui}></th>
                                    <th class="unoesp">Desenvolvimento Web I<br/>Prof: Tiago<br/>11:20 às 13:00<br/>Laboratório 02</th>
                                    <th class="dos">Desenvolvimento Web I<br/>Prof: Tiago<br/>9:30 às 11:20<br/>Laboratório 02</th>
                                    <th class="tres">Desenvolvimento Web I<br/>Prof: Tiago<br/>11:30 às 13:00<br/>Laboratório 02</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="sex">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathSex}></th>
                                    <th class="unoesp">Algoritmos e Lógica de Programação<br/>Prof: Tiago<br/>9:30 às 11:20<br/>Laboratório 04</th>
                                    <th class="dos">Algoritmos e Lógica de Programação<br/>Prof: Tiago<br/>9:30 às 11:20<br/>Laboratório 04</th>
                                    <th class="tres">Algoritmos e Lógica de Programação<br/>Prof: Tiago<br/>11:30 às 13:00<br/>Laboratório 04</th>
                                </tr>
                            </thead>
                        </table>
                    </div>`
    document.querySelector('.conteudo').innerHTML = conteudo;
}

function sem2Dsm(){
    var conteudo = `<h2 style='text-align:center'>2° Semestre</h2>

                    <div id="seg">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathSeg}></th>
                                    <th class="unoesp">Modelagem de banco de Dados<br/>Prof: Hélio<br/>7:45 às 9:15<br/>Laboratório 04</th>
                                    <th>Matemática para Computação<br/>Prof: Lívia Campos<br/>9:30 às 11:20<br/>Sala 206</th>
                                    <th>Matemática para Computação<br/>Prof: Lívia Campos<br/>11:30 às 13:00<br/>Sala 206</th>
                                    </div>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="ter">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathTer}></th>
                                    <th class="unoesp">Desing Digital<br/>Prof: Anderson<br/>7:45 às 9:30<br/>Laboratório NIC</th>
                                    <th class="dos">Engenharia de Software II<br/>Prof: Cida Zem<br/>9:30 às 11:20<br/>Laboratório 04</th>
                                    <th class="tres">Engenharia de Software II<br/>Prof: Cida Zem<br/>11:30 às 13:00<br/>Laboratório 04</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="qua">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathQua}></th>
                                    <th class="uno">Técnicas de Programação<br/>Prof: Vânia Somaio<br/>9:30 às 11:20<br/>Laboratório NIC</th></th>
                                    <th class="dos">Técnicas de Programação<br/>Prof: Vânia Somaio<br/>9:30 às 13:00<br/>Laboratório NIC</th>
                                    <th class="unoesp">Sistemas Operacionais<br/>e<br/>Redes de computadores<br/>Prof: Buscariolo<br/>9:30 às 11:10<br/>Laboratório 02</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="qui">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathQui}></th>
                                    <th class="uno">Banco de Dados Relacional<br/>Prof: Wdson<br/>7:45 às 9:30<br/>Laboratório 03</th>
                                    <th class="dos">Estrutura de Dados<br/>Prof: Ronan<br/>9:30 às 11:20<br/>Laboratório NIC</th>
                                    <th class="tres">Estrutura de Dados<br/>Prof: Ronan<br/>11:30 às 13:00<br/>Laboratório NIC</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div id="sex">
                        <table>
                            <thead>
                                <tr>
                                    <th class="watch"><img src=${imgPathSex}></th>
                                    <th class="uno">Banco de Dados Relacional<br/>Prof: Wdson<br/>7:45 àS 9:30<br/>Laboratório 03</th>
                                    <th class="dos">Desenvolvimento Web II<br/>Prof: Alex<br/>9:30 às 11:20<br/>Laboratório 06</th>
                                    <th class="tres">Desenvolvimento Web II<br/>Prof: Alex<br/>11:30 às 13:00<br/>Laboratório 06</th>
                                </tr>
                            </thead>
                        </table>
                    </div>`
    document.querySelector('.conteudo').innerHTML = conteudo;
}
// REDIRECIONAR PARA PÁGINA A PARTIR DA OPÇÃO DO SELECT
function redirectToPage(select) {
    var selectedOption = select.options[select.selectedIndex];
    // recebendo id do curso
    var courseId = selectedOption.value;

    if(courseId == 1){
        optDsm(courseId);
        semestre();
        //inserirConteudo();
        //window.location.href = "{{'courses/index'}}";
    }else if(courseId == 2){
        optSn();
    }else if(courseId == 3){
        optCn();
    }else if(courseId == 4){
        optGpi();
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
