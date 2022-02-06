// when the page is loaded
window.addEventListener("load", function() {
    getFormations();
});

/**
 * get formations data from the server
 */
function getFormations() {
    fetch("/processing/formations.php").then(function(res) {
        res.json().then((formations) => {
            updateViewFormations(formations);
        })
    })
}

/**
 * update the formations view with content
 * @param {Object[]} formations - list of all the formations
 */
function updateViewFormations(formations) {
    placeFormation(formations);
}


/**
 * place the formations in rows of 2 columns
 * @param {Object[]} formations - list of all the formations
 */
function placeFormation(formations) {
    for(let i=0; i<formations.length; i+=2) {
        let row = document.createElement("div");
        row.classList.add("row", "mt-2");
        
        for(let j=i; j<i+2; j++) {
            let col = document.createElement("div");
            col.classList.add("col", "mx-1");
            col.appendChild(fillFormation(formations[j]));

            row.appendChild(col);
        }

        document.querySelector("#formations").appendChild(row);
    }
}


/**
 * Build and fill a formation with content
 * @param {Object} formation - the content of the formation
 * @returns {String} clone - html stucture of the formation filled with content
 */
function fillFormation(formation) {
    let template = document.querySelector("#template-formations");
    // create a copy of the html structure of the template and fill it with information
    let clone = document.importNode(template.content, true);
    
    // image
    clone.querySelector("img").setAttribute("src", formation.img);
    clone.querySelector("img").setAttribute("alt", formation.institution);
    // city
    clone.querySelector("#formation-situation").getElementsByTagName("p")[0].textContent = formation.city;
    // term
    clone.querySelector("#formation-situation").getElementsByTagName("p")[1].textContent = formation.term;
    // formation title
    clone.querySelector("#formation-title > h5 > strong").textContent = formation.title;
    // formation subtitle
    clone.querySelector("#formation-title > p").textContent = formation.subtitle;
    
    // institution title
    clone.querySelector("#formation-institution div > p").textContent = formation.institution;
    // institution info (not necessary for the moment)
    // if(formation.institution_info !== null) {
    //     clone.querySelector("#formation-institution > div > p > small").textContent = formation.institution_info;
    // }

    // institution 2 title
    if(formation.institution_2 !== null) {
        let div = document.createElement("div");
        div.classList.add("col", "d-flex", "justify-content-center", "align-items-center");

        let p = document.createElement("p");
        p.textContent = formation.institution_2;

        // institution 2 info if exists
        if(formation.institution_info_2 !== null) {
            let small = document.createElement("small");
            small.classList.add("text-secondary")
            small.textContent = "(" + formation.institution_info_2 + ")";
            
            //let p = clone.querySelector("#formation-institution-2 > p");
            p.appendChild(small);
            // ajout d'un retour chariot
            p.insertBefore(document.createElement("br"), small);
        }

        div.appendChild(p);
        clone.querySelector("#formation-institution").appendChild(div);
    }

    return clone;
}
