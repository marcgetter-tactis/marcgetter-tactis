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
    'metadata-set' => 'saml20-sp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                    'index' => 0,
                    'isDefault' => true,
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                    'index' => 1,
                ),
            2 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://dojsts1.idms.justice.gov/adfs/ls/',
                    'index' => 2,
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
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
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
    'saml20.sign.assertion' => true,
);