<h3>Osztályok</h3>
<div class="w-100"></div>
<ul id="osztalyok"></ul>

<script src="getData.js"></script>
<script>
    getData('../server/osztalyok.php',renderLi)

    function renderLi(data){
        console.log(data);
        let str=""
        for(let obj of data){
            str+=`<li>${obj.osztaly}</li>`
        }
        document.getElementById('osztalyok').innerHTML=str;
    }
</script>