<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup</title>
    <!-- Looks at the file styles.css for all appropriate styles. -->
    <link rel="stylesheet" href="styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style="position:absolute; bottom: 0; top:0; left:0; right:0;" >

<div class="characterParent" style="text-align: center;">
    <form>
        <div class="characterChild">
            <label for="initiative">
                Initiative:
                <input class="initiative" name="character_init" size="1" type="text" maxlength="3"/>
            </label>

            <label for="name">
                Name:
                <input class="name" name="character_name" size="15" type="text"/>
            </label>

            <label for="ac">
                AC:
                <input class="ac" name="character_ac" size="1" type="text" maxlength="3"/>
            </label>

            <label for="hp">
                HP:
                <input class="hp" name="character_hp" size="1" type="text" maxlength="3"/>
            </label>

            <label for="playerCheckbox">
                Player?:
                <input id="playerCheckbox" name="character1_isPlayer" size="5" type="checkbox"/>
            </label>

            <label for="addButton">
                Add:
                <button class="addButton" name="incrementPartyButton" type="button">+</button>
            </label>
        </div>

        <input type="submit" name="" id="">
    </form>
</div>

 <!-- This will link to the file that has all of the JS scripts in it. -->
 <script src="main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>