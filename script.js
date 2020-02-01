function highlightNavBar(option) {
    if (option === 'home'){
        let x = document.getElementById("home");
        x.className = "active";
        let p = document.getElementById("myProjects");
        p.className = "off";
    }
    else if (option === 'projects'){
        let p = document.getElementById("myProjects");
        p.className = "active";
        let x = document.getElementById("home");
        x.className = "off";
    }
}