/*const botonRegresar = document.getElementById('button')

botonRegresar.addEventListener('click',() =>{
    window.location.href="index.html"
})  <-- este evento se usa solo si se va a redirigir a un archivo html 
*/

const urlPoke = localStorage.getItem('urlPoke');

console.log(urlPoke);

document.addEventListener('DOMContentLoaded', () =>{
    handleAboutPokemon();
})

const handleAboutPokemon = () => {
  
    axios.get(urlPoke)
        .then(resp => {
           
            let abilities = resp.data.abilities 
            let formUrl = resp.data.forms[0].url
            //ShowAbilities(abilities)
            console.log(abilities)

            nameIMGPoke(formUrl, abilities)


            
        
        })
        .catch(error => console.log(error))
}

const nameIMGPoke = (url, abilities) =>{

    axios.get(url)
        .then(resp => {
            let namePokemon = resp.data.name
            let imgPok = resp.data.sprites.front_default
            //ShowAbilities(abilities)
            console.log(namePokemon)


            ShowPokemondata(namePokemon,abilities, imgPok)
        
        })
        .catch(error => console.log(error))

       
}

const divPok = document.getElementById('pok')
const abilityUl = document.getElementById('abilityUl')
const divImg = document.getElementById('img')

    const ShowPokemondata = (namePokemon,abilities, imgPok) =>{
        divPok.innerHTML = `
        <h2>${namePokemon}</h2>
        `
        abilities.forEach(abil => {
        
         const {ability} = abil

         console.log(ability.name);
    
         abilityUl.innerHTML += `
          
                <li>${ability.name}</li>
      
     
            `
        divImg.innerHTML = `
          
        <img src="${imgPok}" alt="">
  
 
        `
        })

}
    


