<?php

namespace App\Models;


class Member
{
    private static $member = [
        [
            "nama" => "M Farhan Maulana Nasution",
            "jabatan" => "Ketua",
            "instagram" => "https://www.instagram.com/farhan.nstt/",
            "facebook" => "https://www.facebook.com/profile.php?id=100008880211139",
            "image" => "farhan.jpg"
        ],
        [
            "nama" => "Aulia Rafli",
            "jabatan" => "Wakil Ketua",
            "instagram" => "https://www.instagram.com/aulia.rafli/",
            "facebook" => "https://www.facebook.com/aulia.rafli.94",
            "image" => "rafli.jpg"
        ],
        [
            "nama" => "Armadhani Hiro Juni Permana",
            "jabatan" => "Sekretaris",
            "instagram" => "https://www.instagram.com/armadhani_hiro/",
            "facebook" => "https://www.facebook.com/armadhanihiro2/",
            "image" => "hiro.jpeg"
        ],
        [
            "nama" => "Dio Saputra",
            "jabatan" => "Bendahara",
            "instagram" => "https://www.instagram.com/diosaputrraa/",
            "facebook" => "https://www.facebook.com/dio.saputra.39904181",
            "image" => "dio.jpg"
        ],
        [
            "nama" => "Rizky Agil Gusmantoro",
            "jabatan" => "Humas",
            "instagram" => "https://www.instagram.com/rizkyagil37/",
            "facebook" => "https://www.facebook.com/rizky.agil.319",
            "image" => "agil.jpg"
        ],
    ];

    public static function all() {
        return self::$member;
    }
}
