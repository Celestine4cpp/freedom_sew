<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9f1e0e5e3b2a4d641d2bd979a94c49c
{
    public static $files = array (
        '4ddff123f026bee5ee1f5c415e2d5eb3' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static $classMap = array (
        'Lcobucci\\JWT\\Builder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Builder.php',
        'Lcobucci\\JWT\\Claim' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim.php',
        'Lcobucci\\JWT\\Claim\\Basic' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Basic.php',
        'Lcobucci\\JWT\\Claim\\EqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/EqualsTo.php',
        'Lcobucci\\JWT\\Claim\\Factory' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Factory.php',
        'Lcobucci\\JWT\\Claim\\GreaterOrEqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/GreaterOrEqualsTo.php',
        'Lcobucci\\JWT\\Claim\\LesserOrEqualsTo' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/LesserOrEqualsTo.php',
        'Lcobucci\\JWT\\Claim\\Validatable' => __DIR__ . '/..' . '/lcobucci/jwt/src/Claim/Validatable.php',
        'Lcobucci\\JWT\\Parser' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parser.php',
        'Lcobucci\\JWT\\Parsing\\Decoder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parsing/Decoder.php',
        'Lcobucci\\JWT\\Parsing\\Encoder' => __DIR__ . '/..' . '/lcobucci/jwt/src/Parsing/Encoder.php',
        'Lcobucci\\JWT\\Signature' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signature.php',
        'Lcobucci\\JWT\\Signer' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer.php',
        'Lcobucci\\JWT\\Signer\\BaseSigner' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/BaseSigner.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\MultibyteStringConverter' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/MultibyteStringConverter.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/Sha512.php',
        'Lcobucci\\JWT\\Signer\\Ecdsa\\SignatureConverter' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Ecdsa/SignatureConverter.php',
        'Lcobucci\\JWT\\Signer\\Hmac' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Hmac\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Hmac/Sha512.php',
        'Lcobucci\\JWT\\Signer\\Key' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Key.php',
        'Lcobucci\\JWT\\Signer\\Keychain' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Keychain.php',
        'Lcobucci\\JWT\\Signer\\OpenSSL' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/OpenSSL.php',
        'Lcobucci\\JWT\\Signer\\Rsa' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha256' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha256.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha384' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha384.php',
        'Lcobucci\\JWT\\Signer\\Rsa\\Sha512' => __DIR__ . '/..' . '/lcobucci/jwt/src/Signer/Rsa/Sha512.php',
        'Lcobucci\\JWT\\Token' => __DIR__ . '/..' . '/lcobucci/jwt/src/Token.php',
        'Lcobucci\\JWT\\ValidationData' => __DIR__ . '/..' . '/lcobucci/jwt/src/ValidationData.php',
        'WP_Auth0_Admin' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin.php',
        'WP_Auth0_Admin_Advanced' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin_Advanced.php',
        'WP_Auth0_Admin_Appearance' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin_Appearance.php',
        'WP_Auth0_Admin_Basic' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin_Basic.php',
        'WP_Auth0_Admin_Features' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin_Features.php',
        'WP_Auth0_Admin_Generic' => __DIR__ . '/../..' . '/lib/admin/WP_Auth0_Admin_Generic.php',
        'WP_Auth0_Api_Abstract' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Abstract.php',
        'WP_Auth0_Api_Change_Email' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Change_Email.php',
        'WP_Auth0_Api_Change_Password' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Change_Password.php',
        'WP_Auth0_Api_Client' => __DIR__ . '/../..' . '/lib/WP_Auth0_Api_Client.php',
        'WP_Auth0_Api_Client_Credentials' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Client_Credentials.php',
        'WP_Auth0_Api_Exchange_Code' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Exchange_Code.php',
        'WP_Auth0_Api_Get_Jwks' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Get_Jwks.php',
        'WP_Auth0_Api_Get_User' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Get_User.php',
        'WP_Auth0_Api_Jobs_Verification' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Jobs_Verification.php',
        'WP_Auth0_Api_Operations' => __DIR__ . '/../..' . '/lib/WP_Auth0_Api_Operations.php',
        'WP_Auth0_Api_Refresh_Access_Token' => __DIR__ . '/../..' . '/lib/api/WP_Auth0_Api_Refresh_Access_Token.php',
        'WP_Auth0_AsymmetricVerifier' => __DIR__ . '/../..' . '/lib/token-verifier/WP_Auth0_AsymmetricVerifier.php',
        'WP_Auth0_BeforeLoginException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_BeforeLoginException.php',
        'WP_Auth0_CouldNotCreateUserException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_CouldNotCreateUserException.php',
        'WP_Auth0_DBManager' => __DIR__ . '/../..' . '/lib/WP_Auth0_DBManager.php',
        'WP_Auth0_EmailNotVerifiedException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_EmailNotVerifiedException.php',
        'WP_Auth0_Email_Verification' => __DIR__ . '/../..' . '/lib/WP_Auth0_Email_Verification.php',
        'WP_Auth0_Embed_Widget' => __DIR__ . '/../..' . '/lib/WP_Auth0_Embed_Widget.php',
        'WP_Auth0_ErrorLog' => __DIR__ . '/../..' . '/lib/WP_Auth0_ErrorLog.php',
        'WP_Auth0_IdTokenVerifier' => __DIR__ . '/../..' . '/lib/token-verifier/WP_Auth0_IdTokenVerifier.php',
        'WP_Auth0_Import_Settings' => __DIR__ . '/../..' . '/lib/WP_Auth0_Import_Settings.php',
        'WP_Auth0_InitialSetup' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup.php',
        'WP_Auth0_InitialSetup_AdminUser' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup_AdminUser.php',
        'WP_Auth0_InitialSetup_ConnectionProfile' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup_ConnectionProfile.php',
        'WP_Auth0_InitialSetup_Connections' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup_Connections.php',
        'WP_Auth0_InitialSetup_Consent' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup_Consent.php',
        'WP_Auth0_InitialSetup_End' => __DIR__ . '/../..' . '/lib/initial-setup/WP_Auth0_InitialSetup_End.php',
        'WP_Auth0_InvalidIdTokenException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_InvalidIdTokenException.php',
        'WP_Auth0_Ip_Check' => __DIR__ . '/../..' . '/lib/WP_Auth0_Ip_Check.php',
        'WP_Auth0_JwksFetcher' => __DIR__ . '/../..' . '/lib/token-verifier/WP_Auth0_JwksFetcher.php',
        'WP_Auth0_Lock' => __DIR__ . '/../..' . '/lib/WP_Auth0_Lock.php',
        'WP_Auth0_LoginFlowValidationException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_LoginFlowValidationException.php',
        'WP_Auth0_LoginManager' => __DIR__ . '/../..' . '/lib/WP_Auth0_LoginManager.php',
        'WP_Auth0_Nonce_Handler' => __DIR__ . '/../..' . '/lib/WP_Auth0_Nonce_Handler.php',
        'WP_Auth0_Options' => __DIR__ . '/../..' . '/lib/WP_Auth0_Options.php',
        'WP_Auth0_Popup_Widget' => __DIR__ . '/../..' . '/lib/WP_Auth0_Popup_Widget.php',
        'WP_Auth0_Profile_Change_Email' => __DIR__ . '/../..' . '/lib/profile/WP_Auth0_Profile_Change_Email.php',
        'WP_Auth0_Profile_Change_Password' => __DIR__ . '/../..' . '/lib/profile/WP_Auth0_Profile_Change_Password.php',
        'WP_Auth0_Profile_Delete_Data' => __DIR__ . '/../..' . '/lib/profile/WP_Auth0_Profile_Delete_Data.php',
        'WP_Auth0_RegistrationNotEnabledException' => __DIR__ . '/../..' . '/lib/exceptions/WP_Auth0_RegistrationNotEnabledException.php',
        'WP_Auth0_Routes' => __DIR__ . '/../..' . '/lib/WP_Auth0_Routes.php',
        'WP_Auth0_Serializer' => __DIR__ . '/../..' . '/lib/WP_Auth0_Serializer.php',
        'WP_Auth0_SignatureVerifier' => __DIR__ . '/../..' . '/lib/token-verifier/WP_Auth0_SignatureVerifier.php',
        'WP_Auth0_State_Handler' => __DIR__ . '/../..' . '/lib/WP_Auth0_State_Handler.php',
        'WP_Auth0_SymmetricVerifier' => __DIR__ . '/../..' . '/lib/token-verifier/WP_Auth0_SymmetricVerifier.php',
        'WP_Auth0_Users' => __DIR__ . '/../..' . '/lib/WP_Auth0_Users.php',
        'WP_Auth0_UsersRepo' => __DIR__ . '/../..' . '/lib/WP_Auth0_UsersRepo.php',
        'WP_Auth0_WooCommerceOverrides' => __DIR__ . '/../..' . '/lib/WP_Auth0_WooCommerceOverrides.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9f1e0e5e3b2a4d641d2bd979a94c49c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9f1e0e5e3b2a4d641d2bd979a94c49c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9f1e0e5e3b2a4d641d2bd979a94c49c::$classMap;

        }, null, ClassLoader::class);
    }
}
