setTimeout(function(){
    //alert(window.location.pathname);
    if (window.location.pathname == "/OIM/product.html") {
        document.getElementById("product").className  = 'active';
        document.getElementById("productLink").href="#";
        document.getElementById("importLink").href="import.html"; 
        document.getElementById("exportLink").href="export.html";  
    }

    if (window.location.pathname == "/OIM/eachProduct.html") {
        document.getElementById("product").className  = 'active';
        document.getElementById("productLink").href="product.html";
        document.getElementById("importLink").href="import.html"; 
        document.getElementById("exportLink").href="export.html";  
    }

    if (window.location.pathname == "/OIM/import.html") {
        var addClass = document.getElementById("import");
        addClass.className = " active";

        document.getElementById("productLink").href="product.html";
        document.getElementById("importLink").href="#"; 
        document.getElementById("exportLink").href="export.html";
    }

    if (window.location.pathname == "/OIM/importList.html") {
        var addClass = document.getElementById("import");
        addClass.className = " active";

        document.getElementById("productLink").href="product.html";
        document.getElementById("importLink").href="#"; 
        document.getElementById("exportLink").href="export.html";
    }

    if (window.location.pathname == "/OIM/export.html") {
        var addClass = document.getElementById("export");
        addClass.className = " active";

        document.getElementById("productLink").href="product.html";
        document.getElementById("importLink").href="import.html"; 
        document.getElementById("exportLink").href="#";
    }
}, 100);