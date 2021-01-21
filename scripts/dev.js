try {
    document.getElementById("mat").addEventListener("click", function() {
        window.location.href = "mat.html";
    });
}
catch (error) {
    console.log("mat button not available on this page");
}

try {
    document.getElementById("om").addEventListener("click", function() {
        window.location.href = "om-oss.html";
    });
}
catch (error) {
    console.log("on button not available on this page");
}

try {
    document.getElementById("title").addEventListener("click", function() {
        window.location.href = "index.html";
    });
}
catch (error) {
    console.log("title button not available on this page");
}

try {
    document.getElementById("lunch").addEventListener("click", function() {
        window.location.href = "mat/lunch.html";
    });
    document.getElementById("middag").addEventListener("click", function() {
        window.location.href = "mat/middag.html";
    });
}
catch (error) {
    console.log("menu buttons not available on this page");
}

//TODO: gör separata