<?php

return [
  // Exceptions
  'invalidModel'              => 'The {0} model must be loaded prior to use.',
  'userNotFound'              => 'Unable to locate a user with ID = {0, number}.',
  'noUserEntity'              => 'User Entity must be provided for password validation.',
  'tooManyCredentials'        => 'You may only validate against 1 credential other than a password.',
  'invalidFields'             => 'The "{0}" field cannot be used to validate credentials.',
  'unsetPasswordLength'       => 'You must set the `minimumPasswordLength` setting in the Auth config file.',
  'unknownError'              => 'Sorry, we encountered an issue sending the email to you. Please try again later.',
  'notLoggedIn'               => 'Anda harus login untuk mengakses halaman tersebut.',
  'notEnoughPrivilege'        => 'Anda tidak memiliki izin yang memadai untuk mengakses halaman tersebut.',

  // Registration
  'registerDisabled'          => 'Maaf, akun pengguna baru saat ini tidak diperbolehkan.',
  'registerSuccess'           => 'Selamat datang di Bimbline! Silakan masuk dengan kredensial baru Anda.',
  'registerCLI'               => 'New user created: {0}, #{1}',

  // Activation
  'activationNoUser'          => 'Tidak dapat menemukan pengguna dengan kode aktivasi tersebut.',
  'activationSubject'         => 'Mengaktifkan akun Anda.',
  'activationSuccess'         => 'Harap konfirmasikan akun Anda dengan mengklik tautan aktivasi di email yang telah kami kirim.',
  'activationResend'          => 'Mengirim ulang pesan aktivasi sekali lagi.',
  'notActivated'              => 'Akun pengguna ini belum diaktifkan.',
  'errorSendingActivation'    => 'Gagal mengirim pesan aktivasi kepada: {0}',

  // Login
  'badAttempt'                => 'Gagal untuk login. Silakan periksa kembali kredensial Anda.',
  'loginSuccess'              => 'Selamat datang kembali!',
  'invalidPassword'           => 'Gagal untuk login. Silakan periksa kembali kata sandi Anda.',

  // Forgotten Passwords
  'forgotDisabled'            => 'Resseting password option has been disabled.',
  'forgotNoUser'              => 'Unable to locate a user with that email.',
  'forgotSubject'             => 'Password Reset Instructions',
  'resetSuccess'              => 'Your password has been successfully changed. Please login with the new password.',
  'forgotEmailSent'           => 'A security token has been emailed to you. Enter it in the box below to continue.',
  'errorEmailSent'            => 'Unable to send email with password reset instructions to: {0}',

  // Passwords
  'errorPasswordLength'       => 'Kata sandi harus panjangnya minimal {0, number}.',
  'suggestPasswordLength'     => 'Lulus frasa - panjang hingga 255 karakter - buat kata sandi yang lebih aman yang mudah diingat.',
  'errorPasswordCommon'       => 'Tidak boleh menggunakan kata sandi yang sudah umum diketahui orang banyak.',
  'suggestPasswordCommon'     => 'Kata sandi diperiksa terhadap lebih dari 65k kata sandi atau kata sandi yang umum digunakan yang telah bocor melalui peretasan.',
  'errorPasswordPersonal'     => 'Kata sandi tidak boleh memuat informasi pribadi yang di-hash ulang.',
  'suggestPasswordPersonal'   => 'Variasi pada alamat email atau username Anda tidak boleh digunakan untuk kata sandi.',
  'errorPasswordTooSimilar'   => 'Kata sandi terlalu mirip dengan nama pengguna.',
  'suggestPasswordTooSimilar' => 'Jangan gunakan bagian dari username Anda di kata sandi Anda.',
  'errorPasswordPwned'        => 'Kata sandi {0} telah diekspos karena pelanggaran data dan telah dilihat {1, number} kali dalam beberapa {2} yang disusupi.',
  'suggestPasswordPwned'      => '{0} tidak boleh digunakan sebagai kata sandi. Jika Anda menggunakannya di mana saja segeralah mengubahnya.',
  'errorPasswordEmpty'        => 'Kata Sandi diperlukan.',
  'passwordChangeSuccess'     => 'Kata sandi berhasil diubah',
  'userDoesNotExist'          => 'Kata sandi gagal diubah. Pengguna tidak ditemukan.',
  'resetTokenExpired'         => 'Maaf. Token reset Anda telah kedaluwarsa.',

  // Groups
  'groupNotFound'             => 'Unable to locate group: {0}.',

  // Permissions
  'permissionNotFound'        => 'Unable to locate permission: {0}',

  // Banned
  'userIsBanned'              => 'Pengguna telah dilarang masuk (banned). Hubungi administrator',

  // Too many requests
  'tooManyRequests'           => 'Too many requests. Please wait {0, number} seconds.',

  // Login views
  'home'                      => 'Home',
  'current'                   => 'Current',
  'forgotPassword'            => 'Lupa Kata Sandi?',
  'enterEmailForInstructions' => 'Tidak ada masalah! Masukkan email Anda di bawah ini dan kami akan mengirimkan instruksi untuk mereset kata sandi Anda.',
  'email'                     => 'Email',
  'emailAddress'              => 'Email Address',
  'sendInstructions'          => 'Send Instructions',
  'loginTitle'                => 'Selamat datang kembali, harap login terlebih dahulu.',
  'registerTitle'             => 'Silahkan isi formulir berikut untuk mendaftarkan akun baru.',
  'loginAction'               => 'Login',
  'rememberMe'                => 'Ingat Saya',
  'needAnAccount'             => 'Belum Memiliki Akun?',
  'forgotYourPassword'        => 'Lupa Kata Sandi?',
  'password'                  => 'Password',
  'repeatPassword'            => 'Konfirmasi Password',
  'emailOrUsername'           => 'Email / Username',
  'username'                  => 'Username',
  'register'                  => 'Register',
  'signIn'                    => 'Sign In',
  'alreadyRegistered'         => 'Sudah Memiliki Akun?',
  'weNeverShare'              => 'We\'ll never share your email with anyone else.',
  'resetYourPassword'         => 'Reset Kata Sandi Anda.',
  'enterCodeEmailPassword'    => 'Masukkan kode yang Anda terima melalui email, alamat email, dan kata sandi baru Anda.',
  'token'                     => 'Token',
  'newPassword'               => 'New Password',
  'newPasswordRepeat'         => 'Repeat New Password',
  'resetPassword'             => 'Reset Password',
];