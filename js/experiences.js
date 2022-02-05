// when the page is loaded
window.addEventListener("load", function() {
    getExperiences();
});

/**
 * get experiences data from the server
 */
function getExperiences() {
    fetch("/processing/experiences.php").then(function(res) {
        res.json().then((experiences) => {
            updateViewExperiences(experiences);
        })
    })
}

/**
 * update the experiences view with content
 * @param {array} experiences 
 */
function updateViewExperiences(experiences) {
    experiences.forEach(experience => {
        let template = document.querySelector("#template-experiences");
        // create a copy of the html structure of the template and fill it with information
        let clone = document.importNode(template.content, true);
        // company name
        clone.querySelector("#experience-description > h5 > strong").textContent = experience.company;
        // internship title
        clone.querySelector("#experience-description > p").textContent = experience.title;
        // each mission corresponding to a <li>
        experience.missions.forEach(mission => {
            let li = document.createElement("li");
            li.textContent = mission;
            clone.querySelector("#experience-mission > ul").appendChild(li);
        }) 
        // city
        clone.querySelector("#experience-situation").getElementsByTagName("p")[0].innerHTML = experience.city;
        // term
        clone.querySelector("#experience-situation").getElementsByTagName("p")[1].innerHTML = experience.term;
        // add the hydrated copy in the page
        document.querySelector("#experiences").appendChild(clone);
    });
}
