let containerPokemon = document.getElementById('containerPokemon');
const urlPokemon = 'https://pokeapi.co/api/v2/pokemon/'

   
document.addEventListener('DOMContentLoaded', () => {
    axios.get(urlPokemon)
        .then(resp => {
            const data = resp.data.results
            ShowPokemon(data)
            console.log(data)
        })
        .catch(error => console.log(error))
})


 const ShowPokemon = (data) => {
    data.forEach(poke => {
        
        const {name, url } = poke

        containerPokemon.innerHTML += `
        <div class="card-character" onclick="senturl('${url}')">
        <div class="containerInfo">                    
            <h1>${name}</h1>
        </div>
        </div>
        `
    })
}

let containerAbilities = document.getElementById('containerAbilities');


 const senturl = (url) => {
    localStorage.setItem('urlPoke', url)
    console.log(url);
    window.location.href = "./habilidades.html"

    
   
}



 
