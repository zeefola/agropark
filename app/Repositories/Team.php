<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Team{
    public static function getTeam(){
        $datas = collect([
// Management Team
//1
            (object)[
                    'title' => '' , 
                    'fullname' => 'Olusola Olunowo', 
                    'position' => 'Managing Director', 
                    'thumbnail' => '/images/1.png',
                    'featured_image' => '/images/1.png', //dimension 480px x 515px
                    'info' => (object) [
                        
                        'overview' => '<p>Sola Olunowo, is a graduate of the University of Ibadan, He has extensive experience in Business Development and Project Management. Sola has managed, trained and supported end user platforms for over 24 years. He has worked with many international organizations with best global practices managing large complex implementation programs.</p><p>He has a pragmatic, logical and analytical approach to all aspects of work and fosters a ‘can do’ team spirit, a “self-starter”, and “self-motivated” Project Manager, experienced in leading multi-disciplinary teams.</p>',
                        'overview_image' => '',
                    ],
                ],
//2
                    (object)[
                        'title' => 'Mr' , 
                        'fullname' => 'Seun Oloyede', 
                        'position' => 'Chief Financial Officer',  
                        'thumbnail' => '/images/2.png',
                        'featured_image' => '/images/2.png', //dimension 480px x 515px
                        'info' => (object) [
                            
                            'overview' => '<p>Seun Oloyede is a seasoned and highly motivated accounting professional with over 10years working experience and has a strong background in corporate and business accounting. He possesses excellent knowledge in finance, accounting, operations, and management. He also gained diverse experience from different sector such as Technology, Retail, financial services, investment bank, accountancy and security, and engaged in various administrative roles.</p><p> He has participated in various equity and debt funding both in Nigeria and United Kingdom. He is certified by ACCA, Wales and hold a Bachelor degree in Applied Accounting from Oxford Brookes University, United Kingdom. He equally studied at the London School of Business and Finance. He is currently studying Master degree in Agribusiness and Management from Rome Business School. He was head of finance for Core Trust and Investment Ltd, Ruffn Tumble and Group CFO for Tivas Group before joining AgroPark Development company Limited.</p>',
                            'overview_image' => '',
                    ],
                ],

//3 
                (object) [
                    'title' => 'Mr' , 
                    'fullname' => 'Emmanuel A Alabi', 
                    'position' => 'Chief Operations Officer', 
                    'thumbnail' => '/images/3.png',
                    'featured_image' => '/images/3.png', //dimension 480px x 515px
                    'info' => (object)[
                        'overview' => ' <p>Ayodele Alabi is a devoted lifetime learner with passion for leadership, organizational behavior and development. He is zealous about bringing the best out of people. Ayodele has over 10 year’s career experience in Banking Operations and Client Service Management. He is a certified member of the Chartered Institute of Customer Relationship Management.</p> <p>An alumnus of Yaba College of Technology, he also holds a Post Graduate Diploma in Public Relations and Masters in Business Administration. He has attended several leadership courses from the renowned Lagos Business School and other training institutes within and outside Nigeria.</p>',
                        'overview_image' => '',
                    ],
                ], 
//4
           (object) [
            'title' => 'Mr' , 
                    'fullname' => 'Babatunde Oyelade', 
                    'position' => 'International Desk', 
                    'thumbnail' => '/images/4.png',
                    'featured_image' => '/images/4.png', //dimension 480px x 515px
                    'info' => (object)[
                        'overview' => '<p>Babatunde Oyelade is a graduate of the University of Lagos. He started his career as a retail banking officer with Pacific Bank (Now Unity Bank) in 2004. He gained employment with Liberty Life, South Africa, as a Financial Consultant; he later rose to become sales manager in the same company, a position he held up until his return to Nigeria. In 2009, he was poached by another South African company called Metropolitan Life as part of a joint venture in Nigeria with United Bank for Africa (UBA) where he became the pioneer business coordinator of UBA Metropolitan Life in the Ibadan and entire south west region.</p><p>In 2011, he left UBA Metropolitan Life for UNIC Insurance Plc, one of the foremost insurance companies in Nigeria as the Head of Retail business for Ibadan and environs. Tunde as he’s fondly called is an astute and seasoned business manager with rich and diverse leadership experience in business development, operations management, channel team management, business strategy development, customer relationship management, organizational management, conflict resolution, spanning over 15 years.</p>',
                    ],
           ],  
           
//5 
        (object)[
            'title' => 'Mrs' , 
            'fullname' => 'Adenike Fagun', 
            'position' => 'General Manager', 
            'thumbnail' => '/images/5.png',
            'featured_image' => '/images/5.png', //dimension 480px x 515px
            'info' => (object)[
                'overview' => ' <p>Adenike Fagun studied Industrial Relations and Personnel Management from Lagos State University and an Associate member of Chartered Institute of Personnel Management (CIPM).</p><p>Nike has over 10 years managerial experience and possess excellent management skills with extensive knowledge of key issues like Customer Service management, Administration, Inventory management and effective labour scheduling. She has the charism to lead, coach, develop and motivate teams.</p>',

            ],
        ],
        
//6 
       (object)[
        'title' => 'Mr' , 
        'fullname' => 'Adetoro Olayomi', 
        'position' => 'Head, Marketing Comunications', 
        'thumbnail' => '/images/6.png',
        'featured_image' => '/images/6.png', //dimension 480px x 515px
        'info' => (object)[
            
            'overview' => ' <p>Adetoro Olayomi is an energetic team player with exceptional managerial and execution skills. An astute administrator, he has ability to multitask, manage and coordinate diverse groups. With over 13 years’ experience in business support and administration, he has developed prowess for efficient planning and quality service delivery.</p><p>Adetoro holds a B.Sc (Ed) in Accounting Education from University of Ado-Ekiti and PGD in Public Relations and Advertising from Nigerian Institute of Journalism. He is a certified member of the Project Management Professional Institute (PMPI).</p>',
        ],
       ],

//7 
       (object)[
        'title' => 'Mr' , 
        'fullname' => 'Deji Afolami', 
        'position' => 'Head, Poultry And Livestock', 
        'thumbnail' => '/images/7.png',
        'featured_image' => '/images/7.png', //dimension 480px x 515px
        'info' => (object)[
            'overview' => ' <p>Deji Afolami is a young, energetic and calm Agripreneur with over 7 years experience in both Crop and Livestock production. A Crop Production graduate from Olabisi Onabanjo University, he obtained a Masters degree in Agronomy from the University of Ibadan and currently running a PhD program at the Federal University of Agriculture, Abeokuta.</p><p>He is an Alumnus of the Daystar Leadership Academy; he has undertaken several trainings on leadership, management and Agriculture within and outside Nigeria. Deji has successfully managed over 500 hectares of integrated farm with full compliance to Global Good Agricultural Practices standards.</p>',
          
        ],
       ],

//8

       (object)[
        'title' => 'Mr' , 
        'fullname' => 'Adetominiyi A Adebisi', 
        'position' => 'Head, Crop Production', 
        'thumbnail' => '/images/8.png',
        'featured_image' => '/images/8.png', //dimension 480px x 515px
        'info' => (object) [
            
            'overview' => ' <p>Afeez Adebisi has MSC. In Agronomy from the University of Ibadan. He is a certified professional in Good Agricultural Practices, Hazard Analysis and Critical Control Point.</p><p>Afeez has appraised and managed diverse farms for 8 years and has great experience in consultancy services with focus on Farm setting and layouts, Farm Management Crop nutrition.</p>',
           
        ],
       ],
        ])->all();

        return $datas;
    }
}