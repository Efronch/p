<h3>Statisztika</h3>
<div class="w-100"></div>
<table>
    <thead>
        <tr>
            <td>Osztály</td>
            <td>Menyiség</td>
        </tr>
    </thead>
    <tbody id="statisztika"></tbody>
</table>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<script src="getData.js"></script>
<script>
    getData('../server/osztalyKg.php',renderLi)

    function renderLi(data){
        console.log(data);
        let str=""
        for(let obj of data){
            str+=`<tr>
            <td>${obj.osztaly}</td>
            <td>${obj.kg}</td>
        </tr>`;
        }
        console.log(data)
        document.getElementById('statisztika').innerHTML=str;
    }
</script>