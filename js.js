$(function () {
    $("#PalabraTraducir2").on("click", function () {
        let palabra = $("#Palabra").val();
        let apiURL = "https://api.dictionaryapi.dev/api/v2/entries/en/";
        if (palabra != "") {
            $.get(apiURL + palabra, function (data) {
                let definicion = data[0].meanings[0].definitions[0].definition;
                $("#contenido").html("<h4>" + data[0].word + "</h4><p>" + definicion + "</p>");
            });
        }
        console.log(palabra);
    })


})