<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Team{
    public static function getTeam(){
        $datas = collect([
// Management Team

            (object)[

             'managements' => (object)[
                    'id' => '1',
                    'title' => '' , 
                    'fullname' => 'Olusola Olunowo', 
                    'position' => 'Managing Director', 
                    'featured_thumbnail' => '/images/1.png',
                    'featured_image' => '/images/1.png', //dimension 480px x 515px
                    'info' => (object) [
                        
                        'overview' => ' <p>Sola Olunowo, is a graduate of the University of Ibadan, He has extensive experience in Business Development and Project Management. Sola has managed, trained and supported end user platforms for over 24 years. He has worked with many international organizations with best global practices managing large complex implementation programs.</p><p>He has a pragmatic, logical and analytical approach to all aspects of work and fosters a ‘can do’ team spirit, a “self-starter”, and “self-motivated” Project Manager, experienced in leading multi-disciplinary teams.</p>',
                        'overview_image' => '',
                    ],

                    (object)[
                        'id' => '2',
                        'title' => 'Mr' , 
                        'fullname' => 'Seun Oloyede', 
                        'position' => 'Chief Financial Officer',  
                        'featured_thumbnail' => '/images/2.png',
                        'featured_image' => '/images/2.png', //dimension 480px x 515px
                        'info' => (object) [
                            
                            'overview' => '<p>Seun Oloyede is a seasoned and highly motivated accounting professional with over 10years working experience and has a strong background in corporate and business accounting. He possesses excellent knowledge in finance, accounting, operations, and management. He also gained diverse experience from different sector such as Technology, Retail, financial services, investment bank, accountancy and security, and engaged in various administrative roles.</p><p> He has participated in various equity and debt funding both in Nigeria and United Kingdom. He is certified by ACCA, Wales and hold a Bachelor degree in Applied Accounting from Oxford Brookes University, United Kingdom. He equally studied at the London School of Business and Finance. He is currently studying Master degree in Agribusiness and Management from Rome Business School. He was head of finance for Core Trust and Investment Ltd, Ruffn Tumble and Group CFO for Tivas Group before joining AgroPark Development company Limited.</p>',
                            'overview_image' => '',
                    ],
                ],

                ],               

            ],

// Advisory board
            (object)[


            ],

        ])->all();

        return $datas;
    }
}