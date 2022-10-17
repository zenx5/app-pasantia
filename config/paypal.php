<?php
return array(
    // set your paypal credential
    'client_id' => 'ARjr7RrDMHfsobnilc7QmnLezaC38P2ijgrkapd7P_cr0Vnt97hY_17zEC95nq137AnEodmvq4i8ETQb',
    'secret' => 'EAM7wSALZbtuOS6tIiVAcIomG_58yMeiGDsUhv6gm7wCISjMtvOculd2pi5MWfKSoHmmC68Pfmv8R9Lm',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'

    ),
);