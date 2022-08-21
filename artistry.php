<?php
    include('include/header.php');
?>
<style>
    .slick-prev:before {
        width: 40px;
        position: relative;
        height: 40px;
        max-width: 100%;
        content: '';
        background: url('images/video_img/right.png');
        display: block;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .slick-next:before {
    width: 40px;
    position: relative;
    height: 40px;
    max-width: 100%;
    content: '';
    background: url('images/video_img/left.png');
    display: block;
    background-size: cover;
    background-repeat: no-repeat;
    left: -37px;
}
.slick-slide img {
    display: block;
    padding: 7px;
    width: 100%;
}
</style>
    <div class="pagecontent z100">
	    <div class="container">
            <div class="slide_banner">
                <img src="images/Artistry_Banner.jpg" alt="Artistry Banner" class="img-fluid w100">
            </div>
            <section class="col-md-12 p-0">
                <div class="drop_down_list mt-3">
                    <select class="form-control">
                        <option value="aradhna">Aradhna</option>
                        <option value="jasVaani">JasVaani</option>
                        <option value="shibir">Shibir</option>
                        <option value="student_concerts">Student Concerts</option>
                        <option value="vividh_prasang">Vividh-Prasang</option> 
                    </select>
                </div>
                <div class="text-center inner_pg innt_5">
                    <ul class="pl-0 list-unstyled mt-5">
                        <li class="active" id="aradhna">
                            <a href="#aradhna">
                                <div> <img src="images/harmonyum.png" alt="harmonyum" class="img-fluid col-md-6"></div>
                               <div>Aradhna</div>                                
                            </a>
                        </li>
                        <li id="jasVaani">
                            <a href="#jasVaani">
                                <div> <img src="images/sitar.png" alt="sitar" class="img-fluid col-md-6"></div>
                               <div>JasVaani</div>                                
                            </a>
                        </li>
                        <li id="shibir">
                            <a href="#shibir">                                
                                <div> <img src="images/tabla.png" alt="tabla" class="img-fluid col-md-6"></div>
                               <div>Shibir</div>                                 
                            </a>
                        </li>
                        <li id="student_concerts">
                            <a href="#student_concerts">

                                <div> <img src="images/dholak.png" alt="dholak" class="img-fluid col-md-6"></div>
                               <div> Student Concerts</div>                               
                            </a>
                        </li> 
                        <li id="vividh_prasang">
                            <a href="#vividh_prasang">
                                <div> <img src="images/shehnai.png" alt="shehnai" class="img-fluid col-md-7 shehnai"></div>
                               <div>Vividh-Prasang</div>                                
                            </a>
                        </li>    
                    </ul>
                </div>
                <div class="tabs_content tabs mt-5 mb-5">
                    <div id="aradhna" class="aradhna1 active">
                        <!-- <h4 class="orngTxt mb-3">Aradhna</h4> -->
                        <div class="tab_titl">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/padit_artistry.jpg" alt="padit_artistry" class="img-fluid ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="img_tag text-center">
                                            <img src="images/artistry_pandit.jpg" alt="artistry_pandit" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mt-3 mb-3"><b>आराधना</b> (Aradhana) - Dedicated to Sangeet Martand Pandit Jasraj ji</h6>
                            <h6 class="mt-3 mb-3">We celebrate as our Aradhana: </h6>
                            <p>
                                <ul class="pl-0 mt-4">
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p> <b>मेवाती संगीत मार्तण्ड पर्व</b> (Mewati Sangeet Martand Parv) - Annual Music concert</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p><b>जसरंग-जन्मदिन </b>(JasRang JanmaDin) - <br>
                                                JasRang Janmadin - <br>
                                                Birthday of an Extraordinary Life with vibrant colors 
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p><b>जसविभु-जन्मदिन </b> (JasVibhu JanmaDin),<br> 
                                                JasVibhu Janmadin - <br>
                                                An Auspicious Birthday of an Eternal Manifestation -  <br>
                                                Coming into Existence as Omnipresent, Manifest as Eternal to pervade the whole being as ‘Ananda’. 
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p>
                                                <b> जसरंगी </b>(Jasrangi Magazine); <br>
                                                JasRangi is a magazine from the Mewati Gharana for the world of music.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p><b>रसराज - पंडित जसराज </b> (Rasaraj Pandit Jasraj) - <b>A</b> Biography of Sngeet Martand Pandit Jasraj by Sunita Budhiraja</p>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <p><b>जसवाणी </b> (JasVaaNi) ; Radio JasVaani@11:11 - The very first ‘Our Own Unique Radio’ for all the Mewaties</p>
                                        </div>
                                    </li>
                                </ul>
                            </p>
                        </div> 
                    </div>
                    
                    <div id="jasVaani" class="jasVaani1 content_tabs mt-5 mb-5">
                        <!-- <h4 class="orngTxt mb-3">Radio JasVaaNi @11:11</h4> -->
                        <div class="tab_titl">
                            <div class="img_tag text-center">
                                <img src="images/jasvani.png" alt="jasvani" class="img-fluid ">
                            </div>
                            <h5 class="mt-3 mb-3">JasVaaNi@11:11</h5>
                            <h6 class="mt-4 mb-4"><i>A Broadcasting Radio-Pod dedicated to Sangeet Martand Pandit Jasraj ji<br> A pioneering initiative from Mewati Gurukul @300128 to reach the entire Brahmand! </i></h6>
                            <p class="mt-4 mb-4"><b>JasVaaNi@11:11</b> is the very first ‘Our Own Unique Radio’ for all the fortunate and blessed Mewatis. This hour long broadcast, filled with various facets of our Music related lives, will be an indelible  experience!  </p>
                            <p class="mt-4 mb-4">Radio JasVaaNi is a Prasaaran to celebrate the ‘Vibhu-Janma’ din on the 17th of every month with immense respect, and profound humility.
                                <br>This is a very Humble Seva to my Guruji. 
                            </p>
                            <p class="mb-0">I try to extend myself by including all my Gurubhai, Gurubahen and my Guruji’s grand disciples for this privileged opportunity of Hajiri-Seva.</p>    
                            <p>Seva doesn't need any publicity and therefore we are not making any concerted efforts to promote this. So kindly respect that. </p>
                            <p>While we are not strictly dependent on any social media or platforms for promotions, please inform and request all your friends and family to join the Radio JasVaaNi at 11:11 AM (EST) on the 17th of every month.  You may share the following link: <a class="logoCor" href="https://pjim.podbean.com" target="_blank">https://pjim.podbean.com</a></p>
                            <p>Tune in on the 17th of every month at 11:11am EDT (8:41pm IST) to <a class="logoCor" href="https://pjim.podbean.com/" target="_blank">https://pjim.podbean.com/</a></p>
                            <p>
                                Note:<br> 
                                <i>The numbers 11:11 and 300128 hold a special significance in our lives; thus JasVaaNi@11:11 and Mewati Gurukul @300128</i>
                            </p>
                            <p>If for any reason, anyone misses the live broadcast, the archived JasVaaNi episodes can be accessed at any time by accessing the links shared below.</p>
                            <p><b>JasVaaNi Episodes</b> (details to be completed later - need a fixed size box showing details of 11 current episodes to be scrolled down for earlier episodes)</p>
                            <div class="table-responsive tab_titl">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Episode #</th>
                                        <th></th>
                                        <th>Access Link</th>
                                        <th>Theme </th>
                                        <th>Artistes (in the order of appearance)</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11</td>
                                            <td>17th Jun'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-11/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-11/</a></td>
                                            <td>PremRas-Payodhi</td>
                                            <td>Pandit Saptarshi Chakraborty Pandit Ramesh Narayan Kum Moha Desai Smt Renu Jain </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>17th May'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-10/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-10/</a></td>
                                            <td>Bhini Bhini Sugandhi Mitti ko GRATITUDE</td>
                                            <td>Shri Murli Dhar and Smt Rano Dhar Dr. Pranav Thaker Smt Triparna Mukherjee Shri Suhas Joshi Smt Archana Gollamudi Shri Mangeram Sharma Pandit Rattan Mohan Sharma Smt Ekta Sharma Smt Sudarshana Pandit Shri Rushil Vishwanathan Pandita Gargee Siddhanta Dutta Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>17th Apr'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-9/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-9/</a></td>
                                            <td>Bahar ki Aayi Bahar</td>
                                            <td>Pandit Hemang Mehta Shri Swar Sharma Prof. Kumar Balanand Smt Suma Nair Smt Payal Mor Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>17th Mar'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-8/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-8/</a></td>
                                            <td>Ashta-Sakha ke vibhinn Rang</td>
                                            <td>Pandit Saugata Banerjee Shri Shamal Kamleshbhai Padiya Smt Monica Joshi Smt Kalpana Prasad Pandit Rattan Mohan Sharma Shri Swar Sharma Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji  </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>17th Feb'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-7/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-7/</a></td>
                                            <td>Taal-Bol-Laya-Layakaari</td>
                                            <td>Pandit Aditya Narayan Banerjee Pandit Pritam Bhattacharjee Pandita Gargee Siddhanta Dutta Pandit Mukesh Desai Students of Pandit Jasraj Institute, Mewati Gurukul@3003128 Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>28th Jan'22</td>
                                            <td><a target="_blank" href="https://jasvaani-prasaaran-episode-6/">https://jasvaani-prasaaran-episode-6/</a></td>
                                            <td></td>
                                            <td>Pandit Chandrashekhar Swami Pandit Hemang Mehta Pandit Niraj Parikh Smt Samata Chaitanya Pandit Rattan Mohan Sharma Pandita Tripti Mukherjee Sangeet Martand Pandit Jasraj  </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>17th Jan'22</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-5/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-5/</a></td>
                                            <td>Manbhavan</td>
                                            <td>Shri Pragyan Barua Smt Lalita Mathur Smt Radhika Surana Vidushi Ankita Joshi Pandita Gargee Siddhanta Dutta Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>17th Dec'21</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-4/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-4/</a></td>
                                            <td>Samaprakritik Raag</td>
                                            <td>Pandit Saugata Banerjee Shri Prakash Warrier Shri Harsh Shah Pandit Pritam Bhattacharjee Smt Madhushri Narayan Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>17th Nov'21</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-3/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-3/</a></td>
                                            <td>Rare Ragas</td>
                                            <td>Pandit Ramesh Narayan Dr Shubha Varma Shri Swar Sharma Smt Uma Singh Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>17th Oct'21</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-episode-2/">https://pjim.podbean.com/e/jasvaani-prasaaran-episode-2/</a></td>
                                            <td><b>Shuddh, Chhayalag and Sankirn raag शुद्ध, छायालग और संकीर्ण राग</b></td>
                                            <td>Pandit Saptarshi Chakraborty Pandit Mukesh Desai Shri Aditya Shah Ayan Ribhu Sinha Smt Babeena Sharma Pandit Radharaman Kirtane Pandita Tripti Mukherjee Sangeet Martand Pandit Jasrajji </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>17th Sep'21</td>
                                            <td><a target="_blank" href="https://pjim.podbean.com/e/jasvaani-prasaaran-1-episode-1/">https://pjim.podbean.com/e/jasvaani-prasaaran-1-episode-1/</a></td>
                                            <td>Janmashtami</td>
                                            <td>Pandit Mukesh Desai Shri Hari Nott Pandita Gargee Siddhanta Dutta Pandit Rattan Mohan Sharma Smt Madhumati Kulkarni Pandita Tripti Mukherjee Sangeet Martand Pandit Jasraj </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </div>

                    <div id="shibir" class="shibir1 content_tabs mt-5 mb-5">
                        <!-- <h4 class="orngTxt mb-3">Shibir</h4> -->
                        <div class="tab_titl"> 
                            <div class="img_tag text-center">
                                <img src="images/sibhir.png" alt="sibhir" class="img-fluid ">
                            </div>
                            <h5 class="mt-3 mb-3 font-weight-bold">भूमिका (Preface)</h5>
                            <p>Learning a Vidya, which is the ‘Sarvoccha’ and toughest amongst the 64 Kalas, cannot be accomplished just within the one hour session per week. To understand this Vidya and have a miniscule grasp of it, it takes years of rigorous Riyaaz, Manan, and Chintan. Beyond the conscious mind, a student’s subconscious  should be in that Mahol constantly. To attain a drop of the ocean, you have to get full exposure to every aspect of the Vidya incessantly for a duration of time.  </p>
                            <p>In ancient India, Students used to stay in their Guru-Ghar, learn whenever their Guru wishes and move forward in their journey from a Student to Disciple under the Guru-Shishya Parampara tradition </p>
                            <p>In modern days, due to various challenges, it is not always  possible to follow or avail the<br> Guru-Shishya tradition as it was in ancient times. 
                                <br>However, the learning process remains the same.
                            </p>
                            <p>
                                The length of the journey is unknown.<br> 
                                It doesn't matter how deep you are able to dive in in one lifetime, but sincere and aspiring students need to get a glimpse of every aspect of Guru-Shishya Parampara learning.
                            </p>
                            <p>These Shibir-Festivals are envisioned, designed and brought into existence by the Heart of the Institute, Padma Shri hon’rd Pta Tripti Mukherjee with the Blessing, Generosity and Grace of the Heart-Beat of the Institute, her Guruji, Padma Vibhushan Sangeet Martand Pandit Jasrajji.</p>
                            <p>HE is so proud of these Shibir-Festivals that HE never gets tired of talking about them. Beaming with pride HE observes: “In no part of this world, does a <b>Sangeet-Yagna</b> of this magnitude and intensity exist”. HE feels so happy and elated that a Shibir of this caliber has come into existence under this Gurukul@300128. Students who are associated with this Institute are truly blessed and fortunate.</p>
                            <p>We have our Grand Shibir-Festival in July which is the Sur-Laya-Chhanda Mahotsav Shibir.<br>
                                Other than this grand event, we also have Kalpa-Shibir and Adhaar-Shibir during the year, for  inspiration which helps the students strengthen their understanding of the various aspects of Music,
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img_tag text-center">
                                        <img src="images/shibir_Img1.jpg" alt="shibir_Img1" class="img-fluid ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img_tag text-center">
                                        <img src="images/shibir_Img2.jpg" alt="shibir_Img2" class="img-fluid ">
                                    </div>
                                </div>
                            </div>
                            <p>
                                <ul class="pl-0 mt-4 list-unstyled">
                                    <li class="d-flex mb-3">
                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                        <div class="">
                                            <h5 class="mb-3"><b>सुर-लय-छंद-महोत्सव शिबिर</b> (Sur-Laya-Chhanda-Mahotsav Shibir)</h5>
                                            <h6 class="mt-3 mb-3"><b>सम्बन्धित</b> (About)</h6>
                                            <p>The Sur-Laya-Chhanda Mahotsav Shibir is a grand festival of music, a one-of-a-kind experience true to its name. </p>
                                            <p>For ‘Dear Bade-Guruji’ as HE is addressed by the students of the Institute, this Shibir is very close to HIS heart. HE takes pride in the fact that it was conceived by HIS senior disciple, ‘Padma Shri’ honored, Pandita Tripti Mukherjee, the Director of Pandit Jasraj Institute. </p>
                                            <p>Her utmost dedication has made  this SLCM Shibir  a tradition and an integral part of Gurukul@300128 </p>
                                            <p>Thanks to Pandita Tripti Mukherjee’s unparalleled devotion and surrender towards Music and her Guru, her achievements in spreading Indian Classical Music, India’s age old values, and rich cultural heritage in the USA, the Government of India honored Pandita Tripti Mukherjee with the prestigious ‘Padma Shri’ award in 2015. </p>
                                            <p>We, at Pandit Jasraj Institute, are extremely proud of our Guruji for this moment in her life and indebted to the Govt. of India for recognizing and bestowing one of the highest Civic Honors  to our Guruji. Gratitude!</p>
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <h6 class="mt-3 mb-3"><b>तभी एवं अभी</b> (Then and Now)</h6>
                                                        <p>SLCM Shibir used to be a residential program held at Swami Dayananda’s Gurukulam in Saylorsburg, Pennsylvania, PA for over 20 years and a few times at Vraj and Shanti Mandir. </p>
                                                        <p>We pay our deepest respect and gratitude to these Institutions for providing every single facility to fulfill our requirements for this invaluable experience. Because of their generosity, the students and disciples were able to experience true Ashram-living with their Guru as it was under Guru-Shishya-Parampara in the old days. Gratitude! </p>
                                                        <p>Now that our existence is beyond any boundaries of physical space and time, the Shibir location is Amurta. Our ideology and philosophy is:‘Vasudhaiva Kutumbakam’ ! </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center row_img">
                                                                <img src="images/slm_shibir1.jpg" alt="slm_shibir1" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6  p-0">
                                                            <div class="img_tag text-center row_img">
                                                                <img src="images/slm_shibir2.jpg" alt="slm_shibir2" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center row_img">
                                                                <img src="images/slm_shibir3.jpg" alt="slm_shibir3" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center row_img">
                                                                <img src="images/slm_shibir_4.jpg" alt="slm_shibir4" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                             
                                            <h6 class="mt-3 mb-3"><b>अनुभव</b> [Experience]</h6>
                                            <p>The Sur-Laya-Chhanda Mahotsav Shibir, the grand shibir-festival of 11 days, is like a spiritual journey.
                                                It is a uniquely precious, truly once-in-a-lifetime experience for all the Mewaties.
                                            </p>
                                            <p>For Bade-Guruji’s grand-disciples, it is a privilege to live and study with their ‘Bade Guruji’, and Guruji, along with all the Gurujans, HIS senior disciples. 
                                                <br>A new door to learning opens up for the students of this Gurukul, as our Guruji says “by the process of <b>‘observe and absorb’”</b>. 
                                            </p>
                                            <p>Even if one is  just observing, by the end of the 11th day the student absorbs the essence and vastness of it all. They realize that it takes more than a lifetime to be a more complete and  accomplished musician, be it a Performer, a Researcher, a Musicologist or a learned Music Connoisseur! </p>
                                            <p>For HIS disciples, our Gurujans, it is a once-a-year opportunity to relive the moments that were spent with their beloved, revered Guruji over the  decades.</p>
                                            <p>On this path of ‘Saraswati Upasana’, the Sur-Laya-Chhanda Mahotsav Shibir is a boon to the grand-disciples of Sangeet Martand Pandit Jasraj ji for their journey from a ‘Student’ to become a ‘Disciple’. 
                                                For HIS ‘Disciples’, our Gurujans, it is an inward journey where they can become the ‘Sadhakas’ and not merely the Musicians.
                                            </p>
                                            <p>For HIM, the Sangeet Martand Himself, the Sur-Laya-Chhanda Mahotsav Shibir is…</p>
                                            <p>
                                                <ul class="pl-3 mt-3">
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">A Tradition, a Maha-Mahotsav when HE is ever eager to meet all those who are a ‘part of HIM’...</p>
                                                    </li>
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">A moment to reunite with, <b>‘प्राण से भी अधिक प्रिय’</b>, His disciples, who are an integral part of His ‘larger than life’ Life… His disciples,<b> उन के शिष्य-वृन्द, जिन को उन्होंने ‘कुम्हार’ बन, अपने हाथों से गढ़ा … </b></p>
                                                    </li>
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">The time HE looks forward to the most, to reunite with His disciples, to recharge their lives with new strength to move forward in their journey…</p>
                                                    </li>
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">An opportunity to meet all the grand-disciples and feel proud to see the Mewati tradition spreading like the rays of the Martand… </p>
                                                    </li>
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">An occasion to feel completely blissful and rest assured, that Mewati Sangeet is safe and secure in  able hands…that the Mewati Sun will be on the horizon as a ‘Sanskriti’ in Sangeet Jagat for Millions of years to come…</p>
                                                    </li>
                                                    <li class="d-flex mb-1">
                                                        <p class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></p>
                                                        <p class="">A landmark moment worth waiting for, in the sea of timelessness… </p>
                                                    </li>
                                                </ul>
                                            </p>
                                            <p>This Sangeet-Yagya will continue until His ‘Bala ji’ is at the fullest of her ability…on this earth…</p>
                                        </div>    
                                    </li>             
                                    <li class="mb-3">                                        
                                        <div class="">                                           
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div>
                                                            <div class="">
                                                                <h6 class="mb-3"><b>कल्प शिबिर</b> (Kalpa Shibir) -</h6>
                                                                <p> <b>नव-कल्प </b>(Nav-Kalpa) Shibir (for kids);       </p>
                                                                <p><b>प्रथम -कल्प</b> (Pratham-Kalpa) Shibir (adult beginners) </p>
                                                                <p>A day of music and fun with our Guruji, Padma Shri Pta.Tripti Mukherjee ji. 
                                                                    Learn the nuances and intricacies of our music through engaging and interactive discussions.<br>
                                                                    Get a broad and comprehensive exposure to music and beyond.<br>
                                                                    Cultivate your music appreciation, acumen and explore aspects of creativity. 
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>
                                                        <div>
                                                            <div class="">
                                                                <h6 class="mb-3"><b>आधार शिबिर</b> (Adhaar Shibir) - AadyaGuru Shibir to strengthen the basic principles of teaching.’</h6>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center">
                                                                <img src="images/pandit_ji_sanman.jpg" alt="pandit_ji_sanman" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6  p-0">
                                                            <div class="img_tag text-center">
                                                                <img src="images/memory_pic.jpg" alt="memory_pic" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center">
                                                                <img src="images/Gji_pic.jpg" alt="Gji_pic" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <div class="img_tag text-center">
                                                                <img src="images/meet_pic.jpg" alt="meet_pic" class="img-fluid ">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                </ul>
                            </p>
                        </div>
                    </div>

                    <div id="student_concerts" class="student_concerts1 content_tabs mt-5 mb-5">
                        <!-- <h4 class="orngTxt mb-3">Student Concerts</h4>  -->
                        <div class="tab_titl">
                            <p>Performance is at the core of learning a performing art like vocal music.  It is an event that can bring together all facets of a learner - their skills, hard work, focus, ability to express, coordination with fellow artistes, usage of a microphone where applicable, their clarity of diction, etc.  A performance is an opportunity for the performer to serve their Guru and the Gharana.</p>
                            <div class="col-md-12 mb-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img_tag text-center h100">
                                            <img src="images/student_concerts.jpg" alt="student_concerts" class="img-fluid h100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img_tag text-center h100">
                                            <img src="images/student_concerts2.jpg" alt="student_concerts2" class="img-fluid h100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="img_tag text-center h100">
                                            <img src="images/student_concerts3.jpg" alt="student_concerts3" class="img-fluid h100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>In the institute, students from different stages of learning are offered an opportunity to be reviewed by their Guru and superiors.  Following are the various events conducted at the institute regularly throughout the year:</p>
                            <p>Currently, these events are held:  Amurta (virtual)</p>
                            <p><b>समारम्भ </b>(Samaarambh) - A short recital by a student, sharing the stage with Guru Bhai-Bahen/Sakha-Sakhi <br>
                                If eligible and all criteria are met, he/she will be recognized as ‘Mewati Deepankur’ or vice versa.
                            </p>
                            <p><b>आरोह</b> (Aaroha) - A short Solo recital, an ascending journey towards Padaarpan <br>
                                If eligible and all criteria are met, he/she will be recognized as ‘Mewati Deepak’ or vice versa
                            </p> 
                            <p><b>पदार्पण </b>(Padaarpan) - A full length recital by a student when he/she is ready to be launched on the Mighty Stage; perhaps fortunate enough to share the stage with other professional artistes and Legends. Thus a commencement of the artistic journey in a grand manner. 
                               <br> Recognized as ‘Mewati Pradeept’ once you are ready for ‘Padaarpan’ or vice versa.</p>
                        </div>
                    </div> 
                    <div id="vividh_prasang" class="vividh_prasang1 content_tabs mt-5 mb-5">
                        <!-- <h4 class="orngTxt mb-3">Vividh-Prasang</h4> -->
                        <div class="tab_titl"> 
                              
                            <!--<p>-->
                            <!--    <ul class="pl-2 d-flex">-->
                            <!--        <li class="d-flex mb-2 p-2 mr-2">-->
                            <!--            <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>-->
                            <!--                <div class="">Vrittanta </div>-->
                            <!--        </li>-->
                            <!--        <li class="d-flex mb-2 p-2 mr-2">-->
                            <!--            <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>-->
                            <!--                <div class="">Dainandini </div>-->
                            <!--        </li>-->
                            <!--        <li class="d-flex mb-2 p-2 mr-2">-->
                            <!--            <div class="logoCor"><i class="fa fa-music p-2" aria-hidden="true"></i></div>-->
                            <!--                <div class="">Saakshya </div>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</p>-->
                            <div class="col-md-12 p-0">
                                <h3 class="font-weight-bold"><i>Vrittanta</i></h3>
                                <div class="row">
                                    <div class="col-md-4 h100">
                                        <div class="img_tag text-center h100 mb-2">
                                            <img src="images/Vrittanta_1_GRT.jpg" alt="Vrittanta_1" class="img-fluid h100  mb-0">
                                            <div class="img_heading text-center p-2">
                                                <p class="fnt15 mb-0 font-weight-bold text-center">January'21</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 h100">
                                        <div class="img_tag text-center h100 mb-2">
                                            <img src="images/Vrittanta_2.jpg" alt="Vrittanta_2" class="img-fluid  h100 mb-0">
                                            <div class="img_heading text-center p-2">
                                                <p class="fnt15 mb-0 font-weight-bold text-center">August'21</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 h100">
                                        <div class="img_tag text-center h100 mb-2">
                                            <img src="images/Vrittanta_3.jpg" alt="Vrittanta_2" class="img-fluid h100  mb-0">
                                            <div class="img_heading text-center p-2">
                                                <p class="fnt15 mb-0 font-weight-bold text-center">June'21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<h3 class="mt-3 font-weight-bold"><i>Vrittanta</i></h3>  -->
                            <h6 class="mb-4">An Interactive Narrative</h6>
                            <p>Enjoy access (interaction with) to the esteemed musicians and the distinguished personalities as our honored guests for a Q & A session - <b>‘Vrittanta’</b></p>
                            <p>Feel free to ask  fun, light-hearted questions or insightful in-depth ones on music or any other subject. <br>
                                Listen to their untold stories and get to know them well through a face to face interactive session - an opportunity and a special experience for <b>connoisseurs of music!</b>
                            </p>
                            <p><b>Listen into our recent sessions of Vrittanta</b></p>
                            <div class="dainandhi">
                                <!--<h6 class="mb-3"><u>Dainandini</u></h6> -->
                                <h3 class="mt-5 font-weight-bold"><i>Dainandini</i></h3>  
                                <div class="col-md-12 p-0 mb-5">  
                                    <div id="carouselExampleSlidesOnly" class="carousel slide h100" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>  
                                            <!-- <li data-target="#carouselExampleSlidesOnly" data-slide-to="4"></li> -->

                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item  active">
                                                <img src="images/dainandhi.png" alt="dainandhi" class="img-fluid w100">
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                                
                                <h6 class="mb-4">A personal journal, a daily diary for the disciples of Pandit Jasraj Institute</h6>
                                <p>A Diary for the PJIM Mewati Gurukul-Parivaar , a place where the disciples/students can share their personal thoughts, creations, achievements, experiences, reflections, inspirations, highs and lows of their musical lives - towards evolving  a collective memoir of their journey.</p>
                                <p>It will be similar to a personal diary that some/many of us may write regularly</p>
                                <p>You are encouraged to write something every day. It can be related to your musical life or whatever you wish to convey and share with your GuruBhai/Bahen… Try to express yourself positively. Even if it is something about a low point in your life/Musical life, try to see the ‘teachings’ of life behind it. You will feel much better, much lighter, I am 100% sure…</p>
                                <p>It is not necessary to react to everyone's post and/or to react to all of them. <br>
                                     But, if we do, try not to be judgemental, controversial  or offensive and be sensitive and respectful to others’ feelings. <br>
                                    While responses of appreciation, support and encouragement are appreciated, continue to build your own ‘Dainandini’ !
                                </p>
                            </div>
                            <div class="saakshya mt-5">
                                <h6 class="mb-3"><u></u></h6> 
                                <h3 class="mt-3 font-weight-bold"><i>Saakshya</i></h3>  
                                <div class="col-md-12 p-0 mb-5">  
                                     
                                    <section class="regular slider mb-0">
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-1.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-2.jpg" alt="images"> 
        								</div>	
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-3.jpg" alt="images"> 
        								</div>	
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-4.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-5.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-6.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-7.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-8.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-9.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-10.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-11.jpg" alt="images"> 
        								</div> 
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-12.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-13.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-14.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-15.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-16.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-17.jpg" alt="images"> 
        								</div> 
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-18.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-19.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-20.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-21.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-22.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-23.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-24.jpg" alt="images"> 
        								</div>
        								<div class="text-uppercase font-weight-bold holdanimate">
        								  <img src="images/video_img/Day-25.jpg" alt="images"> 
        								</div>
        							</section>
                                </div>
                                <p>The <b>Saakshya series - Ek Satat Tap-Saiyaan....</b><br>
                                    The Past, the Present and The Future...witnessing the manifestation and what is yet to be…  
                                </p>

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