<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Имя пользователя и пароль не совпадают.',
    'throttle' => 'Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.',
    'not_authorized' => 'Вам не разрешено выполнять это действие.',
    'signup_disabled' => 'Регистрация сейчас выключена.',
    'signup_error' => 'Произошла ошибка при регистрации пользователя',
    'back_homepage' => 'Вернуться на главную страницу',
    'mfa_auth_otp' => 'Authenticate with your two factor device',
    'mfa_auth_webauthn' => 'Authenticate with a security key (WebAuthn)',
    '2fa_title' => 'Двухфакторная аутентификация',
    '2fa_wrong_validation' => 'The two factor authentication has failed.',
    '2fa_one_time_password' => 'Код двухфакторной аутентификации',
    '2fa_recuperation_code' => 'Enter a two factor recovery code',
    '2fa_one_time_or_recuperation' => 'Enter a two factor authentication code or a recovery code',
    '2fa_otp_help' => 'Open up your two factor authentication mobile app and copy the code',

    'login_to_account' => 'Login to your account',
    'login_with_recovery' => 'Login with a recovery code',
    'login_again' => 'Please login again to your account',
    'email' => 'Email',
    'password' => 'Пароль',
    'recovery' => 'Recovery code',
    'login' => 'Login',
    'button_remember' => 'Запомнить меня',
    'password_forget' => 'Забыли пароль?',
    'password_reset' => 'Reset your password',
    'use_recovery' => 'Or you can use a <a href=":url">recovery code</a>',
    'signup_no_account' => 'Нет аккаунта?',
    'signup' => 'Sign up',
    'create_account' => 'Create the first account by <a href=":url">signing up</a>',
    'change_language_title' => 'Изменить язык:',
    'change_language' => 'Изменить язык на :lang',

    'password_reset_title' => 'Восстановить пароль',
    'password_reset_email' => 'E-Mail Address',
    'password_reset_send_link' => 'Send Password Reset Link',
    'password_reset_password' => 'Password',
    'password_reset_password_confirm' => 'Confirm Password',
    'password_reset_action' => 'Восстановить пароль',
    'password_reset_email_content' => 'Click here to reset your password:',

    'register_title_welcome' => 'Welcome to your newly installed Monica instance',
    'register_create_account' => 'Для использования Monica вам нужно создать аккаунт',
    'register_title_create' => 'Create your Monica account',
    'register_login' => '<a href=":url">Log in</a> if you already have an account.',
    'register_email' => 'Enter a valid email address',
    'register_email_example' => 'you@home',
    'register_firstname' => 'Имя',
    'register_firstname_example' => 'например, Иван',
    'register_lastname' => 'Фамилия',
    'register_lastname_example' => 'например, Иванов',
    'register_password' => 'Пароль',
    'register_password_example' => 'Введите сложный пароль',
    'register_password_confirmation' => 'Password confirmation',
    'register_action' => 'Register',
    'register_policy' => 'Signing up signifies you’ve read and agree to our <a href=":url" hreflang=":hreflang">Privacy Policy</a> and <a href=":urlterm" hreflang=":hreflang">Terms of use</a>.',
    'register_invitation_email' => 'For security purposes, please indicate the email of the person who’ve invited you to join this account. This information is provided in the invitation email.',

    'confirmation_title' => 'Verify Your Email Address',
    'confirmation_fresh' => 'A fresh verification link has been sent to your email address.',
    'confirmation_check' => 'Before proceeding, please check your email for a verification link.',
    'confirmation_request_another' => 'If you did not receive the email <a :action>click here to request another</a>.',

    'confirmation_again' => 'If you want to change your email address you can <a href=":url" class="alert-link">click here</a>.',
    'email_change_current_email' => 'Current email address:',
    'email_change_title' => 'Change your email address',
    'email_change_new' => 'New email address',
    'email_changed' => 'Your email address has been changed. Check your mailbox to validate it.',
];
