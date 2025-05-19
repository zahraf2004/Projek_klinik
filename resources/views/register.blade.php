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
                                    <input type="text" id="nameInput" class="form-control" required>
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
                                                <option value="">Choose...</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="classSelect" class="form-label">Class</label>
                                    <select class="form-select" id="classSelect" required>
                                        <option value="">Choose...</option>
                                        <option value="class1">Class 1</option>
                                        <option value="class2">Class 2</option>
                                        <option value="class3">Class 3</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="noHp" class="form-label">No Handphone</label>
                                    <input type="text" id="noHP" class="form-control" required>
                                </div>

                                <div class="form-group mb-5">
                                    <label for="alamatInput" class="form-label">Alamat</label>
                                    <input type="text" id="alamatInput" class="form-control" required>
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
</body>
</html>