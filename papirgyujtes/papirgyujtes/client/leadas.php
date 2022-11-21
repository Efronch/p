<h3>Leadás</h3>
<div class="w-100"></div>
<table>
    <thead>
        <tr>
            <td>Tanuló</td>
            <td>Menyiség</td>
        </tr>
    </thead>
    <tbody id="leadas"></tbody>
</table>
<tr>
    <td></td>
    <td></td>
    <td></td>
</tr>
<script src="getData.js"></script>
<script>
    getData('../server/leadas.php',renderLi)

    function renderLi(data){
        console.log(data);
        let str=""
        for(let obj of data){
            str+=`<tr>
            <td>${obj.nev}</td>
            <td>${obj.kg}</td>
            </tr>`;
        }
        console.log(data)
        document.getElementById('leadas').innerHTML=str;
    }
</script>