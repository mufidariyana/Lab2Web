<!DOCTYPE html>
<html>
<head>
    <title>Form HTML</title>
</head>
<body>
    <form method="POST">
        <fieldset>
        <legend>Form</legend>
        <p>
           <label for="fNama">Nama: </label><br>
           <input type="text" id="fNama" name="nama"><br>
        </p>
        <p>
            <label>Tanggal Lahir:</label><br>
            <input type="date" name="tanggal" /><br>
        </p>
        <label for="fPekerjaan">Pekerjaan: </label><br>
        <select name="pekerjaan" id="fPekerjaan">
            <option value="Tidak Ada">Tidak ada</option>
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
            <option value="Operator Produksi">Operator</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Manager">Manager</option>
        </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Send" />
        </p>
        </fieldset>
    </form>
    <?php

    if (isset($_POST["submit"])) {
        echo '<h2>Hasil</h2>';
        echo 'Nama:' . $_POST["nama"] . '<br>';
        echo 'Tanggal Lahir:' . $_POST["tanggal"] . '<br>';
        echo 'Usia  :' . date_diff(date_create($_POST["tanggal"]), date_create('today'))->y . "<br>";
        echo 'Pekerjaan :' . $_POST["pekerjaan"] . '<br>';
        if ($_POST["pekerjaan"] == "Admin") {
            echo 'Pendapatan: Rp.  3.500.000 <br>';
        } else if ($_POST["pekerjaan"] == "Sales") {
            echo 'Pendapatan: Rp. 3.000.000 <br>';
        } else if ($_POST["pekerjaan"] == "Operator Produksi") {
            echo 'Pendapatan: Rp. 4.500.000 <br>'; 
        } else if ($_POST["pekerjaan"] == "Supervisor") {
            echo 'Pendapatan: Rp. 5.000.000 <br>';
        } else if ($_POST["pekerjaan"] == "Manager") {
            echo 'Pendapatan: Rp. 5.500.000 <br>';       
        } else {
            echo 'Pendapatan: Rp. 0 <br>';
        }
    }
    ?>
</body>

</html>