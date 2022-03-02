<?php

$config = [
    'admin' => [
        'core:AdminPassword',
    ],
    'default-sp' => [
        'saml:SP',
        'privatekey' => '../certs/saml.pem',
        'certificate' => '../certs/saml.crt',
        'entityid' => 'http://dojsts1-t.idms.justice.gov/adfs/services/trust',
        'idp' => 'http://dojsts1-t.idms.justice.gov/adfs/services/trust',
    ],
    'prod-sp' => [
        'saml:SP',
        'privatekey' => '../certs/saml.pem',
        'certificate' => '../certs/saml.crt',
        'entityid' => 'http://dojsts1.idms.justice.gov/adfs/services/trust',
        'idp' => 'http://dojsts1.idms.justice.gov/adfs/services/trust',
    ],
];