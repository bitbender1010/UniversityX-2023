let parentDiv = document.querySelectorAll('.cc-parent');

parentDiv.forEach(singleDiv => {
    singleDiv.addEventListener('click', toggleMe);
});

function toggleMe(e) {
//test
        if(e.target.parentNode.parentNode.classList.contains("cc-parent")) {
            let childVar = e.target.parentNode.parentNode.parentNode.children[1];
            let svgIcon = childVar.parentNode.children[0].children[0].children[1];

            if(childVar.style.display == "" || childVar.style.display == "none") {
                console.log("e choke");
                childVar.style="display: block";
                svgIcon.style = "transform: rotateZ(90deg)";
            } else {
                console.log("e noooo choke");
                childVar.style="display: none";
                svgIcon.style = "transform: rotateZ(270deg)";
            }
        } 
        
        //2nd

        if(e.target.parentNode.parentNode.parentNode.parentNode.classList.contains("cc-parent")) {
            let childVar2 = e.target.parentNode.parentNode.parentNode.parentNode.parentNode.children[1];
            let svgIcon2 = childVar2.parentNode.children[0].children[0].children[1];

            if(childVar2.style.display == "" || childVar2.style.display == "none") {
                console.log("oga oh");
                childVar2.style="display: block";
                svgIcon2.style = "transform: rotateZ(90deg)";
            } else {
                console.log("madammm");
                childVar2.style="display: none";
                svgIcon2.style = "transform: rotateZ(270deg)";
            }

        } 

        //3rd
        if(e.target.parentNode.classList.contains("cc-parent")) {
            let childVar3 = e.target.parentNode.parentNode.children[1];
            let svgIcon3 = childVar3.parentNode.children[0].children[0].children[1];

            if(childVar3.style.display == "" || childVar3.style.display == "none") {
                console.log("oga oh");
                childVar3.style="display: block";
                svgIcon3.style = "transform: rotateZ(90deg)";
            } else {
                console.log("madammm");
                childVar3.style="display: none";
                svgIcon3.style = "transform: rotateZ(270deg)";
            }
        } 

}

