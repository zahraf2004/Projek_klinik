<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="registration-section">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="{{ asset('img/foto_klinik.jpg') }}" class="card-img-top" alt="Klinik Photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Registrasi</h3>

                            <form>
                                <div class="form-group mb-4">
                                    <label for="nameInput" class="form-label">Nama</label>
                                    <input type="text" id="nameInput" class="form-control" placeholder="Nama" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="dateInput" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="dateInput" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-group">
                                            <label for="genderSelect" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" id="genderSelect" required>
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="female">Perempuan</option>
                                                <option value="male">Laki Laki</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Masukkan email" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="noHp" class="form-label">No Handphone</label>
                                    <input type="text" id="noHP" class="form-control" placeholder="Masukkan Nomor Handphone" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="alamatInput" class="form-label">Alamat</label>
                                    <input type="text" id="alamatInput" class="form-control" placeholder="Masukkan alamat" required>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-6 mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                        <span class="input-group-text">
                                            <i class="fas fa-eye toggle-password" toggle="#password"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                        <div class="input-group">
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi password" required>
                                        <span class="input-group-text">
                                            <i class="fas fa-eye toggle-password" toggle="#password_confirmation"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="d-grid">
                                    <button type="submit" class="btnRegis">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const togglePasswordIcons = document.querySelectorAll(".toggle-password");

            togglePasswordIcons.forEach(function (icon) {
            icon.addEventListener("click", function () {
                const input = document.querySelector(this.getAttribute("toggle"));
                if (input.type === "password") {
                input.type = "text";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");
                } else {
                input.type = "password";
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");
                }
            });
            });
        });
    </script>

</body>
</html>