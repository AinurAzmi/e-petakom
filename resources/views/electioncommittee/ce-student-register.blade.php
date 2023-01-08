<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

@extends('layouts.main-election')

@section('content')
    <div class="electionheader__container">
        <h1 class="main__title">Committee Election</h1>
    </div>
    <div class="electionregister__container">
        <br />
        <h1 style="font-size: 1.8rem;">Register As Candidate</h1>
        <button class="electionuploadregister">
            <form>
                <input type="image" name="candidateprofileimage" src="./images/upload-file.png" width="60" height="60">
                <!--<img class="file" src="./images/upload-file.png">-->
            </form>
        </button>
        <br />
        <a>
            <h2 style="text-align:center;">Upload Profile Image</h2>
        </a>
        <div class="electionforms__container">
            <div class="electionform__container">
                <form>
                    <div class="electionform_inputname_manifesto">
                        <div class="electionforminputname">
                            <h4>Name: </h4>
                            <input class="electiontextform_name" type="text" name="studentname" />
                        </div>

                        <div class="electionforminputname">
                            <h4>Manifesto: </h4>
                            <input class="electiontextform_manifesto" type="text" name="studentmanifesto" />
                        </div>
                    </div>
                    <br />

                    <div class="electionforminputname">
                        <h4>Matric ID: </h4>
                        <input class="electiontextform_matricid" type="text" name="studentmatricid" />
                    </div>

                    <br />

                    
                    <h4>Position to compete for: </h4>
                    <select class="eform-select position-dropdown" name="studentposition">
                                <option selected>Choose position</option>
                                <option value="Majlis Tertinggi">Majlis Tertinggi</option>
                                <option value="Portfolio Sukan & Rekreasi">Portfolio Sukan & Rekreasi</option>
                                <option value="Portfolio Keusahawanan & Logistik">Portfolio Keusahawanan & Logistik</option>
                                <option value="Portfolio Komuniti Luar & Hubungan Antarabangsa">Portfolio Komuniti Luar & Hubungan Antarabangsa</option>
                                <option value="Portfolio Hebahan & Publisiti">Portfolio Hebahan & Publisiti</option>
                                <option value="Portfolio Multimedia">Portfolio Multimedia</option>
                                <option value="Portfolio Sahsiah & Kebajikan">Portfolio Sahsiah & Kebajikan</option>
                                <option value="Portfolio Akademik & Kerjaya">Portfolio Akademik & Kerjaya</option>
                            </select>
                    <br />
                    <h4>Terms & Conditions of becoming a member of the PETAKOM Committee </h4>
                    <br />
                    <textarea class="electionterms" label="terms" rows="7">
First term
First term
First term
First term
First term
First term
                            </textarea>
                    <br />
                    <div style="text-align:center">
                        <button class="electionnormal">
                            <h3>Cancel</h3>
                        </button>
                        <button class="electionnormal">
                            <h3>Register</h3>
                        </button>
                    </div>

                </form>
            </div>
        </div>
@endsection
