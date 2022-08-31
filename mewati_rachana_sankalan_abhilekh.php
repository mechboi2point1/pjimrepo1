<?php
session_start();
include('include/header.php');
include('./connection.php');
if (isset($_POST['name']) && isset($_POST['password'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $sql = "select *from mewati_rachana_user where email = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $_SESSION['mewati_rachana_sankalan_abhilekh_user'] = 'true';
    if ($count == 1) {
    } else {
        echo '<script>';
        echo 'alert("Login Failed.Email/Password Wrong.")';
        echo '</script>';
        echo "<script>window.location.href='./Treasured_legacy.php';</script>";
    }
} else {
    if (isset($_SESSION['mewati_rachana_sankalan_abhilekh_user']) && $_SESSION['mewati_rachana_sankalan_abhilekh_user'] = 'true') {
    } else {
        echo '<script>';
        echo 'alert("Not allowed to acces this site directly.")';
        echo '</script>';
        echo "<script>window.location.href='./Treasured_legacy.php';</script>";
        exit();
    }
}
?>
<div class="pagecontent z100">
    <div class="container">
        <div class="slide_banner">
            <img src="images/Treasured_legacy.jpg" alt="Treasured_legacy" class="img-fluid w100">
        </div>
        <div class="col-md-12 tabs mt-5 p-0">
            <h4 class="orngTxt mb-3"><b>मेवाती रचना-संकलन अभिलेख </b>(Mewati Rachana-Sankalan Abhilekh): </h4>
            <div class="col-md-6 ">
                <div id="mewati_rachana_sankalan_abhilekh" class="mewati_rachana_sankalan_abhilekh1 active">
                    <div class="tab_titl">
                        <p>An Archival Anthology of Mewati Compositions, Preservation and Documentation of Mewati Bandishes.</p>
                        <p>This section consists of a treasured compilation of our Gharana’s compositions to be carried forward for generations to come.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 ml-auto">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <!--<button class="btn btn-success" type="submit">Go</button>  -->
                    <i class="fa fa-search input-group-text align-items-center d-flex"></i>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <img src="images/mewathi-accordion.png" alt="mewathi-accordion" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <div class="mewati_audi tab row1">
                            <h4 class="orngTxt">Bahar</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Mewati Rachana</th>
                                        <th>Arth/Meaning</th>
                                        <th>Dwanit (Audio File)</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:45%;">
                                                <div id="accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="accord1">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="accord1"> Kaliyan Chitak Chitak Sthai </h6>
                                                        </div>
                                                        <div id="collapse1" class="collapse show" aria-labelledby="accord1" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="tab_titl">
                                                                    <p>Kaliyan Chitak Chitak, Naye Naye Ras Bhine Bhare Hain Phool Tamaam Gul Anar Madhmaad Mogra Juhi Chameli Singaar<br>
                                                                        <b>Antara</b><br>
                                                                        Raja Basant Chayo Sab Ban Jayee Sajayee Ketaki Kamini Har Singar Kar Shringar Aayo Dekhat Man Lubhayo, Madhuvanti Lelo, Kunjan Kunjan, Basant Bahar
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="accord2">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="accord2">
                                                                Bandish #2
                                                            </h6>
                                                        </div>
                                                        <div id="collapse2" class="collapse" aria-labelledby="accord2" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="accord3">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="accord3">
                                                                Bandish #3
                                                            </h6>
                                                        </div>
                                                        <div id="collapse3" class="collapse" aria-labelledby="accord3" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:33%;">
                                                <p>-----------------------------<br>-----------------------------<br>----------------------</p>
                                            </td>
                                            <td style="width:200px;">
                                                <div class="audio_list">
                                                    <audio controls="" class="w100">
                                                        <source src="images/audio_music.mp3" type="audio/mp3">
                                                    </audio>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--<tr>-->
                                        <!--    <td><p><a href="">Add more</a></p></td>-->
                                        <!--</tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mewati_audi tab row2    ">
                            <h4 class="orngTxt">Bhairav</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Mewati Rachana</th>
                                        <th>Arth/Meaning</th>
                                        <th>Dwanit (Audio File)</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:45%;">

                                                <div id="accordion">
                                                    <div class="card">
                                                        <div class="card-header" id="accord11">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="accord1"> Kaliyan Chitak Chitak Sthai </h6>
                                                        </div>
                                                        <div id="accord1" class="collapse show" aria-labelledby="accord1" data-parent="#accordion">
                                                            <div class="card-body">
                                                                <div class="tab_titl">
                                                                    <p>Kaliyan Chitak Chitak, Naye Naye Ras Bhine Bhare Hain Phool Tamaam Gul Anar Madhmaad Mogra Juhi Chameli Singaar<br>
                                                                        <b>Antara</b><br>
                                                                        Raja Basant Chayo Sab Ban Jayee Sajayee Ketaki Kamini Har Singar Kar Shringar Aayo Dekhat Man Lubhayo, Madhuvanti Lelo, Kunjan Kunjan, Basant Bahar
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="accord2">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="accord2">
                                                                Bandish #2
                                                            </h6>
                                                        </div>
                                                        <div id="accord2" class="collapse" aria-labelledby="accord2" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" id="accord3">
                                                            <h6 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="accord3">
                                                                Bandish #3
                                                            </h6>
                                                        </div>
                                                        <div id="accord3" class="collapse" aria-labelledby="accord3" data-parent="#accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="width:33%;">
                                                <p>------------------------------<br>---------------------------<br>----------------------</p>
                                            </td>
                                            <td style="width:200px;">
                                                <div class="audio_list">
                                                    <audio controls="" class="w100">
                                                        <source src="images/audio_music.mp3" type="audio/mp3">
                                                    </audio>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
?>