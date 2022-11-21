<h3>Osztályok</h3>
<ul></ul>

<script src="getData.js"></script>
<script>
    getData('../server/osztalyok.php',renderLi)

    function renderLi(data){
        console.log(data);
    }
</script>