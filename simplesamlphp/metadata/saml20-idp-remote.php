<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['http://dojsts1.idms.justice.gov/adfs/services/trust'] = array (
    'entityid' => 'http://dojsts1.idms.justice.gov/adfs/services/trust',
    'contacts' =>
        array (
            0 =>
                array (
                    'contactType' => 'support',
                ),
        ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                ),
        ),
    'SingleLogoutService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                ),
        ),
    'ArtifactResolutionService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/services/trust/artifactresolution',
                    'index' => 0,
                ),
        ),
    'NameIDFormats' =>
        array (
            0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
            1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
            2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => true,
                    'signing' => false,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIID3zCCAsegAwIBAgIQYbAgeM+ykLBHWyI6j9L0gTANBgkqhkiG9w0BAQsFADBtMRMwEQYKCZImiZPyLGQBGRYDZ292MRcwFQYKCZImiZPyLGQBGRYHanVzdGljZTEUMBIGCgmSJomT8ixkARkWBGlkbXMxJzAlBgNVBAMMHmRvanN0czEtdG9rZW4uaWRtcy5qdXN0aWNlLmdvdjAeFw0yMTEwMDQxNDQ0MDhaFw0yNDEwMDQxNDU0MDFaMG0xEzARBgoJkiaJk/IsZAEZFgNnb3YxFzAVBgoJkiaJk/IsZAEZFgdqdXN0aWNlMRQwEgYKCZImiZPyLGQBGRYEaWRtczEnMCUGA1UEAwweZG9qc3RzMS10b2tlbi5pZG1zLmp1c3RpY2UuZ292MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1M7pCSgdAqSPgylG6sHe3u6hnSPG1MycLFB1aENsDcz5ti06tT0M6rK5eBUV3jSVZcca9DP5MU5NgdbaWYBjW8AeI9zz+IRxzT4gnVV4xIppH8XshVh54/ekaTb8sfu9jLS/spfu8CaO064xl6Od8XWKtSqQLpM8J41YFX65LkXPYamF7uppU3Utt/WjlOzU9aSEot57oUujrA5ALRd/OYa855L5tQAMaN6+7uDmLzMTrdc5OmSVtI8ro8DSybMLnjWsIfc2p1HpQBChwN8ID3nVLoX0YO0nA1B8umLOdHDY+vtPp2wbX9Y7o11wpM9a6gEKtzFoZ43TcFcX0vTvUQIDAQABo3sweTAOBgNVHQ8BAf8EBAMCBaAwKQYDVR0RBCIwIIIeZG9qc3RzMS10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB0GA1UdJQQWMBQGCCsGAQUFBwMCBggrBgEFBQcDATAdBgNVHQ4EFgQUM+gByVE0q8oN7x9IhsKJuJgCeHEwDQYJKoZIhvcNAQELBQADggEBAANOTrrkYOBH63PXS2rQ0C5APGVVgsX4mNonxEZgV+HL6AvQt7YDJnzuUcX0Tp6MHp1cx0yEaIAH/uQ3u+Dm+RcearbXD1BFvoPh8XikLBvEk7oNWtDQZK5y795Blt+TJ/Mbk7IHJHjqr2BbhV0ONVTGneeDPwrYtYM3h3HBMA7UwzzkP9VCAykGhM5aCHHw5BgJfZSbHArN2PNgcxousc7l3TsxczqkPtmzC7Jiot362VdJURl1Ym6lkt2WZXZNCROSGHKT5lE48ZFDZJNz2BNwbsA+czZyi4SJW27AWhQdMLQKV1/ZElVrXMTztQi36uNV+qU0z2ueVLFdZmCKcLk=',
                ),
            1 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIID3zCCAsegAwIBAgIQYbAgeM+ykLBHWyI6j9L0gTANBgkqhkiG9w0BAQsFADBtMRMwEQYKCZImiZPyLGQBGRYDZ292MRcwFQYKCZImiZPyLGQBGRYHanVzdGljZTEUMBIGCgmSJomT8ixkARkWBGlkbXMxJzAlBgNVBAMMHmRvanN0czEtdG9rZW4uaWRtcy5qdXN0aWNlLmdvdjAeFw0yMTEwMDQxNDQ0MDhaFw0yNDEwMDQxNDU0MDFaMG0xEzARBgoJkiaJk/IsZAEZFgNnb3YxFzAVBgoJkiaJk/IsZAEZFgdqdXN0aWNlMRQwEgYKCZImiZPyLGQBGRYEaWRtczEnMCUGA1UEAwweZG9qc3RzMS10b2tlbi5pZG1zLmp1c3RpY2UuZ292MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1M7pCSgdAqSPgylG6sHe3u6hnSPG1MycLFB1aENsDcz5ti06tT0M6rK5eBUV3jSVZcca9DP5MU5NgdbaWYBjW8AeI9zz+IRxzT4gnVV4xIppH8XshVh54/ekaTb8sfu9jLS/spfu8CaO064xl6Od8XWKtSqQLpM8J41YFX65LkXPYamF7uppU3Utt/WjlOzU9aSEot57oUujrA5ALRd/OYa855L5tQAMaN6+7uDmLzMTrdc5OmSVtI8ro8DSybMLnjWsIfc2p1HpQBChwN8ID3nVLoX0YO0nA1B8umLOdHDY+vtPp2wbX9Y7o11wpM9a6gEKtzFoZ43TcFcX0vTvUQIDAQABo3sweTAOBgNVHQ8BAf8EBAMCBaAwKQYDVR0RBCIwIIIeZG9qc3RzMS10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB0GA1UdJQQWMBQGCCsGAQUFBwMCBggrBgEFBQcDATAdBgNVHQ4EFgQUM+gByVE0q8oN7x9IhsKJuJgCeHEwDQYJKoZIhvcNAQELBQADggEBAANOTrrkYOBH63PXS2rQ0C5APGVVgsX4mNonxEZgV+HL6AvQt7YDJnzuUcX0Tp6MHp1cx0yEaIAH/uQ3u+Dm+RcearbXD1BFvoPh8XikLBvEk7oNWtDQZK5y795Blt+TJ/Mbk7IHJHjqr2BbhV0ONVTGneeDPwrYtYM3h3HBMA7UwzzkP9VCAykGhM5aCHHw5BgJfZSbHArN2PNgcxousc7l3TsxczqkPtmzC7Jiot362VdJURl1Ym6lkt2WZXZNCROSGHKT5lE48ZFDZJNz2BNwbsA+czZyi4SJW27AWhQdMLQKV1/ZElVrXMTztQi36uNV+qU0z2ueVLFdZmCKcLk=',
                ),
        ),
);
// Test/Dev.
$metadata['http://dojsts1-t.idms.justice.gov/adfs/services/trust'] = array (
    'entityid' => 'http://dojsts1-t.idms.justice.gov/adfs/services/trust',
    'contacts' =>
        array (
            0 =>
                array (
                    'contactType' => 'support',
                    'emailAddress' =>
                        array (
                            0 => '',
                        ),
                    'telephoneNumber' =>
                        array (
                            0 => '',
                        ),
                ),
        ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dojsts1-t.idms.justice.gov/adfs/ls/',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dojsts1-t.idms.justice.gov/adfs/ls/',
                ),
        ),
    'SingleLogoutService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dojsts1-t.idms.justice.gov/adfs/ls/',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dojsts1-t.idms.justice.gov/adfs/ls/',
                ),
        ),
    'ArtifactResolutionService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                    'Location' => 'https://dojsts1-t.idms.justice.gov/adfs/services/trust/artifactresolution',
                    'index' => 0,
                ),
        ),
    'NameIDFormats' =>
        array (
            0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
            1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
            2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => true,
                    'signing' => false,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIID5TCCAs2gAwIBAgIQHdL4IqMv6rFKIzaJHVytwjANBgkqhkiG9w0BAQsFADBvMRMwEQYKCZImiZPyLGQBGRYDZ292MRcwFQYKCZImiZPyLGQBGRYHanVzdGljZTEUMBIGCgmSJomT8ixkARkWBGlkbXMxKTAnBgNVBAMMIGRvanN0czEtdC10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB4XDTIxMTAwNDE0MzAwOFoXDTI0MTAwNDE0NDAwMFowbzETMBEGCgmSJomT8ixkARkWA2dvdjEXMBUGCgmSJomT8ixkARkWB2p1c3RpY2UxFDASBgoJkiaJk/IsZAEZFgRpZG1zMSkwJwYDVQQDDCBkb2pzdHMxLXQtdG9rZW4uaWRtcy5qdXN0aWNlLmdvdjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK4+Dxy1BrIttEjk0Xa1i+mVyE8tMAZtYmLFf8zwHgEK0fUhEYhaudatjfPmPmlUEaMSlZ8ZwfmOKyGiLWasaSguG/Zw/X6SIv907KvO+TnxmIocHCnYZ7takLdwKa9TDEqA5uibh/AUaKjOasXOh0nyZmuqZmu8guDSFW0RUW8Ejk5MpnmQkLrXBJDS1ZO6/hIC8RxwnXbYNRak+Q0B7exXopRLS8i22xlq+0M86ONejG+xMXxo9Y7G0UzmpotfGMcxR+70zIEvu4o7H4Dcnr4dBc9bb4oiHUujMo6l0GVWyGj82Ld7HiEpK+oiTvoUGIxhFBtpzgGI96Z9KLEKU7kCAwEAAaN9MHswDgYDVR0PAQH/BAQDAgWgMCsGA1UdEQQkMCKCIGRvanN0czEtdC10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB0GA1UdJQQWMBQGCCsGAQUFBwMCBggrBgEFBQcDATAdBgNVHQ4EFgQUQWOTXD8kRyKqCW63+L/anV2HbXUwDQYJKoZIhvcNAQELBQADggEBADklGllFTnb5u6RXjA2Jc6uJEZv49DatGgcoYHlapSblGtMe4+F0Op8DQoXFsR4oKULFiGJu4phLIHC834Mri90swMIvWUhQez0Vn/6PBkgg5d4tMZ3lNe4pUExXCxVI8uPhJ36h8rFy4kTIuxz+bn5Szz7mksxMzNm0h20EzGWSpWmBRc4uzvhM6Dq5CrforPUnolZTzFs8RgNSo2sx5SY/C1cTElQc/i6iNykO9ZUsrGAv5uy+ukDrHN/qQSAGbzHWr2bsbScYuprAX5DrLRcxV0j1EX6viISE7FNsU7D2ecEatQTTBmZkxbd36bgZDN17qxkDBltQeQqX9FfPDIc=',
                ),
            1 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => 'MIID5TCCAs2gAwIBAgIQHdL4IqMv6rFKIzaJHVytwjANBgkqhkiG9w0BAQsFADBvMRMwEQYKCZImiZPyLGQBGRYDZ292MRcwFQYKCZImiZPyLGQBGRYHanVzdGljZTEUMBIGCgmSJomT8ixkARkWBGlkbXMxKTAnBgNVBAMMIGRvanN0czEtdC10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB4XDTIxMTAwNDE0MzAwOFoXDTI0MTAwNDE0NDAwMFowbzETMBEGCgmSJomT8ixkARkWA2dvdjEXMBUGCgmSJomT8ixkARkWB2p1c3RpY2UxFDASBgoJkiaJk/IsZAEZFgRpZG1zMSkwJwYDVQQDDCBkb2pzdHMxLXQtdG9rZW4uaWRtcy5qdXN0aWNlLmdvdjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK4+Dxy1BrIttEjk0Xa1i+mVyE8tMAZtYmLFf8zwHgEK0fUhEYhaudatjfPmPmlUEaMSlZ8ZwfmOKyGiLWasaSguG/Zw/X6SIv907KvO+TnxmIocHCnYZ7takLdwKa9TDEqA5uibh/AUaKjOasXOh0nyZmuqZmu8guDSFW0RUW8Ejk5MpnmQkLrXBJDS1ZO6/hIC8RxwnXbYNRak+Q0B7exXopRLS8i22xlq+0M86ONejG+xMXxo9Y7G0UzmpotfGMcxR+70zIEvu4o7H4Dcnr4dBc9bb4oiHUujMo6l0GVWyGj82Ld7HiEpK+oiTvoUGIxhFBtpzgGI96Z9KLEKU7kCAwEAAaN9MHswDgYDVR0PAQH/BAQDAgWgMCsGA1UdEQQkMCKCIGRvanN0czEtdC10b2tlbi5pZG1zLmp1c3RpY2UuZ292MB0GA1UdJQQWMBQGCCsGAQUFBwMCBggrBgEFBQcDATAdBgNVHQ4EFgQUQWOTXD8kRyKqCW63+L/anV2HbXUwDQYJKoZIhvcNAQELBQADggEBADklGllFTnb5u6RXjA2Jc6uJEZv49DatGgcoYHlapSblGtMe4+F0Op8DQoXFsR4oKULFiGJu4phLIHC834Mri90swMIvWUhQez0Vn/6PBkgg5d4tMZ3lNe4pUExXCxVI8uPhJ36h8rFy4kTIuxz+bn5Szz7mksxMzNm0h20EzGWSpWmBRc4uzvhM6Dq5CrforPUnolZTzFs8RgNSo2sx5SY/C1cTElQc/i6iNykO9ZUsrGAv5uy+ukDrHN/qQSAGbzHWr2bsbScYuprAX5DrLRcxV0j1EX6viISE7FNsU7D2ecEatQTTBmZkxbd36bgZDN17qxkDBltQeQqX9FfPDIc=',
                ),
        ),
);