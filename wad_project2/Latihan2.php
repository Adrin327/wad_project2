<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Kalkulator Sederhana</h1>
        <form>
            <div class="form-group">
                <label for="angkaInput">Angka:</label>
                <input type="number" class="form-control" id="angkaInput" placeholder="Masukkan angka">
            </div>
            <div class="form-group">
                <label for="operasiDropdown">Operasi:</label>
                <select class="form-control" id="operasiDropdown">
                    <option value="tambah">Penambahan (+)</option>
                    <option value="kurang">Pengurangan (-)</option>
                    <option value="kali">Perkalian (*)</option>
                    <option value="bagi">Pembagian (/)</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" id="hitungButton">Hitung</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>