<?php
    include('include/header.php');
?>
    <style>
        .btn-success {
            color: #fff;
            background-color: #f2620d;
            border-color: #f2620d;
        }
    </style>
    <div class="pagecontent z100">
	    <div class="container">
            <div class="slide_banner">
                <img src="images/intitute_banner.png" alt="intitute_banner" class="img-fluid w100">
            </div>
            <section class="col-md-12 p-0">
                <div class="drop_down_list mt-3">
                    <select class="form-control">
                        <option value="adminsions">Admission and Classes</option>
                        <option value="responsibilities1">Responsibilities & Commitments</option>
                        <option value="locations1">Locations</option>
                        <option value="faculty1">Faculty</option>
                        <option value="contact_us1">Contact us</option> 
                    </select>
                </div>
                
                <div class="text-center inner_pg innt_5">
                    <ul class="pl-0 list-unstyled mt-5">
                        <li class="active" id="adminsions1">
                            <a href="#adminsions">
                                <div> <img src="images/harmonyum.png" alt="harmonyum" class="img-fluid col-md-6"></div>
                               <div>Admission and Classes</div>
                            </a>
                        </li>
                        <li id="responsibilities1">
                            <a href="#responsibilities1">
                                <div> <img src="images/sitar.png" alt="sitar" class="img-fluid col-md-6"></div>
                               <div>Responsibilities & Commitments</div>                                
                            </a>
                        </li>
                        <li id="locations1">
                            <a href="#locations1">
                                <div> <img src="images/tabla.png" alt="tabla" class="img-fluid col-md-6"></div>
                               <div>Locations</div>                                
                            </a>
                        </li>
                        <li id="faculty1">
                            <a href="#faculty1">
                                <div> <img src="images/dholak.png" alt="dholak" class="img-fluid col-md-6"></div>
                               <div>Faculty</div>                                
                            </a>
                        </li>
                        <li id="contact_us1">
                            <a href="#contact_us1">
                                <div> <img src="images/shehnai.png" alt="shehnai" class="img-fluid col-md-7"></div>
                               <div>Contact us</div>                                
                            </a>
                        </li>    
                    </ul>
                </div>
                <div class="tabs_content tabs mt-5 mb-5">
                    <div id="adminsions1" class="adminsions   active">                        
                        <!-- <h4 class="orngTxt mb-3">Admission and Classes</h4> -->
                         <div class="tab_titl">
                            <h6 class="text-uppercase">Admission </h6>
                            <p><b>Admission</b> is open to one and all with these requirements -<br><span class="font-weight-bold text-uppercase"> Dedication, Determination, Devotion, Commitment, Effort, Patience</span> and <span class="font-weight-bold text-uppercase">Regularity.</span></p>
                            <p>For more information, please <a href="#"><span class="logoCor">contact</span></a> our admission coordinators at info@pjim.org</p> 
                            <p class="text-center">
                                <img src="images/adminssion.jpg" alt="adminsion_place" class="mb-2 img-fluid col-md-8">
                            </p>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <h5 class="text-uppercase ">Classes </h5>
                                            <div class="tab_titl mt-2">
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Classes will usually be four times a month.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>All classes will be held in groups.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>All beginners’ classes are conducted by senior disciples of the MEWATI GURUKUL.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>The GURU will determine the student’s level and placement into an appropriate group.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>The GURU will promote a student in case he/she is eligible for the next level.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>The GURU will determine the appropriate group for a student who has re-joined the Institute.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>In case  the students miss a scheduled class, the students are responsible for gathering the missed class notes and updating themselves. </p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>In case a scheduled class is missed on the Institute’s behalf for some unavoidable reasons, the Guru will make sure they fulfill our commitment of 4 hrs/month</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>The Institute reserves the right to decide who the Guru is, based on the student's ability.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>The Institute reserves the right to dismiss a student at any point in time.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>   
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-1">
                                        <div class="vertical_line"></div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div>
                                            <h5 class="text-uppercase ">Make-up Classes </h5>
                                            <h6>Rescheduling a class by PJIM:</h6>
                                            <div class="tab_titl mt-2">
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p><b>Longer duration classes</b> will be conducted in a month if a class is missed on the Institute’s behalf or scheduling another class is not possible for reasons related to  - Health, Emergency situations, Long-weekends, Weather, Festivals etc.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>We schedule weekly classes  in a month - sometimes it's 4 classes a month, <b>sometimes more</b>. During some  months of the year (such as July-August and December to February)  we have long weekends, Shibir, holidays, festivals, winter months etc. It is in these months that we cannot schedule all four classes, and sometimes we cannot conduct classes due to severe weather. But <b>we DO</b> make up for these classes throughout the year by scheduling 5/6 classes a month or  by longer duration classes.</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>If it is <b>possible</b> and convenient for the AadyaGurus and their respective classes, they can schedule extra classes on another day by mutual agreement.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>            
                                </div>                               
                            </div>
                            <div class="col-md-12 tab_titl">
                                <h6 class="">Making up a missed class by the Student: </h6>
                                <p>
                                    If a student misses a scheduled class, he/she can make it up by attending any other class of the  same level with the permission of both the AadyaGurus.<br> <b>No separate individual</b> make-up class will be scheduled.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div id="responsibilities1" class="responsibilities content_tabs mt-5 mb-5">
                        <div>
                            <!-- <h4 class="orngTxt mt-3 mb-3">Responsibilities & Commitments</h4> -->
                            <!-- <h4 class="text-center mb-3 font-weight-bold">Our thoughts on Responsibilities & Commitments</h4> -->
                            <div class="col-md-12 mt-4 mb-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/responsible_trade.jpg" alt="responsible_trade" class="mb-2 img-fluid ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/responsible_trade_2.jpg" alt="responsible_trade2" class=" mb-2 img-fluid ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center mt-1 mb-3"><i>Our thoughts on Responsibilities & Commitments</i></p>
                            <div class="col-md-12">
                                <div class="tab_titl">
                                    <h4 class="font-weight-bold">Pandit Jasraj Institute, a Guru-Shishya Tradition </h4>
                                    <p>In Guru-Shishya Tradition, one aspect is to fulfill the commitment and take care of the responsibilities, for each other  - the Guru and the Shishya.</p>
                                    <p>In the Guru-Shishya parampara of the Indian Shastriya Sangeet, there is a ceremony called<b> ‘Ganda Bandhan’</b>. In this ceremony, the Guru formally accepts a student as his/her Shishya, Disciple - the disciple who is now eligible to represent the Gharana and has the responsibility of preserving and carrying forward the Gharana’s Musical Heritage, the Dharohar.</p>
                                    <p>It is a lifelong sacred bond where the responsibilities, whatever they may entail, and commitments on behalf of both are fulfilled and carried on forever. </p>
                                    <p>As the Guru chooses the student as a Disciple, this eternal Bandhan initiates the Shishya on a journey taking an implicit vow of ‘Seva’ forever. Following the norms, this should be a transparent relationship and there is no option of quitting or even taking a break, without the Guru’s permission and knowledge.  </p>
                                    <p>This bond remains perpetual and unbroken, in every situation of life, for both. </p>
                                    <p>The Pandit Jasraj Institute runs on this essence.</p>
                                    <p>On Guru’s part, it is the constant commitment to enrich the Shishya with Vidya-Daan, imparting the knowledge. In a Shishya’s life, the Guru is the friend, the philosopher and the guide with a touch and the essence of the parental aspect. Thus a Guru’s responsibility and commitment to a Shishya is beyond any words and explanations. </p>
                                    <p>On the disciple’s part it is their responsibility to follow the path directed by their Guru to acquire knowledge, to be committed 100%, to participate in taking care of the system and values, making sure of their Guru’s well being , with utmost respect and true understanding. </p>
                                    <p>This aspect, this world of personal touch, this eternal bonding, is the most important and integral part and the foundation of the Guru-Shishya Parampara. </p>
                                    <p>And only thus, the Guru-Shishya Tradition is the <b>‘Vidyaa-Daan’</b> on the Guru’s behalf and paying the <b>‘Gurudakshina’</b> on the Shishya’s behalf  in its true real sense.</p>
                                    <h4 class="mt-4 mb-4 font-weight-bold">Responsibilities and Commitments </h4>
                                    <p> This music experience extends far beyond any expectations. No value can be assigned to it. The value of learning this Vidya, is absolutely priceless!</p>
                                    <p>All members of the Gurukul and the Institute need to detach their mind from relating the concept of ‘learning’ with  ‘monetary value’. </p>
                                    <!-- <p>That is why we like to keep these transactional terms like ‘fee’, ‘tuition’ ‘payment’ etc detached from the lessons. Instead, we would like to view them as a monthly commitment for some practical obligations. However, for the purposes of clarity and communication, we might have to make a minimal use of these terms where needed and applicable.</p> -->
                                    <!-- <div class="relative testi_icons text-center">
                                            <span class="testicodes1"> <img src="images/testmonial-up.png" alt="testimonial_icons" class="img-fluid"> </span>
                                            <span class="logoCor">“संगीत की शिक्षा एक ह्रदय से दूसरे हृदय में दी जाती है“ <br>- संगीत मार्तण्ड पंडित जसराजजी</span>
                                            <span class="testicodes2"> <img src="images/testmonial-down.png" alt="testimonial_icons" class="img-fluid"> </span>
                                    </div>
                                    <p>There  are certain practical obligations for the Gurukul  to meet. As a member of the Institute and the Gurukul, all students take a small step and contribute towards meeting those responsibilities by a nominal, regular, stable monthly commitment. This aspect of commitment and responsibility is towards meeting those practical obligations. </p>
                                     -->
                                     
                                    <!-- <div class="rectangle">-->
                                    <!--    <div class="relative testi_icons text-center">-->
                                    <!--            <span class="testicodes1"> <img src="images/testmonial-up.png" alt="testimonial_icons" class="img-fluid"> </span>-->
                                    <!--            <span class="logoCor fnt15 font-weight-bold">“संगीत की शिक्षा एक ह्रदय से दूसरे हृदय में दी जाती है“ <br>- संगीत मार्तण्ड पंडित जसराजजी</span>-->
                                    <!--            <span class="testicodes2"> <img src="images/testmonial-down.png" alt="testimonial_icons" class="img-fluid"> </span>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                            
                                            
                                    <div class="">
                                        <div class="row">                                            
                                            <div class="col-md-8">
                                                <p>Imparting this Vidya by the AadyaGurus or Gurujans and getting richer and richer in terms of knowledge for  the Student, is of a value that is beyond any calculations and evaluations. </p>                                    
                                                <p>That is why we like to keep these transactional terms like ‘fee’, ‘tuition’ ‘payment’ etc detached from the lessons. Instead, we would like to view them as a monthly commitment for some practical obligations. However, for the purposes of clarity and communication, we might have to make a minimal use of these terms where needed and applicable.</p>
                                                <p>There  are certain practical obligations for the Gurukul  to meet. As a member of the Institute and the Gurukul, all students take a small step and contribute towards meeting those responsibilities by a nominal, regular, stable monthly commitment. This aspect of commitment and responsibility is towards meeting those practical obligations. </p>
                                                <p>Please understand, as we mentioned above, that the learning is actually not tied with any monetary value and thus it is abundant and limitless….</p>                            
                                             </div>
                                             <div class="col-md-4">
                                                <div>
                                                    <img src="images/Callouts.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <h4 class="mt-4 mb-4 font-weight-bold">Our thoughts on ‘make-up classes’, the ways of fulfilling the Commitment:</h4>
                                    <!-- <div class="d-flex align-items-center">
                                        <p class="mr-4">During some months in a year, when we have long weekends, Shibir, holidays, festivals, winter months  etc., we cannot schedule all four classes. And sometimes we cannot conduct classes due to unavoidable reasons (such as issues related to Health,  Emergency situations, Long-weekends, Weather  Festival etc).</p>
                                        <div class="relative testi_icons">
                                            <span class="testicodes1"> <img src="images/testmonial-up.png" alt="testimonial_icons" class="img-fluid"> </span>
                                            <span class="logoCor font-weight-bold">“सुरसती के भंडार की बड़ी अपूरव बात ज्यूं ज्यूं खरचत त्यूं त्यूं बढ़त, बिन खरचत घटी जात”</span>
                                            <span class="testicodes2"> <img src="images/testmonial-down.png" alt="testimonial_icons" class="img-fluid"> </span>
                                        </div>
                                    </div> -->
                                    <div class="">
                                        <div class="row align-items-center">                                            
                                            <div class="col-md-8">
                                                 <h6 class="mt-3 mb-3">On the Institute’s part: </h6>
                                                 <p>We are committed to schedule an hour-long class every week. We schedule classes every week - sometimes it's 4 classes in a month,  <b>sometimes more.</b></p>
                                                 <p class="mr-4">During some months in a year, when we have long weekends, Shibir, holidays, festivals, winter months  etc., we cannot schedule all four classes. And sometimes we cannot conduct classes due to unavoidable reasons (such as issues related to Health,  Emergency situations, Long-weekends, Weather  Festival etc).</p>
                                                <p>But <b>we DO</b> ‘make up’ for these classes by scheduling 5/6 classes in a few months or  by <b>longer duration classes</b> during some  months. Even though our commitment is an hour long class, almost on all the occasions, it lasts longer than that. </p>
                                                <p>So certainly with the extra number of classes in a few months and the longer classes we never fall behind.</p>                                     
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg_img_layou">
                                                     <!--<img src="images/Callouts.jpg" alt="" class="img-fluid"> -->
                                                    <div class="logoCor callout_fnt font-weight-bold">“सुरसती के भंडार की बड़ी अपूरव बात ज्यूं ज्यूं खरचत त्यूं त्यूं बढ़त, बिन खरचत घटी जात”</div>
                                                    <div class="call_auth "></div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                   <h6 class="mt-3 mb-3">On the student's part:</h6>
                                    <p>If a student misses a class, what are we trying to make up? The lesson? The time? The monetary value?</p>
                                    <p>Firstly, as enumerated above, no monetary value can truly be associated with the ‘learning’ process. </p>
                                    <p>Secondly, if one misses a scheduled class, it is missed forever. The time spent with Music created on that day, the discussions that take place,  the interactions between the class-mates - you cannot recover. </p>
                                    <p>But, to be on the same page, the students should be committed to get an overview of the missed class from their Aadya-Gurus or the classmates, and they should get homework assignments if any to keep themselves updated. </p>
                                    <p>This is the only way to ‘make up’ for a missed class.</p>
                                    <p>To sustain your responsibility and obligation to your Gurukul, in the event of any non-attendance over a period of time, you will still be expected to contribute a small percentage of the initial pre-determined commitment. </p>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div id="locations1" class="locations content_tabs mt-5 mb-5">                        
                        <!-- <h4 class="orngTxt mt-3 mb-3">Locations</h4> -->
                        <div class="col-md-12 tab_titl">
                            <p>Under the guidance of Sangeet Martand Pandit Jasraj ji and Padma Shri Pandita Tripti Mukherjee, the initial locations of New Jersey, New York and Pensylvannia have melted their boundaries and have expanded worldwide.</p>
                            <div class="col-md-12 tab_titl">                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <h6 class="mt-3 mb-3">Gurukul’s official postal address is:</h6>
                                            <p>  Mewati Gurukul@300128 </p>
                                            <p>   Vaishnavi Bhawan  </p>
                                            <p>    130 Stafford Road   </p>
                                            <p>   Colonia, New Jersey – 07067 </p>
                                            <h6 class="mt-3 mb-3">Gurukul’s expanded locations:</h6>
                                            <p>While  New York, New Jersey and Pennsylvania were the physical locations of our Institute, our Gurukul, in the spirit of expansion and augmentation,  has been extremely resourceful and innovative  in making the classes accessible globally. With the advent of online classes, our presence within a virtual world  has facilitated and empowered the learning process for students spread across the world - with no compromises!</p>
                                            <p>The entire world is our Family - Vasudeva Kutumbakam!</p>
                                            <p>For more information please email us at <a href="mailto:info@pjim.org" class="logoCor font-weight-bold">info@pjim.org</a></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/locations.jpg" alt="locations" class="img-fluid col-md-10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mt-3 mb-3">A meaningful Declaration: </h6>
                            <p>Since the Pandemic of 2020, we have  moved ONLINE completely. </p>
                            <p>Initially it took time to get adjusted to this new way of conducting classes. However, this challenging Pandemic time has also opened up a wonderful, convenient and totally workable digital world of Online classes and activities.</p>
                            <p>Many of us have elderly and medically compromised members at home. As we need to deal with many people on a daily basis, we are obligated to be responsible in our decisions that affect our family, especially our respected and  precious elders.  For this very reason, we have to be sensitive and take each and every step extremely cautiously and carefully with everybody’s health in mind.</p>
                            <h6 class="mt-3 mb-3">Considering the risk of Covid exposure, ALL our classes will be ONLINE on a regular basis. </h6>
                            <p>Occasionally, with proper safety measures, we will also meet in person. </p>
                            <p>This measure will be our extremely valuable contribution to society, towards the containment of the Pandemic, until covid leaves no trace on planet Earth. </p>
                            <h6 class="mt-3 mb-3">We, at Pandit Jasraj Institute, sincerely appreciate your understanding and cooperation in this matter.</h6>
                        </div>    
                    </div>

                    <div id="faculty1" class="faculty content_tabs mt-5 mb-5">                        
                        <!-- <h4 class="orngTxt mt-3 mb-3">Faculty</h4> -->
                        <div class="tab_titl">
                            <p>Under the guidance of Sangeet Martand Pandit Jasraj ji and Padma Shri Pandita Tripti Mukherjee, the initial locations of New Jersey, New York and Pensylvannia have melted their boundaries and have expanded worldwide.</p>
                            <div class="col-md-12 tab_titl">                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/pandit_guru.jpg" alt="pandit_guru" class="img-fluid">
                                        </div>
                                        <div>
                                            <h4 class="mt-3 mb-3 font-weight-bold"><u>Param Guru:</u></h4>
                                            <h6>Padma Vibhushan honored, <br>Sangeet Martand Pandit Jasraj Ji</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/Acharya-shiromani.jpg" alt="Acharya-shiromani" class="img-fluid">
                                        </div>
                                        <div>
                                            <h4 class="mt-3 mb-3 font-weight-bold"><u>Acharya Shiromani:</u></h4>
                                            <h6>Padma Shri honored <br>Pandita Tripti Mukherjee </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="">
                                            <h6 class="mt-3 mb-3"><u>Honorary Gurujan:</u></h6>
                                            <p>Respected Acharya VarishthaJan: </p>
                                            <p>Pandit Girish Wazalwar, Pandit Mukesh Desai, Pandit Rattan Mohan Sharma, Surmani Pandita Gargee Siddhanta-Dutta, Smt. Marina Ahmad Alam, Smt. Simantini Thakar, Pandit Ramesh Narayan, Pandit Suman Ghosh, Pandit Radharaman Kirtane, Pandit Pritam Bhattacharya, Pandit Saugata Banerjee, Shri Saptarshi Chakraborty, Sushree Ankita Joshi, Pandit Aditya Narayan Banerjee, Vidushi Sanghamitra Chatterjee, Pandit Samir Chatterjee and Pandit Anup Jalota </p>
                                            <p>Respected AcharyaJan:</p>
                                            <p>Adaraniyaa Paromita Deshmukh, Acharya Smt. Asha Lohia</p>
                                        </div>    
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_tag text-center col-md-8 m-auto">
                                            <img src="images/guru_family.jpg" alt="guru_family" class="img-fluid">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="img_tag text-center">
                                                    <img src="images/guru_event.jpg" alt="guru_familyr_m" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="img_tag text-center">
                                                    <img src="images/guru_familyr_m.jpg" alt="guru_familyr_m" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="img_tag text-center">
                                        <img src="images/guru_event2.jpg" alt="guru_event2" class="img-fluid">
                                    </div>
                                </div>
                                <div class="">
                                    <h6 class="mt-3 mb-3"><u>Senior Disciple-Gurus </u></h6>
                                    <p>The Pandit Jasraj Institute is a VishwaVidyalaya (University) of North Indian Classical Vocal Music.
                                        Like Teaching Assistants in Academic Universities, we have our senior disciples of Pandita Tripti Mukherjee, who assist in realizing Guruji’s vision under her guidance . This is a tremendous learning opportunity for the Aadya Gurus themselves. </p>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="img_tag text-center">
                                        <img src="images/certificate.jpg" alt="certificate" class="img-fluid col-md-5">
                                    </div>
                                </div>
                                <h3 class="mt-3 mb-3 font-weight-bold text-center">“सुरसती के भण्डार की बड़ी अपूरव बात, ज्यूं ज्यूं खरचत त्यूं त्यूं बढ़त, बिन खरचत घटी जात"</h3>
                                <div class="row mt-5 mb-3  align-items-center">
                                    <div class="col-md-6">
                                        <div class="dummy_imag"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <h6 class="mt-3 mb-3">Aadya Shrees (Senior-most disciples of the Institute)</h6>
                                            <div class="tab_titl mt-2">
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Archana Gollamudi</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniya Hari Nott</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Lalita Mathur </p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Meena Mani</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Monica Joshi</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Nalini Padmanabhan</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Nidrita Mitra-Sinha</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Pragna Shah</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Renu Jain</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Shambhavi Desai</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Suhas Joshi</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Uma Singh</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3 align-items-center">
                                    <div class="col-md-6">
                                        <div class="dummy_imag"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <h6 class="mt-3 mb-3">Aadya Gurus (Senior Disciples)</h6>
                                            <div class="tab_titl mt-2">
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Anindita Sinha Roy</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Anupama Mahajan</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Babeena Sharma</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniya Harsh Shah</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Jayashree Nagaraja</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Miral Vaghela</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p> Adaraniyaa Modhumita Sabata</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniya Krishna Prakash Warrier</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Rajeshree Dave</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Shubha Varma</p>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div class="">
                                                            <p>Adaraniyaa Vandana Govindan</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                    </div>

                    <div id="contact_us1" class="contact_us content_tabs mt-5 mb-5">                        
                        <!-- <h4 class="orngTxt mt-3 mb-3">Contact Us</h4>  -->
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-8">
                                     <div class="tab_titl">
                                        <p>For inquiry to join the institute</p>
                                        <p>Email: <a href="mailto:info@pjim.org" class="logoCor">info@pjim.org</a></p>
                                        <br>
                                        <h6 class="mt-3 mb-3">For Facebook and Radio JasVaaNi</h6> 
                                        <p><a class="black" href="https://www.facebook.com/pages/Pandit-Jasraj-Institute-for-Music-Research-Artistry-and-Appreciation/174254982652890" target="_blank">Facebook Pandit Jasraj Institute</a><p>
                                        <p><a href="http://www.pjim.org/jasvaani" target="_blank" class="black">JasVaaNi</a></p>
                                        <p><a href="https://youtube.com/channel/UCXAoObbS9dr71X-yfXbskJw" class="black" target="_blank">JasVaaNi Youtube</a></p>
                                        <br>
                                        <h6 class="mt-3 mb-3">Other related websites to visit</h6> 
                                        <p><a href="https://www.pjim.org" target="_blank" class="black">Pandit Jasraj Institute</a></p>
                                        <p><a href="https://www.panditjasraj.com" target="_blank" class="black">Sangeet Martand Padma Vibhushan Pandit Jasraj</a></p>
                                        <p><a href="http://www.triptimukherjee.com" target="_blank" class="black">Padmashri Pandita Tripti Mukherjee</a></p>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div>
                                         <div class="enquiery_forms">
                    						<form onsubmit="return false">
                    							<div class="header_form">
                    								<span> </span>
                    							</div>
                    							<div class="body_form p-3"> 
                							        <div class="">
                							            <div class="mb-2">
                    										<label>User Name</label>
                    										<input type="text" name="name" placeholder="Enter Your Name" class="form-control penq-name">
                    									</div>
                							        </div>   
                							        <div class="">
                							           <div class="mb-2">
                    										<label>Email</label>
                    										<input type="email" name="emai" placeholder="Enter Your Email" class="form-control penq-email">
                    									</div> 
                							        </div>
                							        <div class="">
                							            <div class="mb-2">
                    										<label>Phone Number </label>
                    										<input type="text" name="phone_number" placeholder="Enter Your Phone Number" class="form-control penq-phone_number numeric">
                    									</div>
                							        </div> 
                							    <div class="mb-2">
                									<label>Message </label> 
                									<textarea class="form-control penq-address" row="3" placeholder="Enter Your Address" name="address"></textarea>
                								</div>  
                								<div class="penq-return"></div>
                								<div class="mt-3 mb-3" style="margin-top:10px;">
                									<label> </label>
                									<button type="button" name="Submit" value="Submit" onclick="penq_submit()" class="btn_send btn btn-success">Submit</button>
                								</div>
                    						</form>
                    					</div>
                                     </div>
                                 </div>
                             </div>
                         </div>    
                    </div>
                </div>
            </section>
        </div>
    </div>    
<?php
    include('include/footer.php');
?>