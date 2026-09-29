<?php
/**
 * mail-config.php
 * SMTP credentials for send-consultation.php. Fill these in before
 * testing locally or deploying — without real credentials here,
 * PHPMailer will fail the same way PHP's mail() did.
 *
 * WHERE TO GET CREDENTIALS
 * -------------------------
 * Option A — Your own domain email (recommended for production)
 *   If granitepeakhs.com has email hosting (cPanel/WHM, Google
 *   Workspace, Microsoft 365, etc.), use that mailbox's SMTP
 *   settings so the email is actually sent "from" your own domain.
 *   Your host or Google Workspace/Microsoft 365 admin console will
 *   list the SMTP host, port, and whether it needs an app password.
 *
 * Option B — Gmail SMTP (fastest way to test right now, including
 *   on localhost)
 *   1. Use a Gmail account (a personal one is fine for testing).
 *   2. Turn on 2-Step Verification on that account.
 *   3. Create an "App Password" at myaccount.google.com/apppasswords
 *      (choose "Mail" as the app). Google gives you a 16-character
 *      password — use that below, NOT your normal Gmail password.
 *   4. SMTP_HOST = smtp.gmail.com, SMTP_PORT = 587, SMTP_SECURE = tls
 *
 * Never commit real credentials to a public repository. If this
 * project goes on GitHub, add mail-config.php to .gitignore and
 * keep a mail-config.example.php with blank values instead.
 */

return [
    'SMTP_HOST'     => 'smtp.gmail.com',           // e.g. smtp.gmail.com, or your host's mail server
    'SMTP_PORT'     => 587,                        // 587 for TLS, 465 for SSL
    'SMTP_SECURE'   => 'tls',                      // 'tls' or 'ssl'
    'SMTP_USERNAME' => 'therettix@gmail.com',      // the mailbox you're sending FROM
    'SMTP_PASSWORD' => 'nawepkurdujurqdc',   // app password (Gmail) or mailbox password
    'FROM_EMAIL'    => 'therettix@gmail.com',      // usually same as SMTP_USERNAME
    'FROM_NAME'     => 'Granite Peak Website',
    'TO_EMAIL'      => 'therettix@gmail.com',
];