<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MyHome Search Results</title>
    <style>
        a {
            color:darkblue;
            font-size:1.3rem;
        }
    </style>
</head>
<body>
    <div style="text-align: left;">
        <a href="../index.html">
            <img src="../logo.png" alt="MyHome" height="150">
        </a>
    </div>

    <form action="/MyHome/search" method="get">
        <input type="search" id="searchBar" placeholder="Search..." name="q" value="<?php echo $_GET["q"]; ?>">
        <button id="searchButton"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
    </form>


<!-- Loading gif -->
<img src="https://cdn.pixabay.com/animation/2025/09/06/21/34/21-34-47-638_512.gif" alt="Loading..." id="loadingGif" height="250">


<p style="text-align:left; color:lightgray;">ADS</p>


<?php

if (str_contains(strtolower($_GET["q"]), "startpage")){
    echo "<a href='../index.html'>Try MyHome | Startpage is now owned by System1</a><p>Startpage is now owned by System1 so it's Privacy is Questionable.</p>";
}

if (str_contains(strtolower($_GET["q"]), "website creation")){
    echo "<a href='https://farleyengineeredsolutions.org?source=myhome'>Get a website by Farley Engineered Solutions today!</a><p>We enjoy and have experience helping individuals and small businesses get going! At Farley Engineered Solutions, we help with affordable and effective web development services, big and small, not just with already established larger organizations and businesses.</p>";
}

if (str_contains(strtolower($_GET["q"]), "os")){
    echo "<a href='https://joseph2.farleyengineeredsolutions.org/naudnik?source=myhome'>Ofekal Naudnik OS</a><p>Ofekal Naudnik is as of now the last version of Ofekal published by Vikenait Productions. New features include a full-screen start menu, a fully functional file system, creating accounts, saving data, etc.</p>";
}

?>

<p style="text-align:left; color:lightgray;">SEARCH RESULTS</p>

<?php

    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/150.0.0.0 Safari/537.36';
    $context = stream_context_create(['http' => ['user_agent' => $userAgent, 'timeout' => 10]]);
    
$q = str_replace([" "], ["%20"], $_GET["q"]);

    $html = file_get_contents("https://search.yahoo.com/search?q=$q", false, $context);
echo "
<div style='opacity:0%; height:1px;' id='content'>
$html
</div>
";

?>

<script>
    let results = document.querySelectorAll("#content .relsrch");

    document.body.innerHTML+="<div id='results-container'>";

    for (let i = 0; i < results.length; i++) {
        let element = results[i];
        document.getElementById("results-container").innerHTML+=`<a href="${element.querySelector(".va-top").href}" class="pageLink">${element.querySelector(".fw-500").innerText}</a><br><p>${element.querySelector(".fz-14").innerText}</p><br><br>`;
    }

    document.body.innerHTML+="</div>";



    document.getElementById("content").outerHTML='';
    document.getElementById("loadingGif").outerHTML='';



</script>

</body>
</html>