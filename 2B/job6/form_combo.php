<html>
    <head>
        <title>Form Input ComboBox</title>
    </head>
    <body>
        <p>Bahasa Pemrograman yang paling Anda Suka?</p>

        <form id="form_combobox" name="form_combobox" method="POST" action="Proses_combobox.php">
            <select name="favorit">
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="Visual C">Visual C</option>
                <option value="C++">C++</option>
                <option value="Delphi">Delphi</option>
            </select>
            <p></p>
            <p><input type="submit" name="button" value="Tampil"></p>
        </form>
    </body>
</html>