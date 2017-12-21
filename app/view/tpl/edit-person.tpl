<div style="text-align: center;">
    <form method="POST" action="?view=workers&action=update&id=[@id]" enctype="multipart/form-data">

        <div>Vardas :</div>
        <input type="text" name="name" value="[@name]"> <br>

        <div>Pavardė :</div>
        <input type="text" name="surname" value="[@surname]"> <br>

        <div>Gimimo data :</div>
        <input type="date" name="birthday_date" value="[@birthday_date]"> <br>

        <div>Lytis:</div>
        <select name="gender">
            <option value="MALE" [@gender_MALE]>Vyras</option>
            <option value="FEMALE" [@gender_FEMALE]>Moteris</option>
        </select> <br>

        <div>Pareigos:</div>
        <input type="text" name="position" value="[@position]"> <br>

        <div>Pastabos:</div>
        <input type="text" name="comments" value="[@comments]"> <br>

        <div>Nuotrauka:</div>
        <input type="file" disabled name="picture" value="[@picture]"> <br>

        <input type="submit" class="btn ro" value="Atnaujinti duomenis">
    </form>

    <form method="POST" action="?view=workers&action=delete&id=[@id]" enctype="multipart/form-data">
        <input type="submit" class="btn ro" value="Ištrinti duomenis">
    </form>
</div>/