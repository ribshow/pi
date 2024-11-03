// PESQUISAR DISCIPLINAS
document.getElementById("search").addEventListener("input", function () {
    var filter = this.value.toLowerCase();
    var select = document.getElementById("disciplines");
    var options = select.getElementsByTagName("option");

    for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var txtValue = option.textContent || option.innerText;

        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            option.style.display = "";
        } else {
            option.style.display = "none";
        }
    }
});

// PESQUISAR USUÁRIOS
document.getElementById("search_2").addEventListener("input", function () {
    var filter = this.value.toLowerCase();
    var select = document.getElementById("users");
    var options = select.getElementsByTagName("option");

    for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var txtValue = option.textContent || option.innerText;

        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            option.style.display = "";
        } else {
            option.style.display = "none";
        }
    }
});

//PESQUISAR SALAS
// PESQUISAR USUÁRIOS
document.getElementById("search_3").addEventListener("input", function () {
    var filter = this.value.toLowerCase();
    var select = document.getElementById("rooms");
    var options = select.getElementsByTagName("option");

    for (var i = 0; i < options.length; i++) {
        var option = options[i];
        var txtValue = option.textContent || option.innerText;

        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            option.style.display = "";
        } else {
            option.style.display = "none";
        }
    }
});
