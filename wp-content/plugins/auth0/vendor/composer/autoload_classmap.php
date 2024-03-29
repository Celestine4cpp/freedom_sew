<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Lcobucci\\JWT\\Builder' => $vendorDir . '/lcobucci/jwt/src/Builder.php',
    'Lcobucci\\JWT\\Claim' => $vendorDir . '/lcobucci/jwt/src/Claim.php',
    'Lcobucci\\JWT\\Claim\\Basic' => $vendorDir . '/lcobucci/jwt/src/Claim/Basic.php',
    'Lcobucci\\JWT\\Claim\\EqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/EqualsTo.php',
    'Lcobucci\\JWT\\Claim\\Factory' => $vendorDir . '/lcobucci/jwt/src/Claim/Factory.php',
    'Lcobucci\\JWT\\Claim\\GreaterOrEqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/GreaterOrEqualsTo.php',
    'Lcobucci\\JWT\\Claim\\LesserOrEqualsTo' => $vendorDir . '/lcobucci/jwt/src/Claim/LesserOrEqualsTo.php',
    'Lcobucci\\JWT\\Claim\\Validatable' => $vendorDir . '/lcobucci/jwt/src/Claim/Validatable.php',
    'Lcobucci\\JWT\\Parser' => $vendorDir . '/lcobucci/jwt/src/Parser.php',
    'Lcobucci\\JWT\\Parsing\\Decoder' => $vendorDir . '/lcobucci/jwt/src/Parsing/Decoder.php',
    'Lcobucci\\JWT\\Parsing\\Encoder' => $vendorDir . '/lcobucci/jwt/src/Parsing/Encoder.php',
    'Lcobucci\\JWT\\Signature' => $vendorDir . '/lcobucci/jwt/src/Signature.php',
    'Lcobucci\\JWT\\Signer' => $vendorDir . '/lcobucci/jwt/src/Signer.php',
    'Lcobucci\\JWT\\Signer\\BaseSigner' => $vendorDir . '/lcobucci/jwt/src/Signer/BaseSigner.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\MultibyteStringConverter' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/MultibyteStringConverter.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/Sha512.php',
    'Lcobucci\\JWT\\Signer\\Ecdsa\\SignatureConverter' => $vendorDir . '/lcobucci/jwt/src/Signer/Ecdsa/SignatureConverter.php',
    'Lcobucci\\JWT\\Signer\\Hmac' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Hmac\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Hmac/Sha512.php',
    'Lcobucci\\JWT\\Signer\\Key' => $vendorDir . '/lcobucci/jwt/src/Signer/Key.php',
    'Lcobucci\\JWT\\Signer\\Keychain' => $vendorDir . '/lcobucci/jwt/src/Signer/Keychain.php',
    'Lcobucci\\JWT\\Signer\\OpenSSL' => $vendorDir . '/lcobucci/jwt/src/Signer/OpenSSL.php',
    'Lcobucci\\JWT\\Signer\\Rsa' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha256' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha256.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha384' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha384.php',
    'Lcobucci\\JWT\\Signer\\Rsa\\Sha512' => $vendorDir . '/lcobucci/jwt/src/Signer/Rsa/Sha512.php',
    'Lcobucci\\JWT\\Token' => $vendorDir . '/lcobucci/jwt/src/Token.php',
    'Lcobucci\\JWT\\ValidationData' => $vendorDir . '/lcobucci/jwt/src/ValidationData.php',
    'WP_Auth0_Admin' => $baseDir . '/lib/admin/WP_Auth0_Admin.php',
    'WP_Auth0_Admin_Advanced' => $baseDir . '/lib/admin/WP_Auth0_Admin_Advanced.php',
    'WP_Auth0_Admin_Appearance' => $baseDir . '/lib/admin/WP_Auth0_Admin_Appearance.php',
    'WP_Auth0_Admin_Basic' => $baseDir . '/lib/admin/WP_Auth0_Admin_Basic.php',
    'WP_Auth0_Admin_Features' => $baseDir . '/lib/admin/WP_Auth0_Admin_Features.php',
    'WP_Auth0_Admin_Generic' => $baseDir . '/lib/admin/WP_Auth0_Admin_Generic.php',
    'WP_Auth0_Api_Abstract' => $baseDir . '/lib/api/WP_Auth0_Api_Abstract.php',
    'WP_Auth0_Api_Change_Email' => $baseDir . '/lib/api/WP_Auth0_Api_Change_Email.php',
    'WP_Auth0_Api_Change_Password' => $baseDir . '/lib/api/WP_Auth0_Api_Change_Password.php',
    'WP_Auth0_Api_Client' => $baseDir . '/lib/WP_Auth0_Api_Client.php',
    'WP_Auth0_Api_Client_Credentials' => $baseDir . '/lib/api/WP_Auth0_Api_Client_Credentials.php',
    'WP_Auth0_Api_Exchange_Code' => $baseDir . '/lib/api/WP_Auth0_Api_Exchange_Code.php',
    'WP_Auth0_Api_Get_Jwks' => $baseDir . '/lib/api/WP_Auth0_Api_Get_Jwks.php',
    'WP_Auth0_Api_Get_User' => $baseDir . '/lib/api/WP_Auth0_Api_Get_User.php',
    'WP_Auth0_Api_Jobs_Verification' => $baseDir . '/lib/api/WP_Auth0_Api_Jobs_Verification.php',
    'WP_Auth0_Api_Operations' => $baseDir . '/lib/WP_Auth0_Api_Operations.php',
    'WP_Auth0_Api_Refresh_Access_Token' => $baseDir . '/lib/api/WP_Auth0_Api_Refresh_Access_Token.php',
    'WP_Auth0_AsymmetricVerifier' => $baseDir . '/lib/token-verifier/WP_Auth0_AsymmetricVerifier.php',
    'WP_Auth0_BeforeLoginException' => $baseDir . '/lib/exceptions/WP_Auth0_BeforeLoginException.php',
    'WP_Auth0_CouldNotCreateUserException' => $baseDir . '/lib/exceptions/WP_Auth0_CouldNotCreateUserException.php',
    'WP_Auth0_DBManager' => $baseDir . '/lib/WP_Auth0_DBManager.php',
    'WP_Auth0_EmailNotVerifiedException' => $baseDir . '/lib/exceptions/WP_Auth0_EmailNotVerifiedException.php',
    'WP_Auth0_Email_Verification' => $baseDir . '/lib/WP_Auth0_Email_Verification.php',
    'WP_Auth0_Embed_Widget' => $baseDir . '/lib/WP_Auth0_Embed_Widget.php',
    'WP_Auth0_ErrorLog' => $baseDir . '/lib/WP_Auth0_ErrorLog.php',
    'WP_Auth0_IdTokenVerifier' => $baseDir . '/lib/token-verifier/WP_Auth0_IdTokenVerifier.php',
    'WP_Auth0_Import_Settings' => $baseDir . '/lib/WP_Auth0_Import_Settings.php',
    'WP_Auth0_InitialSetup' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup.php',
    'WP_Auth0_InitialSetup_AdminUser' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup_AdminUser.php',
    'WP_Auth0_InitialSetup_ConnectionProfile' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup_ConnectionProfile.php',
    'WP_Auth0_InitialSetup_Connections' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup_Connections.php',
    'WP_Auth0_InitialSetup_Consent' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup_Consent.php',
    'WP_Auth0_InitialSetup_End' => $baseDir . '/lib/initial-setup/WP_Auth0_InitialSetup_End.php',
    'WP_Auth0_InvalidIdTokenException' => $baseDir . '/lib/exceptions/WP_Auth0_InvalidIdTokenException.php',
    'WP_Auth0_Ip_Check' => $baseDir . '/lib/WP_Auth0_Ip_Check.php',
    'WP_Auth0_JwksFetcher' => $baseDir . '/lib/token-verifier/WP_Auth0_JwksFetcher.php',
    'WP_Auth0_Lock' => $baseDir . '/lib/WP_Auth0_Lock.php',
    'WP_Auth0_LoginFlowValidationException' => $baseDir . '/lib/exceptions/WP_Auth0_LoginFlowValidationException.php',
    'WP_Auth0_LoginManager' => $baseDir . '/lib/WP_Auth0_LoginManager.php',
    'WP_Auth0_Nonce_Handler' => $baseDir . '/lib/WP_Auth0_Nonce_Handler.php',
    'WP_Auth0_Options' => $baseDir . '/lib/WP_Auth0_Options.php',
    'WP_Auth0_Popup_Widget' => $baseDir . '/lib/WP_Auth0_Popup_Widget.php',
    'WP_Auth0_Profile_Change_Email' => $baseDir . '/lib/profile/WP_Auth0_Profile_Change_Email.php',
    'WP_Auth0_Profile_Change_Password' => $baseDir . '/lib/profile/WP_Auth0_Profile_Change_Password.php',
    'WP_Auth0_Profile_Delete_Data' => $baseDir . '/lib/profile/WP_Auth0_Profile_Delete_Data.php',
    'WP_Auth0_RegistrationNotEnabledException' => $baseDir . '/lib/exceptions/WP_Auth0_RegistrationNotEnabledException.php',
    'WP_Auth0_Routes' => $baseDir . '/lib/WP_Auth0_Routes.php',
    'WP_Auth0_Serializer' => $baseDir . '/lib/WP_Auth0_Serializer.php',
    'WP_Auth0_SignatureVerifier' => $baseDir . '/lib/token-verifier/WP_Auth0_SignatureVerifier.php',
    'WP_Auth0_State_Handler' => $baseDir . '/lib/WP_Auth0_State_Handler.php',
    'WP_Auth0_SymmetricVerifier' => $baseDir . '/lib/token-verifier/WP_Auth0_SymmetricVerifier.php',
    'WP_Auth0_Users' => $baseDir . '/lib/WP_Auth0_Users.php',
    'WP_Auth0_UsersRepo' => $baseDir . '/lib/WP_Auth0_UsersRepo.php',
    'WP_Auth0_WooCommerceOverrides' => $baseDir . '/lib/WP_Auth0_WooCommerceOverrides.php',
);
