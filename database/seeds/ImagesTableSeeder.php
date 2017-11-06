<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'user_id' => 1,
                'name' => '3sj1TeoL6HL09nPktQulHnhcwUXgvpwJmzRMf51v.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:23:59',
                'updated_at' => '2017-11-02 17:23:59',
            ),
            1 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'VV1xiNlGP4cL9NfIgihfqzaJA2bi78yeL5nUTQLV.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:06',
                'updated_at' => '2017-11-02 17:24:06',
            ),
            2 => 
            array (
                'id' => 14,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'BfDDgBAHcvkE6mQGwfWKXfeIfCl83ILXIBo6Pe8q.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:13',
                'updated_at' => '2017-11-02 17:24:13',
            ),
            3 => 
            array (
                'id' => 15,
                'category_id' => 1,
                'user_id' => 1,
                'name' => '3MSTnvfn75zX33rWrR3Ws6GlofNEnoZeyr2OgUKM.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:24:22',
                'updated_at' => '2017-11-02 17:24:22',
            ),
            4 => 
            array (
                'id' => 16,
                'category_id' => 1,
                'user_id' => 1,
                'name' => '2UjOECak0kwKsJ2cccxuhWTtyEBhYNIM5wWDyZqH.jpeg',
                'description' => 'La mer',
                'created_at' => '2017-11-02 17:24:33',
                'updated_at' => '2017-11-02 17:24:33',
            ),
            5 => 
            array (
                'id' => 17,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'sz2yd6NfuoMNr00WTRptvmwYFmKwo0tJDqtcFGe2.jpeg',
                'description' => 'L\'herbe',
                'created_at' => '2017-11-02 17:24:44',
                'updated_at' => '2017-11-02 17:24:44',
            ),
            6 => 
            array (
                'id' => 18,
                'category_id' => 1,
                'user_id' => 1,
                'name' => '4sWqRZUpPXy116xDzIHQ0Qhv2mXz23gf8SXGNbap.jpeg',
                'description' => 'Sinuosité',
                'created_at' => '2017-11-02 17:24:54',
                'updated_at' => '2017-11-02 17:24:54',
            ),
            7 => 
            array (
                'id' => 19,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'wmOGR8ux0Pm3zn0WCzXCotdoApFDAbKr9dnqyloN.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:25:03',
                'updated_at' => '2017-11-02 17:25:03',
            ),
            8 => 
            array (
                'id' => 20,
                'category_id' => 1,
                'user_id' => 1,
                'name' => '6r8AoqKWgpCDYxAh78StInTEwGARuhF73zu6bpcj.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:25:08',
                'updated_at' => '2017-11-02 17:25:08',
            ),
            9 => 
            array (
                'id' => 21,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'mXaC2iOUcB4HBlEpCdE4MObRbslB5DeFe2YJB19u.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:26:12',
                'updated_at' => '2017-11-02 17:26:12',
            ),
            10 => 
            array (
                'id' => 22,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'gBQ6AQG7IPkFk2GwJUwBkkjA3hQhqch2q0XVCzGV.jpeg',
                'description' => 'Une belle maison',
                'created_at' => '2017-11-02 17:26:30',
                'updated_at' => '2017-11-02 17:26:30',
            ),
            11 => 
            array (
                'id' => 23,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'y9Ts9KwWcItVzsdm7qMmQ1PYQxSdSkagbiX9AJTv.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:26:42',
                'updated_at' => '2017-11-02 17:26:42',
            ),
            12 => 
            array (
                'id' => 24,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'P3ZzfsbzFo7yIdxlDZrSftK98OoduvN21yLuvlZL.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:26:48',
                'updated_at' => '2017-11-02 17:26:48',
            ),
            13 => 
            array (
                'id' => 25,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'yRxsYGSbamfRgqZNDiPEvaBDxwK34M0zC3phlGJ3.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:26:55',
                'updated_at' => '2017-11-02 17:26:55',
            ),
            14 => 
            array (
                'id' => 26,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'rSCTOastoigOjZhW4sx7nFVj5LaYLn2ySBnlgYrR.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:27:03',
                'updated_at' => '2017-11-02 17:27:03',
            ),
            15 => 
            array (
                'id' => 27,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'JUCMBZC6ASfZYwkTYBUxxhLkFTqzqAhSK4FplErG.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:27:10',
                'updated_at' => '2017-11-02 17:27:10',
            ),
            16 => 
            array (
                'id' => 28,
                'category_id' => 2,
                'user_id' => 2,
                'name' => 'Js3ySYSWZ1asA83MoYXwScXbxsmm5tqkWQi53qIv.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:27:17',
                'updated_at' => '2017-11-02 17:27:17',
            ),
            17 => 
            array (
                'id' => 29,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'qWPiahkNQELGY0blXoGJZlKKzZOmRJwCwVSehI1w.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:28:00',
                'updated_at' => '2017-11-02 17:28:00',
            ),
            18 => 
            array (
                'id' => 30,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'YBJeUe497lXvBLGZT4cgXAhKTLTsERXE3ajIJ3Re.jpeg',
                'description' => 'De jolis enfants',
                'created_at' => '2017-11-02 17:28:12',
                'updated_at' => '2017-11-02 17:28:12',
            ),
            19 => 
            array (
                'id' => 31,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'zmBN6b2OUBTTop8xZ5QIiV3UY7APIcO6yEGWQA6y.jpeg',
                'description' => 'Surprenant',
                'created_at' => '2017-11-02 17:28:23',
                'updated_at' => '2017-11-02 17:28:23',
            ),
            20 => 
            array (
                'id' => 32,
                'category_id' => 3,
                'user_id' => 2,
                'name' => '3HbilNZTQvPr2tHI5AMXnN1jmvYZoaAn0cQEaOZb.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:28:30',
                'updated_at' => '2017-11-02 17:28:30',
            ),
            21 => 
            array (
                'id' => 33,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'keWNVr44gopb98aFO995QbRsCvlJ6njhT5oIhJfn.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:28:37',
                'updated_at' => '2017-11-02 17:28:37',
            ),
            22 => 
            array (
                'id' => 34,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'G8sa7JCWN5UOXL2ngHv9IAF1k1Vwb6lRK8NlHkGy.jpeg',
                'description' => 'De dos',
                'created_at' => '2017-11-02 17:28:45',
                'updated_at' => '2017-11-02 17:28:45',
            ),
            23 => 
            array (
                'id' => 35,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'gqD6Bjha8B69bEIY7yi1XyIifCAy53MKWDZRBPJW.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:28:57',
                'updated_at' => '2017-11-02 17:28:57',
            ),
            24 => 
            array (
                'id' => 36,
                'category_id' => 3,
                'user_id' => 2,
                'name' => 'YfXTXqaHurMIULEfEL9vA4mqQKRG8ZgDHgKr6nZN.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:29:02',
                'updated_at' => '2017-11-02 17:29:02',
            ),
            25 => 
            array (
                'id' => 37,
                'category_id' => 4,
                'user_id' => 1,
                'name' => 'S9WtoDV5Dyij3esSRY3MxiUmGB1tfE4skTWpALBj.jpeg',
                'description' => 'Un chat',
                'created_at' => '2017-11-02 17:30:59',
                'updated_at' => '2017-11-02 17:30:59',
            ),
            26 => 
            array (
                'id' => 38,
                'category_id' => 4,
                'user_id' => 1,
                'name' => 'tDVKEo5XLRNsbpaqexY41NfbtC8GC7Now40MoOEO.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:31:10',
                'updated_at' => '2017-11-02 17:31:10',
            ),
            27 => 
            array (
                'id' => 39,
                'category_id' => 4,
                'user_id' => 1,
                'name' => 'ZXFuKBzvFZEksqm0EHrXRUpxbOusMjqv2Sssumjt.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:31:16',
                'updated_at' => '2017-11-02 17:31:16',
            ),
            28 => 
            array (
                'id' => 40,
                'category_id' => 4,
                'user_id' => 1,
                'name' => 'he4OTnctIbcUbAinFHVgDMPTi56AHZRo8R7I3E37.jpeg',
                'description' => 'Un oiseau',
                'created_at' => '2017-11-02 17:31:31',
                'updated_at' => '2017-11-02 17:31:31',
            ),
            29 => 
            array (
                'id' => 41,
                'category_id' => 4,
                'user_id' => 1,
                'name' => '4HLSmsLVmmyotWILhlfaNfwMHw8dyH5zDKlY8PzW.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:31:37',
                'updated_at' => '2017-11-02 17:31:37',
            ),
            30 => 
            array (
                'id' => 42,
                'category_id' => 4,
                'user_id' => 2,
                'name' => 'hVCKABCaItIPhop9nQZBoZb7CFFwgGCYYTLgQEvE.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:31:52',
                'updated_at' => '2017-11-02 17:31:52',
            ),
            31 => 
            array (
                'id' => 43,
                'category_id' => 4,
                'user_id' => 2,
                'name' => 'RvlsdZqwNw6fIWoQCsb13uFw1W4DiDRHuU4tZONT.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:31:58',
                'updated_at' => '2017-11-02 17:31:58',
            ),
            32 => 
            array (
                'id' => 44,
                'category_id' => 4,
                'user_id' => 2,
                'name' => 'lnCVyC69sLeu5ZPV1isNLvUzY5jAYoEsfjTpVPPK.jpeg',
                'description' => 'Un peu dangereux',
                'created_at' => '2017-11-02 17:32:13',
                'updated_at' => '2017-11-02 17:32:13',
            ),
            33 => 
            array (
                'id' => 45,
                'category_id' => 5,
                'user_id' => 2,
                'name' => '7k55hgNZs0cW2SuDeJWUDUxhLLlhEwPiK6XgewnA.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:32:38',
                'updated_at' => '2017-11-02 17:32:38',
            ),
            34 => 
            array (
                'id' => 46,
                'category_id' => 5,
                'user_id' => 2,
                'name' => 'RIPqCFrTB8dZ9KEv401egPQsgnbCHSbmhZhNVIVQ.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:32:46',
                'updated_at' => '2017-11-02 17:32:46',
            ),
            35 => 
            array (
                'id' => 47,
                'category_id' => 5,
                'user_id' => 1,
                'name' => 'N6q18GObVpFi6WfiQSdUxPBLy2Jmwkg7gfOGKvKF.jpeg',
                'description' => 'Des champignons',
                'created_at' => '2017-11-02 17:33:22',
                'updated_at' => '2017-11-02 17:33:22',
            ),
            36 => 
            array (
                'id' => 48,
                'category_id' => 5,
                'user_id' => 1,
                'name' => 'UJD6RAWLUdtChrOtxskfu6GGDfp8YXNKSQfCRe6W.jpeg',
                'description' => 'De jolies couleurs',
                'created_at' => '2017-11-02 17:33:33',
                'updated_at' => '2017-11-02 17:33:33',
            ),
            37 => 
            array (
                'id' => 49,
                'category_id' => 5,
                'user_id' => 1,
                'name' => 'GGyL5zI8kfme4A8xl3F6mgh0AxMPfwUaTwhbtm4U.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:33:40',
                'updated_at' => '2017-11-02 17:33:40',
            ),
            38 => 
            array (
                'id' => 50,
                'category_id' => 5,
                'user_id' => 1,
                'name' => '9ZEDXKJLPYvDdGPczO4a4kCUPGaZok8JFjQsGCRw.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:33:46',
                'updated_at' => '2017-11-02 17:33:46',
            ),
            39 => 
            array (
                'id' => 51,
                'category_id' => 5,
                'user_id' => 1,
                'name' => 'fBIiuxLTaSfxAl3dVNkd1PpWQmG6ViygHHggItoF.jpeg',
                'description' => 'Etrange',
                'created_at' => '2017-11-02 17:33:58',
                'updated_at' => '2017-11-02 17:33:58',
            ),
            40 => 
            array (
                'id' => 52,
                'category_id' => 5,
                'user_id' => 1,
                'name' => 'bxMEx118C5GgnDaiPV7nF6VrHMEWF7OKjcE93BgA.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-02 17:34:04',
                'updated_at' => '2017-11-02 17:34:04',
            ),
            41 => 
            array (
                'id' => 55,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'skr0EXFlqSR3FHEKq7KDCZ6wfFnibJBi83LYggaM.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-03 14:55:46',
                'updated_at' => '2017-11-03 14:55:46',
            ),
            42 => 
            array (
                'id' => 56,
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'YMCLTLsLZjNjNfbDg1Ljpz3KjA8bCof7iQMtukTc.jpeg',
                'description' => NULL,
                'created_at' => '2017-11-03 23:40:48',
                'updated_at' => '2017-11-03 23:40:48',
            ),
        ));
        
        
    }
}