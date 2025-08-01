$(function () {
    $("#PalabraTraducir2").on("click", function () {
        let palabra = $("#Palabra").val();
        let apiURL = "https://api.dictionaryapi.dev/api/v2/entries/en/";
        if (palabra != "") {
            $.get(apiURL + palabra, function (data) {
                let definicion = data[0].meanings[0].definitions[0].definition;
                $("#contenido").html("<h4>" + data[0].word + "</h4><p>" + definicion + "</p>");
                $("#Palabra").val("");
            });
        }
        console.log(palabra);
    })


    $("#buscarFrase").on("click", function () {
        let apiURL = "https://api.breakingbadquotes.xyz/v1/";
        let endpoint = "quotes";

        $.get(apiURL + endpoint, function (data) {
            console.log(data)
            $("#contenido-frase").html("<h3>" + data[0].author + "</h3><b>" + data[0].quote + "</b>")
        })
    })
    /*
s
    
$.post( "test.php", { name: "John", time: "2pm" })
  .done(function( data ) {
    alert( "Data Loaded: " + data );
  });

  */
})