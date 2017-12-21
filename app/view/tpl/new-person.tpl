<div style="text-align: center;">
    <form method="POST" action="?view=workers&action=create" enctype="multipart/form-data">

        <div>Vardas :</div>
        <input type="text" name="name"> <br>

        <div>Pavardė :</div>
        <input type="text" name="surname"> <br>

        <div>Gimimo data :</div>
        <input type="date" name="birthday_date"> <br>

        <div>Lytis:</div>
        <select name="gender">
            <option value="MALE">Vyras</option>
            <option value="FEMALE">Moteris</option>
        </select> <br>

        <div>Pareigos:</div>
        <input type="text" name="position"> <br>

        <div>Pastabos:</div>
        <input type="text" name="comments"> <br>

        <div>Nuotrauka:</div>
        <input type="file" accept="image/jpeg, image/png" name="picture"><br>

        <input type="submit" class="btn ro" value="Įvesti duomenis">
    </form>
</div>/