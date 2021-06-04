
const container = document.getElementById("container");

axios.get("./json.php")
    .then((response) => {
        /*
          Array di oggetti con le seguenti chiavi
            "poster"
            "title"
            "author"
            "genre"
            "year"
        */
        response.data.forEach((element) => {
            container.innerHTML +=
                `Poster: <img src=" ${element.poster}" >,<br>
                Title : ${element.title}, <br>
                Author : ${element.author}, <br>
                Genre : ${element.genre}, <br>
                Year : ${element.year}, <br>
                <br><br>`
        });
    })
    .catch((err) => {
        alert('errore nel caricamento dei dischi')
        console.error(err);
    });