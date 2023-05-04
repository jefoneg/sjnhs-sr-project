<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <script src="jquery/jquery.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <title>SJNHS-IS | Print SF-10</title>
</head>
<?php
include 'styles/style.php';
?>
<style>
    .bandpaper {
        background-color: white;
        font-size: 11px;

        padding-top: 10px;
        color: black;
        font-weight: normal;
    }

    .heading {
        width: 100%;

    }

    .heading td {
        padding: 0px;
    }

    .icon {
        width: 75px;
        height: 75px;
        border-radius: 50%;
    }

    .personal-info {
        width: 100%;
    }

    .personal-info td {
        text-align: left;
        font-weight: bold;
    }

    .container {
        padding: 10px 150px;
    }

    .up {
        text-transform: uppercase;
    }

    .b-bot {
        border-bottom: 1px solid black;
        padding: 0px;
        padding-left: 5px;
    }

    .tbl {
        width: 100%;
    }

    .tbl td {
        padding: 0px;
        text-align: left;
    }

    .tbl1 td {
        border: 1px solid black;
    }

    .card {}

    @media print {
        .container {
            width: 100%;
            padding: 10px 10px;
        }

        .card {
            width: 50%;
            float: left;
        }
    }
</style>

<body>
    <div class='container'>
        <div class='row bandpaper'>
            <div class='col-sm-12'>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:60px;'>Page 2</td>
                        <td style='width:220px;'>
                            <span>Gorme, Jefone O.</span>
                        </td>
                        <td style='width:60px;text-align: right;'>Form 137-SHS</td>
                    </tr>
                </table>
                <hr style="border-top:1px solid black;line-height: 9px">
            </div>

            <div class='col-sm-12'>
                <div class='col-sm-12' style='border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;'>LEARNER'S INFORMATION</div>
            </div>
            <div class='col-sm-12' style='margin-top:3px;'>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:60px;'>LAST NAME:</td>
                        <td style='width:220px;'>
                            <input type='text' class='input-line b-bot up' value='Gorme' />
                        </td>
                        <td style='width:60px;'>FIRST NAME:</td>
                        <td style='width:220px;'><input type='text' class='input-line b-bot up' value='Jefone' /></td>
                        <td style='width:105px;text-align:right;'>MIDDLE NAME:</td>
                        <td><input type='text' class='input-line b-bot up' value='Ouano' /></td>
                    </tr>
                </table>
                <table class='personal-info' border=0 style='margin-top:5px;'>
                    <tr>
                        <td style='width:10px;'>LRN:</td>
                        <td style='width:100px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td style='width:120px;text-align:right;'>Date of Birth (MM/DD/YYYY):</td>
                        <td style='width:100px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td style='width:20px;text-align:right;'>Sex:</td>
                        <td style='width:50px;'>
                            <input type='text' class='input-line b-bot up' value='Male' />
                        </td>
                        <td style='width:150px;text-align: right;'>Date of SHS Submission (MM/DD/YYYY):</td>
                        <td style='width:100px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                    </tr>
                </table>
            </div>

            <div class='col-sm-12'>
                <div class='col-sm-12 up' style='border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;'>
                    eligibilty for shs enrolment
                </div>
            </div>
            <div class='col-sm-12' style='margin-top:3px;'>
                <table class='tbl' border=0>
                    <tr>
                        <td><input type='checkbox' style='padding:0px;margin-top:3px;	'></td>
                        <td style='line-height:9px; text-indent: -0.6em;'>High School Completer*</td>
                        <td style='width:60px;text-align:left; text-indent: -13em;'>General Ave:</td>
                        <td style='width:50px;text-align: left; text-indent: -13em;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td><input type='checkbox' style='padding:0px;margin-top:3px; 	'></td>
                        <td style='line-height:9px;'>Junior High School Completer</td>
                        <td style='width:60px;text-align:left; text-indent: -16em;'>General Ave:</td>
                        <td style='width:50px;text-align: left; text-indent: -16em;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                    </tr>
                </table>
                <table class='tbl' border=0>
                    <tr>
                        <td style='width:300px;'>Date of Graduation/Completion (MM/DD/YYYY):</td>
                        <td style='width:100px;text-indent: -3em;'>
                            <input type='text' class='input-line b-bot up' value=' ' />
                        </td>
                        <td style='width:100px; text-indent: -3em;'>School Name:</td>
                        <td style='width:250px; text-indent: -4em; font-weight: bold;'>
                            <input type='text' class='input-line b-bot up' value='San Juan National High School' />
                        </td>
                        <td style='width:100px;text-indent: -3em;'> Address of School:</td>
                        <td style='width:250px;text-indent: -2em; font-weight: bold;'>
                            <input type='text' class='input-line b-bot up' value='SAN JOSE, SAN JUAN, SOUTHERN LEYTE' />
                        </td>
                        <td></td>
                    </tr>
                </table>
                <table class='tbl' border=0>
                    <tr>
                        <td><input type='checkbox' style='padding:0px;margin-top:3px;	'></td>
                        <td style='line-height:9px;'>PEPT Passer**</td>
                        <td style='width:60px;text-align:left; text-indent: -2em;'>Rating:</td>
                        <td style='width:50px;text-align: left; text-indent: -4.5em;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td><input type='checkbox' style='padding:0px;margin-top:3px; 	'></td>
                        <td style='line-height:9px;'>ALS A&E Passer***</td>
                        <td style='width:60px;text-align:left; text-indent: -4em;'>Rating:</td>
                        <td style='width:50px;text-align: left; text-indent: -6.5em;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td><input type='checkbox' style='padding:0px;margin-top:3px; 	'></td>
                        <td style='line-height:9px;'>Others (Pls. Specify):</td>
                        <td style='width:200px;text-align: left; text-indent: -5em;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                    </tr>
                </table>
                <table class='tbl' border=0>
                    <tr>
                        <td style='width:300px;'>Date of Examination/Assessment (MM/DD/YYYY):</td>
                        <td style='width:100px;text-indent: -7em;'>
                            <input type='text' class='input-line b-bot up' value=' ' />
                        </td>
                        <td style='width:200px; text-indent: -6em;'>Name and Address of Communitiy Learning Center:</td>
                        <td style='width:250px; text-indent: -3em; font-weight: bold;'>
                            <input type='text' class='input-line b-bot up' value='San Juan National High School' />
                        </td>
                        <td></td>
                    </tr>
                </table>
                <table class='tbl' border=0>
                    <tr>
                        <td style="font-size: 8px; font-weight: bold; font-style: italic;">*High School Completers are students who graduated from secondary school under the old curriculum</td>
                        <td style="font-size: 8px; font-weight: bold; font-style: italic;">***ALS A%E - Alternative Learning System Accreditation and Equivalency Test for JHS</td>
                        <td></td>
                    </tr>
                </table>
                <table class='tbl' border=0>
                    <tr>
                        <td style="font-size: 8px; font-weight: bold; font-style: italic;">**PEPT - Philippine Educational Placement Test for JHS</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class='col-sm-12'>
                <div class='col-sm-12 up' style='border:1px solid black;background-color:grey;margin-top:3px;text-align:center;font-weight: bold;'>
                    scholastic record
                </div>
            </div>
            <div class='col-sm-12' style='margin-top:3px;'>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;'>SCHOOL:</td>
                        <td style='width:300px;'>
                            <input type='text' class='input-line b-bot up' value='SAN JUAN NATIONAL HIGH SCHOOL' />
                        </td>
                        <td style='width:60px;'>SCHOOL ID:</td>
                        <td style='width:80px;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                        <td style='width:70px;text-align:left;'>GRADE LEVEL:</td>
                        <td style="width:60px;"><input type='text' class='input-line b-bot up' value='11' /></td>
                        <td style='width:20px;text-align:left;'>SY:</td>
                        <td style="width:100px;"><input type='text' class='input-line b-bot up' value='2019-2020' /></td>
                        <td style='width:15px;text-align:left;'>SEM:</td>
                        <td style="width:100px;"><input type='text' class='input-line b-bot up' value='1ST' /></td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;'>TRACK/STRAND:</td>
                        <td style='width:180px; text-indent: -3em;'>
                            <input type='text' class='input-line b-bot up' value='TVL-HE' />
                        </td>
                        <td style='width:60px; text-indent: -2em;'>SECTION:</td>
                        <td style='width:250px;text-indent: -5em;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                    </tr>
                </table>
                <div class='col-sm-12' style='padding:0px;border:1px solid black;border-top:0px solid black;'>
                    <div class='cross'> </div>
                    <table class='tbl tbl1'>
                        <tr>
                            <td rowspan=2 style='width:80px;text-align:center;font-weight:bold;font-size: 11px;'>Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style='text-align:center;font-weight:bold;font-size: 11px;'>SUBJECTS</td>
                            <td colspan=2 style='text-align:center;font-weight:bold;font-size: 11px;'>Quarter</td>
                            <td rowspan=2 style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>SEM FINAL GRADE</td>
                            <td rowspan=2 style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style='width:30px;text-align:center;font-weight:bold;font-size: 11px;'>1ST</td>
                            <td style='width:30px;text-align:center;font-weight:bold;font-size: 11px;'>2ND</td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td colspan="4" style='padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;'>Genral Ave. for the Semester:</td>
                            <td><br /></td>
                            <td> </td>
                        </tr>
                    </table>
                </div>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;font-size: 11px;'>Remarks:</td>
                        <td style='width:300px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='Eligibility for admission to Grade 11-First Sem' />
                        </td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;font-size: 11px;'>Prepared By:</td>
                        <td style='width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;'>Certified True and Correct By:</td>
                        <td style='width:40px; font-weight: bold;text-align: center;font-size: 11px;'>Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px;text-align: center;text-indent: 1em;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 10px;text-align: right;text-indent: 3.5em;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:70px; font-weight: bold;font-size: 11px;'>REMEDIAL CLASSES</td>
                        <td style='width:115px;font-size: 11px;font-weight: bold;'>Conducted from (MM/DD/YYYY):</td>
                        <td style='width:40px;font-size: 11px;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                        <td style='width:60px;text-align:left;font-size: 11px;'>to (MM/DD/YYYY):</td>
                        <td style="width:40px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='11' /></td>
                        <td style='width:15px;text-align:left;font-size: 11px;'>SCHOOL:</td>
                        <td style="width:130px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='SAN JUAN NATIONAL HIGH SCHOOL' /></td>
                        <td style='width:30px;text-align:left;font-size: 11px;'>SCHOOL ID:</td>
                        <td style="width:50px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='1ST' /></td>
                    </tr>
                </table>
                <div class='col-sm-12' style='padding:0px;border:1px solid black;border-top:0px solid black;'>
                    <div class='cross'> </div>
                    <table class='tbl tbl1'>
                        <tr>
                            <td style='width:80px;text-align:center;font-weight:bold;font-size: 11px;'>Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style='text-align:center;font-weight:bold;font-size: 11px;'>SUBJECTS</td>
                            <td style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>SEM FINAL GRADE</td>
                            <td style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>REMEDIAL CLASS MARK</td>
                            <td style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>RECOMPUTED FINAL GRADE</td>
                            <td style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                    </table>
                </div>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:100px; font-weight: bold;font-size: 11px;'>Name of Teacher/Adviser:</td>
                        <td style='width:300px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td style='width:60px; font-weight: bold;font-size: 11px;'>Signature:</td>
                        <td style='width:100px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                    </tr>
                </table>
            </div>
            <div class='col-sm-12' style='margin-top:3px;'>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;'>SCHOOL:</td>
                        <td style='width:300px;'>
                            <input type='text' class='input-line b-bot up' value='SAN JUAN NATIONAL HIGH SCHOOL' />
                        </td>
                        <td style='width:60px;'>SCHOOL ID:</td>
                        <td style='width:80px;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                        <td style='width:70px;text-align:left;'>GRADE LEVEL:</td>
                        <td style="width:60px;"><input type='text' class='input-line b-bot up' value='11' /></td>
                        <td style='width:20px;text-align:left;'>SY:</td>
                        <td style="width:100px;"><input type='text' class='input-line b-bot up' value='2019-2020' /></td>
                        <td style='width:15px;text-align:left;'>SEM:</td>
                        <td style="width:100px;"><input type='text' class='input-line b-bot up' value='1ST' /></td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;'>TRACK/STRAND:</td>
                        <td style='width:180px; text-indent: -3em;'>
                            <input type='text' class='input-line b-bot up' value='TVL-HE' />
                        </td>
                        <td style='width:60px; text-indent: -2em;'>SECTION:</td>
                        <td style='width:250px;text-indent: -5em;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                    </tr>
                </table>
                <div class='col-sm-12' style='padding:0px;border:1px solid black;border-top:0px solid black;'>
                    <div class='cross'> </div>
                    <table class='tbl tbl1'>
                        <tr>
                            <td rowspan=2 style='width:80px;text-align:center;font-weight:bold;font-size: 11px;'>Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td rowspan=2 style='text-align:center;font-weight:bold;font-size: 11px;'>SUBJECTS</td>
                            <td colspan=2 style='text-align:center;font-weight:bold;font-size: 11px;'>Quarter</td>
                            <td rowspan=2 style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>SEM FINAL GRADE</td>
                            <td rowspan=2 style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style='width:30px;text-align:center;font-weight:bold;font-size: 11px;'>1ST</td>
                            <td style='width:30px;text-align:center;font-weight:bold;font-size: 11px;'>2ND</td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td colspan="4" style='padding-left:4px;text-align:right;font-size: 11px;font-weight: bold;'>Genral Ave. for the Semester:</td>
                            <td><br /></td>
                            <td> </td>
                        </tr>
                    </table>
                </div>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;font-size: 11px;'>Remarks:</td>
                        <td style='width:300px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='Eligibility for admission to Grade 11-First Sem' />
                        </td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:40px; font-weight: bold;font-size: 11px;'>Prepared By:</td>
                        <td style='width:40px; font-weight: bold;text-align: center; text-indent: -4em;font-size: 11px;'>Certified True and Correct By:</td>
                        <td style='width:40px; font-weight: bold;text-align: center;font-size: 11px;'>Date Checked (MM/DD/YYYY):</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                    <td style="width:1%;"></td>
                                    <td style="border-bottom:1px solid;font-weight:bold;text-transform:uppercase;width:1%;text-align: center;font-size: 11px;">Ligaya D. Merquita</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px;text-align: center;text-indent: 1em;">Signature of Adviser over Printed Name</td>
                        <td style="font-size: 10px;text-align: right;text-indent: 3.5em;">Signature of Authorized Person over Printed Name, Designation</td>
                    </tr>
                </table>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:70px; font-weight: bold;font-size: 11px;'>REMEDIAL CLASSES</td>
                        <td style='width:115px;font-size: 11px;font-weight: bold;'>Conducted from (MM/DD/YYYY):</td>
                        <td style='width:40px;font-size: 11px;'><input type='text' class='input-line b-bot up' value='303481' /></td>
                        <td style='width:60px;text-align:left;font-size: 11px;'>to (MM/DD/YYYY):</td>
                        <td style="width:40px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='11' /></td>
                        <td style='width:15px;text-align:left;font-size: 11px;'>SCHOOL:</td>
                        <td style="width:130px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='SAN JUAN NATIONAL HIGH SCHOOL' /></td>
                        <td style='width:30px;text-align:left;font-size: 11px;'>SCHOOL ID:</td>
                        <td style="width:50px;font-size: 11px;"><input type='text' class='input-line b-bot up' value='1ST' /></td>
                    </tr>
                </table>
                <div class='col-sm-12' style='padding:0px;border:1px solid black;border-top:0px solid black;'>
                    <div class='cross'> </div>
                    <table class='tbl tbl1'>
                        <tr>
                            <td style='width:80px;text-align:center;font-weight:bold;font-size: 11px;'>Indicate if Subject is CORE, APPLIED, or SPECIALIZED</td>
                            <td style='text-align:center;font-weight:bold;font-size: 11px;'>SUBJECTS</td>
                            <td style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>SEM FINAL GRADE</td>
                            <td style='width:60px;text-align:center;font-weight:bold;font-size: 11px;'>REMEDIAL CLASS MARK</td>
                            <td style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>RECOMPUTED FINAL GRADE</td>
                            <td style='width:50px;text-align:center;font-weight:bold;font-size: 11px;'>ACTION TAKEN</td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                        <tr>
                            <td style='padding-left:4px;'><br /></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'></td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                            <td style='padding-left:4px;text-align:center;font-size: 11px;'> </td>
                        </tr>
                    </table>
                </div>
                <table class='personal-info' border=0>
                    <tr>
                        <td style='width:100px; font-weight: bold;font-size: 11px;'>Name of Teacher/Adviser:</td>
                        <td style='width:300px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                        <td style='width:60px; font-weight: bold;font-size: 11px;'>Signature:</td>
                        <td style='width:100px; text-indent: -3em;font-size: 11px;'>
                            <input type='text' class='input-line b-bot up' value='' />
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    //window.print();
</script>