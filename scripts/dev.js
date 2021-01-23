

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
    console.log("om button not available on this page");
}

try {
    document.getElementById("boka").addEventListener("click", function() {
        window.location.href = "boka.html";
    });
}
catch (error) {
    console.log("boka button not available on this page");
}

try {
    var title = document.getElementById("title");
    if(document.getElementById("m")) {
        document.getElementById("title").addEventListener("click", function() {
            window.location.href = "../index.html";
        });
        console.log(0);
    }
    else {
        document.getElementById("title").addEventListener("click", function() {
            window.location.href = "index.html";
        });
        console.log(1);
    }
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