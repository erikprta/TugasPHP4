<!DOCTYPE html>
<html>

<head>
    <title>Regestration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        transition: all 0.3s ease-in-out;
        background-image: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(4,13,23,1) 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 14px 28px;
        cursor: pointer;
        outline: none;
        text-transform: uppercase;
        font-weight: bold;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
    }

    .form-check-input:hover {
        transform: scale(1.05);
    }

    .text-gradient {
        font-size: 36px;
        background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(111,64,175,1) 60%, rgba(0,212,255,1) 100%);
        background-clip: text;
        color: transparent;
    }

    @media (max-width: 768px) {
        body {
            padding: 26px;
            margin-top: 150px;
            margin-bottom: 150px;
        }

        .col-md-6 {
            padding-top: 40px;
        }

        .col-md-5 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>

            <div class="col-md-6">
                <h1 class="text-center mb-4 font-weight-bold text-gradient">Form Registrasi</h1>
                <form action="p_form.php" method="POST">
                    <div class="form-group mb-4">
                        <label for="nama" class="font-weight-bold">Nama Lengkap:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M0 64C0 46.3 14.3 32 32 32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64zM192 192c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32zm32 96H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H224c-17.7 0-32-14.3-32-32s14.3-32 32-32zM0 448c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM.2 268.6c-8.2-6.4-8.2-18.9 0-25.3l101.9-79.3c10.5-8.2 25.8-.7 25.8 12.6V335.3c0 13.3-15.3 20.8-25.8 12.6L.2 268.6z" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="umur" class="font-weight-bold">Umur:</label>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="font-weight-bold mr-2">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                            <label class="form-check-label" for="male">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                required>
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="intersex" value="male" required>
                            <label class="form-check-label" for="male">intersex</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan" class="font-weight-bold">Pendidikan:</label>
                        <select class="form-control" id="pendidikan" name="pendidikan" required>
                            <option value="" selected disabled>Pilih Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="DI">DI</option>
                            <option value="DII">DII</option>
                            <option value="DIII">DIII</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hobi" class="font-weight-bold">Hobi:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Menulis">
                            <label class="form-check-label">Menulis</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga">
                            <label class="form-check-label">Olahraga</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Traveling">
                            <label class="form-check-label">Traveling</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Ngoding">
                            <label class="form-check-label">Ngoding</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Ngegame">
                            <label class="form-check-label">Ngegame</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Stand-Up">
                            <label class="form-check-label">Stand-Up</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobi[]" value="Masak">
                            <label class="form-check-label">Masak</label>
                        </div>
                        <div class="form-group mt-2">
                            <label for="hobi_lainnya" class="font-weight-bold">Hobi Lainnya:</label>
                            <input type="text" class="form-control" id="hobi_lainnya" name="hobi_lainnya"
                                placeholder="Masukkan Hobi Lainnya">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
</body>

</html>