<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karir</title>
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" >
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h2>LOGIN</h2>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors-> all() as $item)
                                    <li>
                                        {{ $item }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" value="{{ old('email') }}" name="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" >
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""> <input type="checkbox">Ingat Saya   <a href="#">Lupa Password</a></label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-block">Login</button>
                    <div class="register">
                        <p>Tidak memiliki akun? <a href="/register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
