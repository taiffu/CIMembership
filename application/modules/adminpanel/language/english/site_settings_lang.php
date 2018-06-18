<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$lang['site_settings_title']                = "Site settings";
$lang['clear_sessions_title']               = "Clear your sessions";
$lang['clear_sessions_title_explanation']   = "Can be used to gracefully make all members log out by removing their session data.";
$lang['clear_sessions']                     = "Clear sessions";
$lang['save_all_settings']                  = "Save all settings";
$lang['settings_update']                    = 'Settings successfully updated.';
$lang['settings_update_error']              = 'Failed to update settings.';
$lang['sessions_cleared']                   = 'Sessions successfully deleted.';
$lang['sessions_not_cleared']               = 'Nothing to clear.';
$lang['site_title']                         = "Site title";
$lang['site_title_p']                       = 'The site title appears in the title tag <code>&lt;title&gt;</code> tag.';
$lang['disable_whole_app']                  = "Disable whole application";
$lang['disable_whole_app_p']                = "Deny access to all pages, both public and private. The main administrator account will still be able to log in.</p>";
$lang['disabled_text']                      = "Text to display when website is disabled:";
$lang['enable_remember_me']                 = "Enable remember me";
$lang['enable_remember_me_p']               = "Allow the remember me functionality to be used on the login page (based on cookies).";
$lang['disable_login_access']               = "Disable login access";
$lang['disable_login_access_p']             = "Turn off login ability for all members except the main administrator account.";
$lang['max_login_attempts']                 = "Maximum login attempts";
$lang['max_login_attempts_p']               = "Security measure to disallow account access after this many failed login attempts (only works for non-OAuth2 accounts as it is based on the username).";
$lang['allow_login_by_email']               = "Allow login by email";
$lang['allow_login_by_email_p']             = "Whether registered members can log on using their email address on top of being able to use their username.";
$lang['registration_requires_password']     = "Require password during registration";
$lang['registration_requires_password_p']   = "When disabled the password field is not displayed and a password will be auto-generated behind the scenes.";
$lang['registration_requires_username']     = "Require username during REGULAR registration";
$lang['registration_requires_username_p']   = "When disabled the username field is not displayed and a username will be created from the email address.";
$lang['oauth_requires_username']            = "Require username during SOCIAL registration";
$lang['oauth_requires_username_p']          = "When disabled the username field is not displayed and a username will be created from the email address.";
$lang['registration_activation_required']   = "Require activation post-registration (double opt-in)";
$lang['registration_activation_required_p'] = "When disabled the account will immediately be approved after registration and will the activation email will not be sent out.";
$lang['registration_approval_required']     = "Require approval post-registration";
$lang['registration_approval_required_p']   = "When active the account needs to be approved by an administrator first. Beware that if you enable this you should approve existing members manually or they won't be able to log on. You can approve members in the List members section.";
$lang['allow_username_change']              = "Allow members to change their username";
$lang['allow_username_change_p']            = "When enabled people can choose their username and change it all the time. Previous usernames are logged.";
$lang['change_password_send_email']         = "Send email when user changes password";
$lang['change_password_send_email_p']       = "When enabled the system confirms the password change by sending an email out to the member.";
$lang['post_login_page']                    = "Post-login display page";
$lang['post_login_page_p']                  = "The page to display right after logging in - should be a controller that extends Private_Controller that resides in application/controllers/private.";
$lang['previous_url_after_login']           = "Display previous page after login?";
$lang['previous_url_after_login_p']         = "When the previous url is found after login you will be redirected to that page. This setting overrides the post-login display page where applicable. Only works for regular login due to the nature of OAuth (multiple redirects).";
$lang['members_per_page']                   = "Members per page";
$lang['members_per_page_p']                 = "The number of members per page to display on the list members page.";
$lang['admin_email']                        = "Administrator e-mail account";
$lang['admin_email_p']                      = "Primary application e-mail address to be used for sending e-mails - by default the same as the main administrator e-mail.";
$lang['admin_ip_address']                   = "Administrator IP address range";
$lang['admin_ip_address_p']                 = "Make sure this value is up-to-date before disabling or you will not be able to log in (can be comma-delimited list of IPs).";
$lang['active_theme']                       = "Currently active theme";
$lang['active_theme_p']                     = "Fill out the theme folder name. Can be used as frontend theme or to override the adminpanel theme.";
$lang['adminpanel_theme']                   = "Theme folder name for the backend also called adminpanel which is the default theme.";
$lang['adminpanel_theme_p']                 = "Use the exact theme folder name here.";
$lang['cookie_expiration']                  = "Cookie expiration";
$lang['cookie_expiration_p']                = "Cookies set will receive this number in seconds as their future expiry time.";
$lang['password_link_expiration']           = "Password link expiration";
$lang['password_link_expiration_p']         = "Make the reset password activation link expire in this many seconds in the future.";
$lang['activation_link_expiration']         = "Activation link expiration";
$lang['activation_link_expiration_p']       = "Make the account activation link expire in this many seconds in the future.";
$lang['picture_max_upload_size']            = "Profile picture max size in Kilobytes.";
$lang['picture_max_upload_size_p']          = "Set the maximum allowed file size for user uploaded profile pictures, for example 50 = 50Kb = 50000 bytes.";
$lang['sendmail_path']                      = "Path to sendmail";
$lang['sendmail_path_p']                    = "For most servers this is /usr/sbin/sendmail";
$lang['smtp_host']                          = "SMTP host";
$lang['smtp_port']                          = "SMTP port";
$lang['smtp_user']                          = "SMTP user";
$lang['smtp_password']                      = "SMTP password";
$lang['smtp_encrypt']                       = "Will be encrypted before saving to database.";
$lang['email_recommended']                  = "recommended";
$lang['enable_recaptcha']                   = "Enable reCAPTCHA V2";
$lang['enable_recaptcha_p']                 = "Turn on recaptcha site-wide to better protect the membership module.";
$lang['site_key']                           = "Site key";
$lang['site_secret']                        = "Secret key ";
$lang['disable_registration_p']             = "Turn off the ability for new people to register on the site.";
$lang['registration_disable']               = "Disable member registration";
$lang['registration_disabled']              = 'Registration has been disabled.';
$lang['login_attempts_trigger']             = "reCAPTCHA V2 login attempts trigger";
$lang['login_attempts_trigger_p']           = "Shows a reCAPTCHA form after this many failed login attempts.";
$lang['enable_oauth']                       = "Enable social login globally";
$lang['enable_oauth_p']                     = "Disable or enable the social login integration completely.";
$lang['main_not_found']                     = 'Theme file not found: %s.';
$lang['controller_not_found']               = 'Controller %s.php not found.';
$lang['sessions_loading_text']              = 'Clearing...';
$lang['site_settings_loading_text']         = 'Saving...';
$lang['google_analytics_tracking_code']     = "Google analytics tracking code (UA-XXXXX-X)";
$lang['google_analytics_tracking_code_p']   = "You can enter your Google tracker here and use the file views/gemeric/google-analytics.php as a view.";
$lang['admin_ip_address_error']             = "Admin IP address must contain valid IPs only.";
$lang['captcha_missing']                    = "Please fill out both recaptcha fields.";

// tabs
$lang['tab_general']          = "General";
$lang['tab_login']            = "Login";
$lang['tab_register']         = "Register";
$lang['tab_oauth']            = "OAuth";
$lang['tab_members']          = "Members";
$lang['tab_mail']             = "Mail";
$lang['tab_recaptcha']        = "ReCAPTCHA";

$lang['general_settings_title']             = $lang['tab_general'];
$lang['login_settings_title']               = $lang['tab_login'];
$lang['register_settings_title']            = "Registration";
$lang['oauth_settings_title']               = $lang['tab_oauth'];
$lang['members_settings_title']             = $lang['tab_members'];
$lang['mail_settings_title']                = "Mail settings";
$lang['recaptcha_settings_title']           = "ReCAPTCHA V2 settings";