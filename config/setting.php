<?php

return [
    'roles' =>[
        'Admin', 'Cleaner','User'
    ],

    'users' => [
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'Admin',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ],
        [
            'name' => 'Cleaner',
            'email' => 'Cleaner@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'Cleaner',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ],
        [
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => '11112222',
            'phone' => '0966855502',
            'sex' => 'Male',
            'date_of_birth' => '2000-09-23',
            'role' => 'User',
            'image' => 'https://ps.w.org/metronet-profile-picture/assets/icon-128x128.png?rev=2464419',
        ]
    ],
    'services' => [
        [
            'name' => 'Day',
            'title' => 'A small river named Duden flows by their place and supplies.',
            'image' => 'https://content.tinytap.it/9C451F0A-7A2F-46A4-9374-256170F99113/unzipped%2Fphoto1%2Fphoto1phone.jpg',
            'price' => '10',
            'time_line' => '1 day'
        ],
        [
            'name' => 'Month',
            'title' => 'A small river named Duden flows by their place and supplies.',
            'image' => 'https://planomoms.com/wp-content/uploads/2021/03/House-Cleaning-service.jpg',
            'price' => '100',
            'time_line' => '1 Month'
        ],
        [
            'name' => 'Year',
            'title' => 'A small river named Duden flows by their place and supplies.',
            'image' => 'https://s.marketwatch.com/public/resources/images/MW-BM466_pfhous_MG_20131003164731.jpg',
            'price' => '1000',
            'time_line' => '1 Year'
        ]
    ],
    'status' => [
      'Pending','Approved','Done','Rejected'
    ],


];
