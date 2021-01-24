

try {
    document.getElementById("mat").addEventListener("click", function() {
        window.location.href = "mat";
    });
}
catch (error) {
    console.log("mat button not available on this page");
}

try {
    document.getElementById("om").addEventListener("click", function() {
        window.location.href = "om-oss.php";
    });
}
catch (error) {
    console.log("om button not available on this page");
}

try {
    document.getElementById("boka").addEventListener("click", function() {
        window.location.href = "boka.php";
    });
}
catch (error) {
    console.log("boka button not available on this page");
}

try {
    var title = document.getElementById("title");
    if(document.getElementById("m")) {
        document.getElementById("title").addEventListener("click", function() {
            window.location.href = "../index.php?iSu8M";
        });
        console.log(0);
    }
    else {
        document.getElementById("title").addEventListener("click", function() {
            window.location.href = "index.php?iSu8M";
        });
        console.log(1);
    }
}
catch (error) {
    console.log("title button not available on this page");
}

try {
    document.getElementById("lunch").addEventListener("click", function() {
        window.location.href = "mat-meny/lunch.php";
    });
    document.getElementById("middag").addEventListener("click", function() {
        window.location.href = "mat-meny/middag.php";
    });
}
catch (error) {
    console.log("menu buttons not available on this page");
}

//TODO: gör separata