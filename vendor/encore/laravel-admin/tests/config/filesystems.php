<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'public',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */
    'admin' => [ 'driver' => 'local', 'root' => storage_path('app/public'), 'url' => env('APP_URL').'/storage', 'visibility' => 'public', ],

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root'   => storage_path('app'),
        ],

        'public' => [
            'driver'     => 'local',
            'root'       => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key'    => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

        'admin' => [
            'driver'     => 'local',
            'root'       => public_path('uploads'),
            'visibility' => 'public',
            'url'        => 'http://localhost:8000/uploads/',
        ],

        'qiniu' => [
            'driver'  => 'qiniu',
            'domains' => [
                'default' => 'of8kfibjo.bkt.clouddn.com', //??????????????????
                'https'   => 'dn-yourdomain.qbox.me',         //??????HTTPS??????
                'custom'  => 'static.abc.com',                //?????????????????????
            ],
            'access_key' => 'tIyz5h5IDT1-PQS22iRrI4dCBEktWj76O-ls856K',  //AccessKey
            'secret_key' => 'TCU2GuSlbzxKgnixYO_-pdo4odbXttm1RNNvEwSD',  //SecretKey
            'bucket'     => 'laravel',  //Bucket??????
            'notify_url' => '',  //???????????????????????????
        ],

        'aliyun' => [
            'driver'     => 'oss',
            'access_id'  => 'LTAIsOQNIDQN78Jr',
            'access_key' => 'ChsYewaCxm1mi7AIBPRniuncEbFHNO',
            'bucket'     => 'laravel-admin',
            'endpoint'   => 'oss-cn-shanghai.aliyuncs.com',
        ],

    ],

];
