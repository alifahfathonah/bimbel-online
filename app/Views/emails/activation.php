<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email Activation</title>
  </head>
  <body style="background: #130f40; color: #dff9fb; font-family:sans-serif;">
    <div style="background: #30336b; display: block; max-width: 500px; padding: 24px; border-radius: 6px; margin: 24px auto;">
      <div style="display: block; padding: 2px">
        <h1 style="font-size: 1.1rem;">Halo, <?= $username; ?></h1>
        <p style="font-size: .94rem; line-height: 1.5rem;">
          Terimakasih telah mendaftar di Bimbel Online (bimbline).
          tinggal satu langkah lagi agar kamu bisa bergabung dengan kami.
          cukup klik tombol dibawah ini untuk memverfikasi email kamu.
        </p>
        
        <a href="<?= base_url('activate-account') . '?token=' . $hash ?>" style="display:inline-block; background:#7ed6df; padding: 14px 24px; border-radius:8px; font-weight:bold; color: #30336b; text-decoration:none; font-size:.9rem;">verifikasi sekarang</a>
        
        <p style="font-size: .94rem; line-height: 1.5rem;">
          jika terjadi masalah dengan tombol verifikasi, cukup salin link dibawah ini dan paste di url browser kamu.
          <a href="<?= base_url('activate-account') . '?token=' . $hash ?>" style="color: #7ed6df; display: block; margin-top: 4%;">
            <?= base_url('activate-account') . '?token=' . $hash ?>
          </a>
        </p>
      </div>
    </div>
  </body>
</html>