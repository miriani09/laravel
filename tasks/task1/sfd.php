<form action="" method="get">
    <label>
        <input type="radio" name="radio" value="Lock & Key">Lock & Key
    </label>
    <label>
        <input type="radio" name="radio" value="Umbrella Academy">Umbrella Academy
    </label>
    <label>
        <input type="radio" name="radio" value="Stranger Things">Stranger Things
    </label>
    <label>
        <input type="radio" name="radio" value="Ozark">Ozark
    </label>

    <input type="submit" name="submit" value="Get Values">
</form>

<?php
if(isset($_GET['submit'])){
    if(!empty($_GET['radio'])) {
        echo '  ' . $_GET['radio'];
    } else {
        echo 'Please select the value.';
    }
}
?>